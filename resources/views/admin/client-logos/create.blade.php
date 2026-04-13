<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight font-outfit">Add Client Logo</h2>
            <a href="{{ route('admin.client-logos.index') }}" class="text-slate-500 hover:text-slate-700 font-semibold text-sm">&larr; Back</a>
        </div>
    </x-slot>

    <div class="bg-white overflow-hidden border border-slate-100 rounded-2xl p-6 max-w-2xl">
        <form action="{{ route('admin.client-logos.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Client / Company Name</label>
                <input type="text" name="name" required value="{{ old('name') }}" placeholder="e.g. Dhaka International School" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 text-sm">
                @error('name') <span class="text-red-500 text-xs font-semibold">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Logo Image</label>
                <input type="file" name="logo" required accept="image/*" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 text-sm file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-600 hover:file:bg-blue-100">
                <p class="text-xs text-slate-400 mt-1.5">PNG, JPG, SVG or WebP. Max 2MB. Transparent background recommended.</p>
                @error('logo') <span class="text-red-500 text-xs font-semibold">{{ $message }}</span> @enderror
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Website URL (Optional)</label>
                    <input type="url" name="website_url" value="{{ old('website_url') }}" placeholder="https://example.com" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 text-sm">
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Order Index</label>
                    <input type="number" name="order_index" value="{{ old('order_index', 0) }}" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 text-sm">
                </div>
            </div>

            <div class="pt-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-xl transition-colors shadow-lg shadow-blue-200 text-sm">Save Logo</button>
            </div>
        </form>
    </div>
</x-app-layout>
