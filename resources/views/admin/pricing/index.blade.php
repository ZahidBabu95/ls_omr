<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Pricing Plans') }}
            </h2>
            <a href="{{ route('admin.pricing.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-xl transition-colors shadow-sm">
                + Add New Plan
            </a>
        </div>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm border border-slate-100 rounded-2xl p-6">
        @if(session('success'))
            <div class="mb-6 p-4 rounded-xl bg-emerald-50 text-emerald-700 border border-emerald-100 font-medium">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @forelse($plans as $plan)
                <div class="border border-slate-200 rounded-2xl p-6 flex flex-col relative group hover:border-blue-300 transition-colors">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold text-slate-800">{{ $plan->name }}</h3>
                        <div class="flex gap-2">
                            <a href="{{ route('admin.pricing.edit', $plan) }}" class="text-blue-500 hover:text-blue-700 bg-blue-50 p-1.5 rounded-lg">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                            </a>
                            <form action="{{ route('admin.pricing.destroy', $plan) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this plan?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 bg-red-50 p-1.5 rounded-lg">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="flex items-baseline gap-1 mb-6">
                        <span class="text-3xl font-extrabold text-blue-600">৳{{ $plan->price }}</span>
                        <span class="text-slate-500 font-medium">/ {{ $plan->billing_cycle }}</span>
                    </div>
                    
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-slate-700 mb-2">Features:</p>
                        <ul class="space-y-2 text-sm text-slate-600">
                            @if($plan->features_json)
                                @foreach($plan->features_json as $feature)
                                    <li class="flex gap-2 items-start">
                                        <svg class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        {!! $feature !!}
                                    </li>
                                @endforeach
                            @else
                                <li class="text-slate-400 italic">No features listed.</li>
                            @endif
                        </ul>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-10 bg-slate-50 rounded-2xl border border-dashed border-slate-300">
                    <p class="text-slate-500 mb-2">No pricing plans found.</p>
                    <a href="{{ route('admin.pricing.create') }}" class="text-blue-600 font-semibold hover:underline">Create your first plan</a>
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>
