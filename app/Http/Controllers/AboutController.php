<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('about.index', compact('abouts'));
    }

    public function create()
    {
        return view('about.create');
    }

    public function store(Request $request)
    {
        $about = new About;
        $about->tagline = $request->tagline;
        $about->description = $request->description;
        $about->benefit_1 = $request->benefit_1;
        $about->benefit_2 = $request->benefit_2;
        $about->benefit_3 = $request->benefit_3;
        $about->benefit_4 = $request->benefit_4;
        $about->img_section = $request->img_section;
        $about->img_content = $request->img_content;
        $about->save();

        return redirect('/about');
    }

    public function show($id)
    {
        $about = About::find($id);
        return view('about.show', compact('about'));
    }

    public function edit($id)
    {
        $about = About::find($id);
        return view('about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = About::find($id);
        $about->tagline = $request->tagline;
        $about->description = $request->description;
        $about->benefit_1 = $request->benefit_1;
        $about->benefit_2 = $request->benefit_2;
        $about->benefit_3 = $request->benefit_3;
        $about->benefit_4 = $request->benefit_4;
        $about->img_section = $request->img_section;
        $about->img_content = $request->img_content;
        $about->save();

        return redirect('/about');
    }

    public function destroy($id)
    {
        $about = About::find($id);
        $about->delete();

        return redirect('/about');
    }
}
