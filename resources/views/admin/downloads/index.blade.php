<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Downloads & Resources') }}
            </h2>
            <a href="{{ route('admin.downloads.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-xl transition-colors shadow-sm">
                + Add File
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
            <table class="w-full text-left border-collapse whitespace-nowrap">
                <thead>
                    <tr class="text-slate-500 text-sm border-b border-slate-100">
                        <th class="pb-3 px-4 font-semibold">Title</th>
                        <th class="pb-3 px-4 font-semibold">File path</th>
                        <th class="pb-3 px-4 font-semibold text-center">Downloads</th>
                        <th class="pb-3 px-4 font-semibold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-slate-700">
                    @forelse($downloads as $download)
                        <tr class="border-b border-slate-50 hover:bg-slate-50 transition-colors group">
                            <td class="py-4 px-4 font-bold text-slate-800">{{ $download->title }}</td>
                            <td class="py-4 px-4 text-slate-500 text-xs truncate max-w-xs">{{ $download->file_path }}</td>
                            <td class="py-4 px-4 text-center font-semibold text-blue-600 bg-blue-50/50 rounded-lg">
                                {{ number_format($download->download_count) }}
                            </td>
                            <td class="py-4 px-4 text-right flex justify-end gap-2">
                                <a href="{{ route('admin.downloads.edit', $download) }}" class="text-blue-500 hover:text-blue-700 bg-blue-50 p-2 rounded-lg transition-colors">
                                    Edit
                                </a>
                                <form action="{{ route('admin.downloads.destroy', $download) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this file?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 bg-red-50 p-2 rounded-lg transition-colors">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="py-8 text-center text-slate-500 bg-slate-50 rounded-xl border border-dashed border-slate-200">
                                No downloadable resources found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
