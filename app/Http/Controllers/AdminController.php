<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialMedia;
use App\Models\Registration;
use App\Models\History;
use App\Models\Order;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function about()
    {
        return view('admin.about');
    }

    public function contact()
    {
        return view('admin.contact');
    }

    public function footer()
    {
        return view('admin.footer');
    }

    public function social_media()
    {
        $socialMedias = SocialMedia::first();
        return view('admin.social_media', compact('socialMedias'));
    }

    public function registration()
    {
        $registrations = Registration::all();
        return view('admin.registration', compact('registrations'));
    }

    public function history()
    {
        $histories = History::all();
        return view('admin.history', compact('histories'));
    }

    public function dataOrder()
    {
        $orders = Order::all();
        return view('admin.data_order', compact('orders'));
    }

    public function accept($id)
    {
        $accept = Order::where('invoice_number', $id)->first();
        $accept->payment_status = 'paid';
        $accept->save();
        return redirect()->back()->with('success', 'Pembayaran di Accept');
    }
}
