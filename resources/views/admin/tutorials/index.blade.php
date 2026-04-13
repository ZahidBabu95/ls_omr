<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Video Tutorials') }}
            </h2>
            <a href="{{ route('admin.tutorials.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-xl transition-colors shadow-sm">
                + Add Tutorial
            </a>
        </div>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm border border-slate-100 rounded-2xl">
        @if(session('success'))
            <div class="p-4 mx-6 mt-6 rounded-xl bg-emerald-50 text-emerald-700 border border-emerald-100 font-medium">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto p-6">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="text-slate-500 text-sm border-b border-slate-100 whitespace-nowrap">
                        <th class="pb-3 px-4 font-semibold w-16 text-center">Order</th>
                        <th class="pb-3 px-4 font-semibold w-24">Video</th>
                        <th class="pb-3 px-4 font-semibold">Title & Details</th>
                        <th class="pb-3 px-4 font-semibold text-center">Status</th>
                        <th class="pb-3 px-4 font-semibold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-slate-700">
                    @forelse($tutorials as $tutorial)
                        <tr class="border-b border-slate-50 hover:bg-slate-50 transition-colors group">
                            <td class="py-5 px-4 text-center">
                                <span class="bg-slate-100 text-slate-500 font-medium py-1 px-3 rounded-full text-xs">
                                    {{ $tutorial->sort_order }}
                                </span>
                            </td>
                            <td class="py-5 px-4">
                                <a href="{{ $tutorial->youtube_url }}" target="_blank" class="w-20 h-14 bg-slate-900 rounded-lg flex items-center justify-center text-red-500 hover:text-white transition-colors relative overflow-hidden group/thumb">
                                    <svg class="w-8 h-8 z-10 drop-shadow-md" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                                </a>
                            </td>
                            <td class="py-5 px-4">
                                <h4 class="font-bold text-slate-800 text-base mb-1">{{ $tutorial->title }}</h4>
                                <p class="text-slate-500 line-clamp-1 max-w-sm text-xs">{{ $tutorial->youtube_url }}</p>
                            </td>
                            <td class="py-5 px-4 text-center">
                                @if($tutorial->is_featured)
                                    <span class="bg-indigo-100 text-indigo-700 font-bold py-1 px-3 rounded-full text-xs inline-flex items-center gap-1 border border-indigo-200 shadow-sm">
                                        ⭐ Featured Demo
                                    </span>
                                @else
                                    <span class="text-slate-400 text-xs">Standard</span>
                                @endif
                            </td>
                            <td class="py-5 px-4 text-right">
                                <div class="flex justify-end gap-2 items-center">
                                    <a href="{{ route('admin.tutorials.edit', $tutorial) }}" class="text-blue-500 hover:text-blue-700 bg-blue-50 p-2 rounded-lg transition-colors">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.tutorials.destroy', $tutorial) }}" method="POST" onsubmit="return confirm('Delete this tutorial?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700 bg-red-50 p-2 rounded-lg transition-colors">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-8 text-center text-slate-500 bg-slate-50 rounded-xl border border-dashed border-slate-200">
                                No video tutorials added yet.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
