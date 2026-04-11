<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Create Pricing Plan') }}
            </h2>
            <a href="{{ route('admin.pricing.index') }}" class="text-slate-500 hover:text-slate-700 font-semibold">
                &larr; Back to Plans
            </a>
        </div>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm border border-slate-100 rounded-2xl p-6 max-w-3xl">
        <form action="{{ route('admin.pricing.store') }}" method="POST" class="space-y-6">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Plan Name</label>
                    <input type="text" name="name" required value="{{ old('name') }}" placeholder="e.g. Basic Demo" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Billing Cycle</label>
                    <input type="text" name="billing_cycle" required value="{{ old('billing_cycle', 'monthly') }}" placeholder="e.g. monthly, yearly" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    @error('billing_cycle') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Price (৳)</label>
                <input type="number" step="0.01" name="price" required value="{{ old('price') }}" placeholder="49.00" class="w-full md:w-1/2 bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                @error('price') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="pt-4 border-t border-slate-100">
                <label class="block text-sm font-bold text-slate-700 mb-2">Plan Features</label>
                <p class="text-xs text-slate-500 mb-4">List the features available in this plan. Leave input blank if not needed.</p>
                
                <div id="features-container" class="space-y-3">
                    <div class="flex gap-2 feature-row">
                        <input type="text" name="features[]" placeholder="Feature description..." class="flex-1 bg-slate-50 border border-slate-200 rounded-xl px-4 py-2 focus:outline-none focus:border-blue-500">
                        <button type="button" class="px-3 bg-red-50 text-red-500 rounded-xl hover:bg-red-100 transition-colors" onclick="this.parentElement.remove()">X</button>
                    </div>
                </div>
                
                <button type="button" id="add-feature" class="mt-4 text-sm font-semibold text-blue-600 bg-blue-50 hover:bg-blue-100 px-4 py-2 rounded-lg transition-colors inline-block">
                    + Add Another Feature
                </button>
            </div>

            <div class="pt-6">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-xl transition-colors shadow-lg shadow-blue-200">
                    Save Plan
                </button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('add-feature').addEventListener('click', function() {
            const container = document.getElementById('features-container');
            const row = document.createElement('div');
            row.className = 'flex gap-2 feature-row';
            row.innerHTML = `
                <input type="text" name="features[]" placeholder="Feature description..." class="flex-1 bg-slate-50 border border-slate-200 rounded-xl px-4 py-2 focus:outline-none focus:border-blue-500">
                <button type="button" class="px-3 bg-red-50 text-red-500 rounded-xl hover:bg-red-100 transition-colors" onclick="this.parentElement.remove()">X</button>
            `;
            container.appendChild(row);
        });
    </script>
</x-app-layout>
