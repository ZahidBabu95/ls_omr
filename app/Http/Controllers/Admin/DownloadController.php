<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function index()
    {
        $downloads = Download::latest()->get();
        return view('admin.downloads.index', compact('downloads'));
    }

    public function create()
    {
        return view('admin.downloads.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|max:10240', // 10MB max
        ]);

        $downloadsPath = $request->file('file')->store('downloads', 'public');

        Download::create([
            'title' => $validated['title'],
            'file_path' => $downloadsPath,
            'download_count' => 0
        ]);

        return redirect()->route('admin.downloads.index')->with('success', 'Downloadable file added successfully.');
    }

    public function edit(Download $download)
    {
        return view('admin.downloads.edit', compact('download'));
    }

    public function update(Request $request, Download $download)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'nullable|file|max:10240',
        ]);

        $data = ['title' => $validated['title']];

        if ($request->hasFile('file')) {
            if ($download->file_path && Storage::disk('public')->exists($download->file_path)) {
                Storage::disk('public')->delete($download->file_path);
            }
            $data['file_path'] = $request->file('file')->store('downloads', 'public');
        }

        $download->update($data);

        return redirect()->route('admin.downloads.index')->with('success', 'Downloadable file updated successfully.');
    }

    public function destroy(Download $download)
    {
        if ($download->file_path && Storage::disk('public')->exists($download->file_path)) {
            Storage::disk('public')->delete($download->file_path);
        }
        $download->delete();

        return redirect()->route('admin.downloads.index')->with('success', 'File deleted successfully.');
    }
}
