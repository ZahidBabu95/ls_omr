<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl font-outfit text-slate-800 leading-tight">
            {{ __('Site Settings') }}
        </h2>
        <p class="text-sm text-slate-500 mt-1">Manage global configurations, branding, and hero content.</p>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-xl shadow-slate-200/40 border border-slate-100 rounded-2xl relative">
        <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-blue-500 to-indigo-500"></div>
        <div class="p-8 md:p-12">
            @if(session('success'))
                <div class="mb-8 p-4 rounded-xl bg-emerald-50 text-emerald-700 border border-emerald-100 font-medium flex items-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.settings.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8 max-w-3xl">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="md:col-span-2">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Favicon Icon</label>
                        <div class="flex items-center gap-6">
                            @if(isset($settings['favicon']) && $settings['favicon'])
                                <div class="w-16 h-16 rounded-xl border border-slate-200 shadow-sm p-2 flex items-center justify-center bg-slate-50">
                                    <img src="{{ asset($settings['favicon']) }}" alt="Favicon" class="max-w-full max-h-full object-contain">
                                </div>
                            @endif
                            <div class="flex-1">
                                <input type="file" name="favicon" accept="image/png, image/jpeg, image/x-icon, image/svg+xml, image/ico" class="w-full text-sm text-slate-500 file:mr-4 file:py-3 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 transition-colors">
                                <p class="text-xs text-slate-500 mt-2">Recommended: 32x32px or 64x64px PNG/ICO file. Uploading a new file will replace the current icon.</p>
                            </div>
                        </div>
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Landing Page Hero Title</label>
                        <input type="text" name="hero_title" value="{{ $settings['hero_title'] ?? '' }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-5 py-3.5 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all font-medium text-slate-800">
                        <p class="text-xs text-slate-500 mt-2">This text appears at the very top of the landing page hero section.</p>
                    </div>
                    
                    <div class="md:col-span-2">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Demo Video Youtube URL</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-slate-400" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                            </div>
                            <input type="text" name="demo_video_url" value="{{ $settings['demo_video_url'] ?? '' }}" placeholder="https://www.youtube.com/embed/..." class="w-full bg-slate-50 border border-slate-200 rounded-xl pl-11 pr-5 py-3.5 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all font-medium text-slate-800">
                        </div>
                    </div>
                    <div class="md:col-span-2 mt-6">
                        <h3 class="text-xl font-bold font-outfit text-slate-800 border-b border-slate-100 pb-3 mb-6">Header & Footer Information</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Contact Address</label>
                                <input type="text" name="contact_address" value="{{ $settings['contact_address'] ?? 'House #192, Road #2, Avenue #3, Mirpur DOHS, Dhaka 1216' }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Contact Email</label>
                                <input type="email" name="contact_email" value="{{ $settings['contact_email'] ?? 'hello@amarschool.co' }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Call Center / Phone</label>
                                <input type="text" name="contact_phone" value="{{ $settings['contact_phone'] ?? '+8801716282884' }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Office Hours</label>
                                <input type="text" name="office_hours" value="{{ $settings['office_hours'] ?? 'Office Hours: 8:00 AM – 7:45 PM' }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            </div>
                        </div>
                    </div>

                    <div class="md:col-span-2 mt-6">
                        <h3 class="text-xl font-bold font-outfit text-slate-800 border-b border-slate-100 pb-3 mb-6">Landing Page Sections</h3>
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Why OMR? (Title)</label>
                                <input type="text" name="problem_title" value="{{ $settings['problem_title'] ?? 'Why Traditional Checking Fails' }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Why OMR? (Subtitle)</label>
                                <textarea name="problem_subtitle" rows="2" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">{{ $settings['problem_subtitle'] ?? 'The manual grading process is broken, causing stress for teachers and delayed results for students.' }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-6 border-t border-slate-100">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 px-8 rounded-xl transition-all shadow-[0_8px_20px_rgba(37,99,235,0.2)] hover:shadow-[0_8px_25px_rgba(37,99,235,0.3)] hover:-translate-y-0.5">
                        Save Configuration
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
