<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800 leading-tight">
            {{ __('Site Settings') }}
        </h2>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm border border-slate-100 rounded-2xl p-6">
        @if(session('success'))
            <div class="mb-6 p-4 rounded-xl bg-emerald-50 text-emerald-700 border border-emerald-100 font-medium">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.settings.store') }}" method="POST" class="space-y-6 max-w-2xl">
            @csrf
            
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Landing Page Hero Title</label>
                <input type="text" name="hero_title" value="{{ $settings['hero_title'] ?? '' }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                <p class="text-xs text-slate-500 mt-1">This text appears at the very top of the landing page.</p>
            </div>
            
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Demo Video Youtube Embedded URL</label>
                <input type="text" name="demo_video_url" value="{{ $settings['demo_video_url'] ?? '' }}" placeholder="https://www.youtube.com/embed/..." class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
            </div>

            <div>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-xl transition-colors shadow-lg shadow-blue-200">
                    Save Settings
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
