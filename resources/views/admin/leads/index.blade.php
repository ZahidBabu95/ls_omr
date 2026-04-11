<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800 leading-tight">
            {{ __('Leads & Demo Requests') }}
        </h2>
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
                        <th class="pb-3 font-semibold px-4">Date</th>
                        <th class="pb-3 font-semibold px-4">Name</th>
                        <th class="pb-3 font-semibold px-4">Contact</th>
                        <th class="pb-3 font-semibold px-4 text-center">Demo Reqs.</th>
                        <th class="pb-3 font-semibold px-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-slate-700">
                    @forelse($leads as $lead)
                        <tr class="border-b border-slate-50 hover:bg-slate-50 transition-colors">
                            <td class="py-4 px-4 text-slate-500">{{ $lead->created_at->format('M d, Y h:i A') }}</td>
                            <td class="py-4 px-4">
                                <p class="font-bold text-slate-800">{{ $lead->name }}</p>
                                <p class="text-xs text-slate-500">{{ $lead->school }}</p>
                            </td>
                            <td class="py-4 px-4">
                                <p class="text-blue-600">{{ $lead->email }}</p>
                                <p class="text-slate-500">{{ $lead->phone }}</p>
                            </td>
                            <td class="py-4 px-4 text-center">
                                @if($lead->is_demo_requested)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800">Yes</span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-600">No</span>
                                @endif
                            </td>
                            <td class="py-4 px-4 text-right">
                                <form action="{{ route('admin.leads.destroy', $lead) }}" method="POST" onsubmit="return confirm('Delete this lead?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-500 hover:text-red-700 p-2 rounded-lg hover:bg-red-50 transition-colors">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-8 text-center text-slate-500">No leads found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($leads->hasPages())
            <div class="px-6 pb-6 pt-2">
                {{ $leads->links() }}
            </div>
        @endif
    </div>
</x-app-layout>
