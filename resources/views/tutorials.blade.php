<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Video Tutorials | AmarSchool OMR</title>
    
    <meta name="description" content="Watch video tutorials to learn how to use AmarSchool OMR effortlessly.">
    <!-- Dynamic Favicon -->
    @php $faviconSetting = \App\Models\Setting::where('key','favicon')->value('value'); @endphp
    @if($faviconSetting)
        <link rel="icon" href="{{ asset($faviconSetting) }}" sizes="32x32">
    @else
        <link rel="icon" href="https://amarschool.co/wp-content/uploads/2024/04/cropped-logo-32x32.png" sizes="32x32">
    @endif
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Outfit', sans-serif; }
        .glass-nav {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
        }
    </style>
</head>
<body class="antialiased text-slate-800">

    <!-- Navigation -->
    <nav class="w-full glass-nav transition-all duration-300 py-3 shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <img src="https://amarschool.co/wp-content/uploads/2024/04/logo.png" alt="AmarSchool" class="h-10 w-auto object-contain">
            </a>
            <div class="flex space-x-6 items-center text-sm font-semibold text-slate-600">
                <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Back to Home
                </a>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <section class="pt-20 pb-12 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="text-indigo-600 font-bold uppercase tracking-widest text-sm mb-4 block">Knowledge Base</span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">Video Tutorials</h1>
            <p class="text-lg text-slate-500 max-w-2xl mx-auto mt-4">Learn how to configure, use, and master the AmarSchool OMR software with these step-by-step video guides.</p>
        </div>
    </section>

    <!-- Tutorials Grid -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($tutorials as $tutorial)
                    <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl border border-slate-200 transition-all duration-300 group flex flex-col">
                        <div class="relative w-full pb-[56.25%] bg-slate-900 overflow-hidden">
                            <iframe 
                                class="absolute top-0 left-0 w-full h-full border-0" 
                                src="{{ $tutorial->embed_url }}" 
                                title="{{ $tutorial->title }}" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            @if($tutorial->is_featured)
                            <div class="mb-3">
                                <span class="bg-indigo-100 text-indigo-700 font-bold py-1 px-3 rounded-full text-[10px] uppercase tracking-widest inline-flex items-center gap-1 border border-indigo-200">
                                    ⭐ Featured Guide
                                </span>
                            </div>
                            @endif
                            <h3 class="font-bold text-xl text-slate-900 mb-2 font-outfit">{{ $tutorial->title }}</h3>
                            <p class="text-slate-500 text-sm leading-relaxed mb-4">{{ $tutorial->description ?? 'Watch this tutorial to learn more.' }}</p>
                            
                            <a href="{{ $tutorial->youtube_url }}" target="_blank" class="mt-auto inline-flex items-center gap-2 text-blue-600 font-bold text-sm hover:text-blue-800 transition-colors">
                                <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                                Watch on YouTube
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full pt-10 pb-20 text-center">
                        <div class="w-24 h-24 mx-auto mb-6 bg-slate-100 rounded-full flex items-center justify-center">
                            <svg class="w-10 h-10 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-700 mb-2">No Tutorials yet</h3>
                        <p class="text-slate-500">Video tutorials are currently being prepared. Check back later!</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Footer Simple -->
    <footer class="bg-white border-t border-slate-100 py-10 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-slate-500 font-medium">© {{ date('Y') }} AmarSchool. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
