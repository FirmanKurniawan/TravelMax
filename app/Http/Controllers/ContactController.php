<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $contact = new Contact;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->location = $request->location;
        $contact->link_gmap = $request->link_gmap;
        $contact->img_section = $request->img_section;
        $contact->save();

        return redirect('/contact');
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contact.show', compact('contact'));
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contact.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->location = $request->location;
        $contact->link_gmap = $request->link_gmap;
        $contact->img_section = $request->img_section;
        $contact->save();

        return redirect('/contact');
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/contact');
    }
}
