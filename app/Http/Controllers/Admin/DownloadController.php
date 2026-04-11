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
            'files' => 'required|array',
            'files.*' => 'file|max:10240', // 10MB max per file
        ]);

        $zipFileName = 'downloads/' . uniqid('sample_omr_') . '.zip';
        $fullZipPath = storage_path('app/public/' . $zipFileName);

        if (!file_exists(storage_path('app/public/downloads'))) {
            @mkdir(storage_path('app/public/downloads'), 0755, true);
        }

        $zip = new \ZipArchive();
        if ($zip->open($fullZipPath, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === TRUE) {
            foreach ($request->file('files') as $file) {
                $zip->addFile($file->getPathname(), $file->getClientOriginalName());
            }
            $zip->close();
        }

        Download::create([
            'title' => $validated['title'],
            'file_path' => $zipFileName,
            'download_count' => 0
        ]);

        return redirect()->route('admin.downloads.index')->with('success', 'Downloadable package added successfully.');
    }

    public function edit(Download $download)
    {
        return view('admin.downloads.edit', compact('download'));
    }

    public function update(Request $request, Download $download)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'files' => 'nullable|array',
            'files.*' => 'file|max:10240',
        ]);

        $data = ['title' => $validated['title']];

        if ($request->hasFile('files')) {
            if ($download->file_path && Storage::disk('public')->exists($download->file_path)) {
                Storage::disk('public')->delete($download->file_path);
            }
            
            $zipFileName = 'downloads/' . uniqid('sample_omr_') . '.zip';
            $fullZipPath = storage_path('app/public/' . $zipFileName);

            if (!file_exists(storage_path('app/public/downloads'))) {
                @mkdir(storage_path('app/public/downloads'), 0755, true);
            }

            $zip = new \ZipArchive();
            if ($zip->open($fullZipPath, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === TRUE) {
                foreach ($request->file('files') as $file) {
                    $zip->addFile($file->getPathname(), $file->getClientOriginalName());
                }
                $zip->close();
            }
            $data['file_path'] = $zipFileName;
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
