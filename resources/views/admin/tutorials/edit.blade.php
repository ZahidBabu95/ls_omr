<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800 leading-tight">
            {{ __('Edit Video Tutorial') }}
        </h2>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm border border-slate-100 rounded-2xl max-w-3xl">
        <div class="p-8 md:p-12">
            <form action="{{ route('admin.tutorials.update', $tutorial) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Video Title</label>
                    <input type="text" name="title" value="{{ $tutorial->title }}" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">YouTube Video URL</label>
                    <input type="url" name="youtube_url" value="{{ $tutorial->youtube_url }}" placeholder="https://www.youtube.com/watch?v=..." required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Description (Optional)</label>
                    <textarea name="description" rows="3" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">{{ $tutorial->description }}</textarea>
                </div>

                <div class="flex gap-6">
                    <div class="flex-1">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Sort Order</label>
                        <input type="number" name="sort_order" value="{{ $tutorial->sort_order }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    </div>
                    <div class="flex-1 flex px-4">
                        <label class="flex items-center gap-3 cursor-pointer mt-6">
                            <input type="checkbox" name="is_featured" value="1" {{ $tutorial->is_featured ? 'checked' : '' }} class="w-5 h-5 rounded border-slate-300 text-indigo-600 focus:ring-indigo-600 shadow-sm">
                            <div>
                                <span class="block text-sm font-bold text-slate-700">Set as Featured Demo</span>
                                <span class="block text-xs text-slate-500">This video will appear directly on the landing page hero section.</span>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="pt-6 border-t border-slate-100 flex gap-4">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-xl transition-all shadow-sm">
                        Update Tutorial
                    </button>
                    <a href="{{ route('admin.tutorials.index') }}" class="bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold py-3 px-8 rounded-xl transition-colors">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
