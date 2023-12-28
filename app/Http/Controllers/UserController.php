<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $registrations = Registration::where('user_id', $userId)->first();
        return view('user.index', ['registrations' => $registrations]);
    }

    public function payment()
    {
        return view('user.payment');
    }

    public function order()
    {
        return view('user.order');
    }
}
