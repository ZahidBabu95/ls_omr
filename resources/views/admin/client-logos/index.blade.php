<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-bold text-2xl text-slate-800 leading-tight font-outfit">Client Logos</h2>
                <p class="text-sm text-slate-500 mt-1">Manage the scrolling client logo showcase on your landing page.</p>
            </div>
            <a href="{{ route('admin.client-logos.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 px-5 rounded-xl transition-colors shadow-sm text-sm flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Add Logo
            </a>
        </div>
    </x-slot>

    <div class="bg-white overflow-hidden border border-slate-100 rounded-2xl">
        @if(session('success'))
            <div class="p-4 mx-6 mt-6 rounded-xl bg-emerald-50 text-emerald-700 border border-emerald-100 font-medium text-sm">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto p-6">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="text-slate-400 text-[10px] uppercase tracking-widest border-b border-slate-100">
                        <th class="pb-3 px-4 font-bold">Logo</th>
                        <th class="pb-3 px-4 font-bold">Client Name</th>
                        <th class="pb-3 px-4 font-bold">Website</th>
                        <th class="pb-3 px-4 font-bold text-center">Order</th>
                        <th class="pb-3 px-4 font-bold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-slate-700">
                    @forelse($logos as $logo)
                        <tr class="border-b border-slate-50 hover:bg-slate-50 transition-colors">
                            <td class="py-4 px-4">
                                <div class="w-24 h-12 bg-slate-50 rounded-xl border border-slate-100 flex items-center justify-center p-2">
                                    <img src="{{ asset('storage/' . $logo->logo_path) }}" alt="{{ $logo->name }}" class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all">
                                </div>
                            </td>
                            <td class="py-4 px-4 font-bold text-slate-800">{{ $logo->name }}</td>
                            <td class="py-4 px-4 text-slate-400 text-xs">{{ $logo->website_url ?? '—' }}</td>
                            <td class="py-4 px-4 text-center font-semibold">{{ $logo->order_index }}</td>
                            <td class="py-4 px-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <a href="{{ route('admin.client-logos.edit', $logo) }}" class="text-blue-500 hover:text-blue-700 bg-blue-50 px-3 py-1.5 rounded-lg text-xs font-bold transition-colors">Edit</a>
                                    <form action="{{ route('admin.client-logos.destroy', $logo) }}" method="POST" onsubmit="return confirm('Delete this logo?');">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700 bg-red-50 px-3 py-1.5 rounded-lg text-xs font-bold transition-colors">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-12 text-center text-slate-400 font-medium">
                                No client logos yet. Add some to display on the landing page!
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
