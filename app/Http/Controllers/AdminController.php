<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
     public function updateAbout(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'resume' => 'nullable|mimes:pdf,doc,docx|max:2048',
        ]);

        $about = About::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($about->image && Storage::exists($about->image)) {
                Storage::delete($about->image);
            }

            // Store new image
            $imagePath = $request->file('image')->store('public/images');
            $about->image = $imagePath;
        }

        if ($request->hasFile('resume')) {
            // Delete old resume if it exists
            if ($about->resume && Storage::exists($about->resume)) {
                Storage::delete($about->resume);
            }

            // Store new resume
            $resumePath = $request->file('resume')->store('public/resumes');
            $about->resume = $resumePath;
        }

        $about->title = $request->title;
        $about->description = $request->description;
        $about->save();

        return back()->with('success', 'About section updated successfully.');
    }

    public function downloadResume()
    {
        $about = About::first();
        $filePath = storage_path('app/' . $about->resume);

        if (!file_exists($filePath)) {
            abort(404);
        }

        return response()->download($filePath, 'resume.pdf');
    }
}
