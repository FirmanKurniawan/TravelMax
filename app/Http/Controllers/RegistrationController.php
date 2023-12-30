<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use PDF;

class RegistrationController extends Controller
{
    public function processForm(Request $request)
    {
        // Validasi form
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|unique:registrations,nik',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'status_pernikahan' => 'required|in:Belum Menikah,Menikah,Cerai',
            'foto_ktp' => 'nullable|image',
            'foto_kk' => 'nullable|image',
            'foto_dokumen_lainnya' => 'nullable|image',
            'no_bpjs' => 'nullable',
            'no_paspor' => 'nullable',
            'tanggal_paspor_dikeluarkan' => 'nullable|date',
            'asal_migrasi_paspor' => 'nullable',
        ]);

        // Simpan data user
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->name = $request->nama;
        $user->save();
        // Simpan data ke database
        $registration = new Registration;
        $registration->user_id = $user->id;
        $registration->nama = $request->nama;
        $registration->nik = $request->nik;
        $registration->tempat_lahir = $request->tempat_lahir;
        $registration->tanggal_lahir = $request->tanggal_lahir;
        $registration->alamat = $request->alamat;
        $registration->no_telepon = $request->no_telepon;
        $registration->status_pernikahan = $request->status_pernikahan;

        // Upload foto jika ada
        if ($request->hasFile('foto_ktp')) {
            $file_ktp = $request->file('foto_ktp');
            $file_ktp_name = hash('sha256', time()) . '.' . $file_ktp->getClientOriginalExtension();
            $file_ktp->move(public_path('foto_ktp'), $file_ktp_name);
            $registration->foto_ktp = $file_ktp_name;
        }

        if ($request->hasFile('foto_kk')) {
            $file_kk = $request->file('foto_kk');
            $file_kk_name = hash('sha256', time()) . '.' . $file_kk->getClientOriginalExtension();
            $file_kk->move(public_path('foto_kk'), $file_kk_name);
            $registration->foto_kk = $file_kk_name;
        }

        if ($request->hasFile('foto_dokumen_lainnya')) {
            $file_lainnya = $request->file('foto_dokumen_lainnya');
            $file_lainnya_name = hash('sha256', time()) . '.' . $file_lainnya->getClientOriginalExtension();
            $file_lainnya->move(public_path('foto_dokumen_lainnya'), $file_lainnya_name);
            $registration->foto_dokumen_lainnya = $file_lainnya_name;
        }

        $registration->no_bpjs = $request->no_bpjs;
        $registration->no_paspor = $request->no_paspor;
        $registration->tanggal_paspor_dikeluarkan = $request->tanggal_paspor_dikeluarkan;
        $registration->asal_migrasi_paspor = $request->asal_migrasi_paspor;

        $registration->save();

        // Redirect atau kembalikan response sesuai kebutuhan
        return redirect('/')->with('success', 'Pendaftaran berhasil!');
    }

    public function registrationDelete($id)
    {
        $registration = Registration::find($id);
        $registration->delete();
        return redirect('/admin/registration')->with('success', 'Data berhasil dihapus!');
    }

    public function createPDF($id)
    {
        // Ambil data pendaftaran berdasarkan ID
        $registration = Registration::find($id);

        // Buat PDF dari view 'registrations.pdf' dan berikan data pendaftaran
        $pdf = PDF::loadView('generate_pdf', compact('registration'));

        // Download PDF dengan nama 'registration.pdf'
        return $pdf->download('generate_pdf.pdf');
    }
}
