<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Edit Download File') }}
            </h2>
            <a href="{{ route('admin.downloads.index') }}" class="text-slate-500 hover:text-slate-700 font-semibold">
                &larr; Back
            </a>
        </div>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm border border-slate-100 rounded-2xl p-6 max-w-2xl">
        <form action="{{ route('admin.downloads.update', $download) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Document Title</label>
                <input type="text" name="title" required value="{{ old('title', $download->title) }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                @error('title') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Replace File (Optional)</label>
                <div class="mb-3 text-sm text-slate-500">
                    Current file: <a href="{{ route('download.file', $download) }}" target="_blank" class="text-blue-600 font-semibold hover:underline">{{ basename($download->file_path) }}</a>
                </div>
                <input type="file" name="file" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 text-sm file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                <p class="text-xs text-slate-500 mt-2">Leave blank to keep the current file.</p>
                @error('file') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="pt-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-xl transition-colors shadow-lg shadow-blue-200">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
