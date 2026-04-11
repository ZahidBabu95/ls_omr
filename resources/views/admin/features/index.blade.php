<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Core Features') }}
            </h2>
            <a href="{{ route('admin.features.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-xl transition-colors shadow-sm">
                + Add Feature
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
                    <tr class="text-slate-500 text-sm border-b border-slate-100 uppercase tracking-widest">
                        <th class="pb-3 px-4 font-bold">Icon & Title</th>
                        <th class="pb-3 px-4 font-bold">Description</th>
                        <th class="pb-3 px-4 font-bold text-center">Order</th>
                        <th class="pb-3 px-4 font-bold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-slate-700">
                    @forelse($features as $feature)
                        <tr class="border-b border-slate-50 hover:bg-slate-50 transition-colors group">
                            <td class="py-4 px-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                                        {!! $feature->icon ?? '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>' !!}
                                    </div>
                                    <span class="font-bold text-slate-800">{{ $feature->title }}</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 text-slate-500 text-xs max-w-xs">{{ Str::limit($feature->description, 50) }}</td>
                            <td class="py-4 px-4 text-center font-semibold">{{ $feature->order_index }}</td>
                            <td class="py-4 px-4 text-right flex justify-end gap-2">
                                <a href="{{ route('admin.features.edit', $feature) }}" class="text-blue-500 hover:text-blue-700 bg-blue-50 p-2 rounded-lg transition-colors">
                                    Edit
                                </a>
                                <form action="{{ route('admin.features.destroy', $feature) }}" method="POST" onsubmit="return confirm('Delete this feature?');">
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
                            <td colspan="4" class="py-12 text-center text-slate-500 bg-slate-50 rounded-xl border border-dashed border-slate-200">
                                No features found. Add some to display on the landing page!
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
