<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Frequently Asked Questions (FAQs)') }}
            </h2>
            <a href="{{ route('admin.faqs.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-xl transition-colors shadow-sm">
                + Add FAQ
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
                        <th class="pb-3 px-4 font-semibold">Question & Answer</th>
                        <th class="pb-3 px-4 font-semibold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-slate-700">
                    @forelse($faqs as $faq)
                        <tr class="border-b border-slate-50 hover:bg-slate-50 transition-colors group">
                            <td class="py-5 px-4 text-center">
                                <span class="bg-slate-100 text-slate-500 font-medium py-1 px-3 rounded-full text-xs">
                                    {{ $faq->order_index }}
                                </span>
                            </td>
                            <td class="py-5 px-4">
                                <h4 class="font-bold text-slate-800 text-base mb-1">{{ $faq->question }}</h4>
                                <p class="text-slate-500 line-clamp-2 max-w-3xl">{{ $faq->answer }}</p>
                            </td>
                            <td class="py-5 px-4 text-right flex justify-end gap-2 items-start mt-2">
                                <a href="{{ route('admin.faqs.edit', $faq) }}" class="text-blue-500 hover:text-blue-700 bg-blue-50 p-2 rounded-lg transition-colors">
                                    Edit
                                </a>
                                <form action="{{ route('admin.faqs.destroy', $faq) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this FAQ?');">
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
                            <td colspan="3" class="py-8 text-center text-slate-500 bg-slate-50 rounded-xl border border-dashed border-slate-200">
                                No FAQs added yet.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
