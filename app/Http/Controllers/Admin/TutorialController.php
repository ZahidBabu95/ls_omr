<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tutorial;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function index()
    {
        $tutorials = Tutorial::orderBy('sort_order')->get();
        return view('admin.tutorials.index', compact('tutorials'));
    }

    public function create()
    {
        return view('admin.tutorials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'youtube_url' => 'required|url',
        ]);

        $data = $request->all();
        $data['is_featured'] = $request->has('is_featured');
        $data['sort_order'] = $request->input('sort_order', 0);

        // If featured, unset others
        if ($data['is_featured']) {
            Tutorial::where('id', '>', 0)->update(['is_featured' => false]);
        }

        Tutorial::create($data);

        return redirect()->route('admin.tutorials.index')->with('success', 'Tutorial added successfully.');
    }

    public function edit(Tutorial $tutorial)
    {
        return view('admin.tutorials.edit', compact('tutorial'));
    }

    public function update(Request $request, Tutorial $tutorial)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'youtube_url' => 'required|url',
        ]);

        $data = $request->all();
        $data['is_featured'] = $request->has('is_featured');
        $data['sort_order'] = $request->input('sort_order', 0);

        // If featured, unset others
        if ($data['is_featured'] && !$tutorial->is_featured) {
            Tutorial::where('id', '!=', $tutorial->id)->update(['is_featured' => false]);
        }

        $tutorial->update($data);

        return redirect()->route('admin.tutorials.index')->with('success', 'Tutorial updated successfully.');
    }

    public function destroy(Tutorial $tutorial)
    {
        $tutorial->delete();
        return back()->with('success', 'Tutorial deleted successfully.');
    }
}
