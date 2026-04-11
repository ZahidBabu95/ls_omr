<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Add FAQ') }}
            </h2>
            <a href="{{ route('admin.faqs.index') }}" class="text-slate-500 hover:text-slate-700 font-semibold">
                &larr; Back
            </a>
        </div>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm border border-slate-100 rounded-2xl p-6 max-w-3xl">
        <form action="{{ route('admin.faqs.store') }}" method="POST" class="space-y-6">
            @csrf
            
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Question</label>
                <input type="text" name="question" required value="{{ old('question') }}" placeholder="e.g. How do I scan the answer sheets?" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 font-medium">
                @error('question') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Answer</label>
                <textarea name="answer" required rows="5" placeholder="Provide a detailed answer..." class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">{{ old('answer') }}</textarea>
                @error('answer') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Display Order Index</label>
                <input type="number" name="order_index" value="{{ old('order_index', 0) }}" class="w-full md:w-1/3 bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                <p class="text-xs text-slate-500 mt-1">Lower numbers show up first on the landing page.</p>
                @error('order_index') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="pt-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-xl transition-colors shadow-lg shadow-blue-200">
                    Save FAQ
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
