<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialMedia;

class SocialMediaController extends Controller
{
    public function create()
    {
        return view('socialMedia.create');
    }

    public function store(Request $request)
    {
        $socialMedia = new SocialMedia;
        $socialMedia->facebook = $request->facebook;
        $socialMedia->twitter = $request->twitter;
        $socialMedia->pinrest = $request->pinrest;
        $socialMedia->youtube = $request->youtube;
        $socialMedia->save();

        return redirect('/socialMedia');
    }

    public function show($id)
    {
        $socialMedia = SocialMedia::find($id);
        return view('socialMedia.show', compact('socialMedia'));
    }

    public function edit($id)
    {
        $socialMedia = SocialMedia::find($id);
        return view('socialMedia.edit', compact('socialMedia'));
    }

    public function update(Request $request, $id)
    {
        $socialMedia = SocialMedia::find($id);
        $socialMedia->facebook = $request->facebook;
        $socialMedia->twitter = $request->twitter;
        $socialMedia->pinrest = $request->pinrest;
        $socialMedia->youtube = $request->youtube;
        $socialMedia->save();

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $socialMedia = SocialMedia::find($id);
        $socialMedia->delete();

        return redirect('/socialMedia');
    }
}
