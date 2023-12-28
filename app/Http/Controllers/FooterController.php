<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    public function index()
    {
        $footers = Footer::all();
        return view('footer.index', compact('footers'));
    }

    public function create()
    {
        return view('footer.create');
    }

    public function store(Request $request)
    {
        $footer = new Footer;
        $footer->logo_footer = $request->logo_footer;
        $footer->description_footer = $request->description_footer;
        $footer->email_footer = $request->email_footer;
        $footer->phone_footer = $request->phone_footer;
        $footer->location_footer = $request->location_footer;
        $footer->save();

        return redirect('/footer');
    }

    public function show($id)
    {
        $footer = Footer::find($id);
        return view('footer.show', compact('footer'));
    }

    public function edit($id)
    {
        $footer = Footer::find($id);
        return view('footer.edit', compact('footer'));
    }

    public function update(Request $request, $id)
    {
        $footer = Footer::find($id);
        $footer->logo_footer = $request->logo_footer;
        $footer->description_footer = $request->description_footer;
        $footer->email_footer = $request->email_footer;
        $footer->phone_footer = $request->phone_footer;
        $footer->location_footer = $request->location_footer;
        $footer->save();

        return redirect('/footer');
    }

    public function destroy($id)
    {
        $footer = Footer::find($id);
        $footer->delete();

        return redirect('/footer');
    }
}
