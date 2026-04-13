<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClientLogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientLogoController extends Controller
{
    public function index()
    {
        $logos = ClientLogo::orderBy('order_index')->get();
        return view('admin.client-logos.index', compact('logos'));
    }

    public function create()
    {
        return view('admin.client-logos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'required|image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'website_url' => 'nullable|url|max:255',
            'order_index' => 'required|integer|min:0',
        ]);

        $path = $request->file('logo')->store('client-logos', 'public');

        ClientLogo::create([
            'name' => $validated['name'],
            'logo_path' => $path,
            'website_url' => $validated['website_url'],
            'order_index' => $validated['order_index'],
        ]);

        return redirect()->route('admin.client-logos.index')->with('success', 'Client logo added successfully!');
    }

    public function edit(ClientLogo $client_logo)
    {
        return view('admin.client-logos.edit', compact('client_logo'));
    }

    public function update(Request $request, ClientLogo $client_logo)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'website_url' => 'nullable|url|max:255',
            'order_index' => 'required|integer|min:0',
        ]);

        if ($request->hasFile('logo')) {
            Storage::disk('public')->delete($client_logo->logo_path);
            $validated['logo_path'] = $request->file('logo')->store('client-logos', 'public');
        }

        $client_logo->update([
            'name' => $validated['name'],
            'logo_path' => $validated['logo_path'] ?? $client_logo->logo_path,
            'website_url' => $validated['website_url'],
            'order_index' => $validated['order_index'],
        ]);

        return redirect()->route('admin.client-logos.index')->with('success', 'Client logo updated successfully!');
    }

    public function destroy(ClientLogo $client_logo)
    {
        Storage::disk('public')->delete($client_logo->logo_path);
        $client_logo->delete();
        return redirect()->route('admin.client-logos.index')->with('success', 'Client logo deleted successfully!');
    }
}
