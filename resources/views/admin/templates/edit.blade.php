<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Edit Template') }}
            </h2>
            <a href="{{ route('admin.templates.index') }}" class="text-slate-500 hover:text-slate-700 font-semibold">
                &larr; Back to Templates
            </a>
        </div>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm border border-slate-100 rounded-2xl p-6 max-w-2xl">
        <form action="{{ route('admin.templates.update', $template) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Template Title</label>
                <input type="text" name="title" required value="{{ old('title', $template->title) }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                @error('title') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Description</label>
                <input type="text" name="description" required value="{{ old('description', $template->description) }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                @error('description') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Order Index</label>
                    <input type="number" name="order_index" required value="{{ old('order_index', $template->order_index) }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Template Image</label>
                    <input type="file" name="image" accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 transition-colors">
                    <p class="text-xs text-slate-500 mt-2">Leave empty to keep existing image.</p>
                    @error('image') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    
                    @if($template->image)
                        <div class="mt-4 aspect-[1/1.4] w-32 bg-slate-100 rounded-xl overflow-hidden border border-slate-200">
                            <img src="{{ Storage::url($template->image) }}" class="w-full h-full object-cover">
                        </div>
                    @endif
                </div>
            </div>

            <div class="pt-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-xl transition-colors shadow-lg shadow-blue-200">
                    Update Template
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
