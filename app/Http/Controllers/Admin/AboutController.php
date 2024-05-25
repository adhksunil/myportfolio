<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AboutDataTable;
use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::first(); // Retrieve the first About model from the database
    return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit($id)
    {
        $about = About::find($id);

        if (!$about) {
            return redirect()->route('dashboard')->with('error', 'About section not found.');
        }

        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);

        $data = $request->only('title', 'description');

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($about->image) {
                Storage::delete($about->image);
            }
            $data['image'] = $request->file('image')->store('images');
        }

        if ($request->hasFile('resume')) {
            // Delete old resume if exists
            if ($about->resume) {
                Storage::delete($about->resume);
            }
            $data['resume'] = $request->file('resume')->store('resumes');
        }

        $about->update($data);

        return redirect()->route('admin.about.edit', $id)->with('success', 'About section updated successfully.');
    }

    public function downloadResume()
    {
        $about = About::find(1); // Assuming the record id is 1
        if ($about && $about->resume) {
            return Storage::download($about->resume);
        }
        return redirect()->back()->with('error', 'No resume found.');
    }
}
