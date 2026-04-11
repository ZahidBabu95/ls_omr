<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Testimonials') }}
            </h2>
            <a href="{{ route('admin.testimonials.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-xl transition-colors shadow-sm">
                + Add Testimonial
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
            @forelse($testimonials as $testimonial)
                <div class="border border-slate-200 rounded-2xl p-6 flex flex-col relative group hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start mb-4">
                        <div class="text-yellow-400 flex">
                            @for($i=0; $i<$testimonial->rating; $i++)
                                ★
                            @endfor
                        </div>
                        <div class="flex gap-2">
                            <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="text-blue-500 hover:text-blue-700 bg-blue-50 p-1.5 rounded-lg">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                            </a>
                            <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this testimonial?');">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 bg-red-50 p-1.5 rounded-lg">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <p class="text-slate-600 italic mb-6 flex-1">"{{ $testimonial->content }}"</p>
                    
                    <div class="flex items-center gap-4 border-t border-slate-100 pt-4">
                        @if($testimonial->image)
                            <img src="{{ Storage::url($testimonial->image) }}" class="w-10 h-10 object-cover rounded-full border border-slate-200 shrink-0">
                        @else
                            <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600 font-bold shrink-0">
                                {{ strtoupper(substr($testimonial->name, 0, 2)) }}
                            </div>
                        @endif
                        <div>
                            <h4 class="font-bold text-slate-900">{{ $testimonial->name }}</h4>
                            <p class="text-xs text-slate-500">{{ $testimonial->designation }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-10 bg-slate-50 rounded-2xl border border-dashed border-slate-300">
                    <p class="text-slate-500 mb-2">No testimonials found.</p>
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>
