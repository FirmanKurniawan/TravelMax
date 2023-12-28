<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Carbon\Carbon;
use Str;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product' => 'required',
            'payment_method' => 'required',
        ]);

        $order = new Order;
        $order->invoice_number = 'INV-' . strtoupper(Str::random(10)); // Generate invoice number
        $order->user_id = auth()->id(); // Get user ID from authenticated user
        $order->product = $request->product;
        $order->total = $request->total;
        $order->payment_method = $request->payment_method;
        $order->payment_status = 'unpaid'; // Default payment status
        $order->due_date = Carbon::now()->addDays(15); // Add 15 days to current date

        $order->save();

        return redirect()->back()->with('success', 'Order berhasil dibuat');
    }

    public function dataOrder()
    {
        $orders = Order::where('user_id', auth()->id())->get();
        return view('user.data_order', compact('orders'));
    }

    public function confirmationPayment($id)
    {
        $confirmation = Order::where('invoice_number', $id)->first();
        return view('user.confirmation_payment', compact('confirmation'));
    }

    public function confirmationPaymentStore(Request $request)
    {
        $order = Order::where('invoice_number', $request->invoice_number)->first();

        if ($request->hasFile('bukti_bayar')) {
            $file = $request->file('bukti_bayar');
            $file_name = hash('sha256', time()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('bukti_bayar'), $file_name);
            $order->bukti_bayar = $file_name;
        }

        $order->save();

        return redirect()->back()->with('success', 'Konfirmasi pembayaran berhasil dikirim');
    }
}
