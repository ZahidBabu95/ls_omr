<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight font-outfit">Edit Client Logo</h2>
            <a href="{{ route('admin.client-logos.index') }}" class="text-slate-500 hover:text-slate-700 font-semibold text-sm">&larr; Back</a>
        </div>
    </x-slot>

    <div class="bg-white overflow-hidden border border-slate-100 rounded-2xl p-6 max-w-2xl">
        <form action="{{ route('admin.client-logos.update', $client_logo) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf @method('PUT')

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Client / Company Name</label>
                <input type="text" name="name" required value="{{ old('name', $client_logo->name) }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 text-sm">
                @error('name') <span class="text-red-500 text-xs font-semibold">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Logo Image</label>
                <div class="flex items-center gap-4 mb-3">
                    <div class="w-28 h-14 bg-slate-50 rounded-xl border border-slate-100 flex items-center justify-center p-2">
                        <img src="{{ asset('storage/' . $client_logo->logo_path) }}" alt="{{ $client_logo->name }}" class="max-h-full max-w-full object-contain">
                    </div>
                    <span class="text-xs text-slate-400">Current logo</span>
                </div>
                <input type="file" name="logo" accept="image/*" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 text-sm file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-600 hover:file:bg-blue-100">
                <p class="text-xs text-slate-400 mt-1.5">Leave empty to keep current logo.</p>
                @error('logo') <span class="text-red-500 text-xs font-semibold">{{ $message }}</span> @enderror
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Website URL (Optional)</label>
                    <input type="url" name="website_url" value="{{ old('website_url', $client_logo->website_url) }}" placeholder="https://example.com" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 text-sm">
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Order Index</label>
                    <input type="number" name="order_index" value="{{ old('order_index', $client_logo->order_index) }}" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 text-sm">
                </div>
            </div>

            <div class="pt-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-xl transition-colors shadow-lg shadow-blue-200 text-sm">Update Logo</button>
            </div>
        </form>
    </div>
</x-app-layout>
