<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OmrTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OmrTemplateController extends Controller
{
    public function index()
    {
        $templates = OmrTemplate::orderBy('order_index')->get();
        return view('admin.templates.index', compact('templates'));
    }

    public function create()
    {
        return view('admin.templates.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
            'order_index' => 'required|integer',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('templates', 'public');
        }

        OmrTemplate::create($validated);

        return redirect()->route('admin.templates.index')->with('success', 'Template created successfully.');
    }

    public function edit(OmrTemplate $template)
    {
        return view('admin.templates.edit', compact('template'));
    }

    public function update(Request $request, OmrTemplate $template)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'order_index' => 'required|integer',
        ]);

        if ($request->hasFile('image')) {
            if ($template->image) {
                Storage::disk('public')->delete($template->image);
            }
            $validated['image'] = $request->file('image')->store('templates', 'public');
        }

        $template->update($validated);

        return redirect()->route('admin.templates.index')->with('success', 'Template updated successfully.');
    }

    public function destroy(OmrTemplate $template)
    {
        if ($template->image) {
            Storage::disk('public')->delete($template->image);
        }
        $template->delete();

        return redirect()->route('admin.templates.index')->with('success', 'Template deleted successfully.');
    }
}
