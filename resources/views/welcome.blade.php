<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $settings['hero_title'] ?? 'AmarSchool OMR - Next-Gen Scanning' }}</title>
    
    <meta name="description" content="Optical Mark Recognition software designed for schools and businesses. Accurate scanning, fast processing, and comprehensive analytics.">
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
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Outfit', sans-serif; }
        .glass-nav {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
        }
        
        /* Premium Reveal Animations */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), 
                        transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Glow Effect Classes */
        .magnetic-btn {
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        /* Infinite Marquee Scroll */
        @keyframes marqueeScroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .marquee-track {
            display: flex;
            width: max-content;
            animation: marqueeScroll 45s linear infinite;
        }
        .marquee-track:hover {
            animation-play-state: paused;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased overflow-x-hidden relative selection:bg-blue-200">
    
    <!-- Antigravity Magical Glow -->
    <div id="magic-cursor-glow" class="pointer-events-none fixed inset-0 z-[1] mix-blend-multiply opacity-50 transition-opacity duration-300" style="background: radial-gradient(circle 600px at 50% 50%, rgba(59, 130, 246, 0.12), transparent 40%);"></div>
    <div id="magic-cursor-glow-2" class="pointer-events-none fixed inset-0 z-[0] mix-blend-multiply opacity-40 transition-opacity duration-500" style="background: radial-gradient(circle 800px at 50% 50%, rgba(99, 102, 241, 0.1), transparent 50%);"></div>

    <!-- Header Wrapper -->
    <header class="fixed w-full z-50 transition-all duration-300">
        <!-- Topbar -->
        <div class="bg-slate-900 border-b border-slate-800 text-slate-300 hidden lg:block">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center py-2.5 text-xs font-medium tracking-wide">
                <div class="flex items-center gap-6">
                    <span class="flex items-center gap-2 select-none">
                        <svg class="w-3.5 h-3.5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        {{ $settings['contact_address'] ?? 'Mirpur DOHS, Dhaka 1216' }}
                    </span>
                    <a href="mailto:{{ $settings['contact_email'] ?? 'hello@amarschool.co' }}" class="flex items-center gap-2 hover:text-white transition-colors">
                        <svg class="w-3.5 h-3.5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        {{ $settings['contact_email'] ?? 'hello@amarschool.co' }}
                    </a>
                </div>
                <div class="flex items-center gap-6">
                    <span class="flex items-center gap-2 select-none">
                        <svg class="w-3.5 h-3.5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        {{ $settings['office_hours'] ?? 'Office Hours: 8:00 AM – 7:45 PM' }}
                    </span>
                    <a href="tel:{{ $settings['contact_phone'] ?? '+8801716282884' }}" class="flex items-center gap-2 font-bold text-white hover:text-blue-400 transition-colors">
                        <svg class="w-3.5 h-3.5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        {{ $settings['contact_phone'] ?? '+88 01716 282 884' }}
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Navigation -->
        <nav class="w-full glass-nav transition-all duration-300 py-3 md:py-4 shadow-sm relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <a href="https://amarschool.co/" class="flex items-center gap-2" target="_blank">
                    <img src="https://amarschool.co/wp-content/uploads/2024/04/logo.png" alt="AmarSchool" class="h-10 md:h-12 w-auto object-contain">
                </a>
            <div class="hidden md:flex space-x-8 items-center text-sm font-semibold text-slate-600">
                <a href="#problem" class="hover:text-blue-600 transition-colors">Why OMR?</a>
                <a href="#features" class="hover:text-blue-600 transition-colors">Features</a>
                <a href="#pricing" class="hover:text-blue-600 transition-colors">Pricing</a>
                
                <!-- Download Dropdown -->
                <div class="relative group py-4">
                    <button class="flex items-center gap-1 hover:text-blue-600 transition-colors focus:outline-none">
                        Downloads
                        <svg class="w-4 h-4 opacity-70 group-hover:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <!-- Dropdown Panel -->
                    <div class="absolute top-12 -left-4 w-60 bg-white rounded-2xl shadow-[0_10px_40px_rgba(0,0,0,0.08)] border border-slate-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 p-2 z-50">
                        <a href="https://omrservice.amarschool.co/desktop-app/LSOMR_Setup.exe" class="flex items-start gap-3 p-3 rounded-xl hover:bg-slate-50 transition-colors group/item mt-1">
                            <div class="w-10 h-10 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center shrink-0 group-hover/item:scale-105 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-sm">Desktop Software</h4>
                                <p class="text-xs text-slate-500 mt-0.5">Windows Setup</p>
                            </div>
                        </a>
                        <a href="#omr-templates" class="flex items-start gap-3 p-3 rounded-xl hover:bg-slate-50 transition-colors group/item mt-1 delay-75">
                            <div class="w-10 h-10 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 group-hover/item:scale-105 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-sm">OMR Templates</h4>
                                <p class="text-xs text-slate-500 mt-0.5">Design Gallery</p>
                            </div>
                        </a>
                        <div class="h-px bg-slate-100 my-2 mx-3"></div>
                        @foreach($downloads as $download)
                        <a href="{{ route('download.file', $download) }}" target="_blank" class="flex items-start gap-3 p-3 rounded-xl hover:bg-slate-50 transition-colors group/item mt-1">
                            <div class="w-10 h-10 rounded-lg bg-red-50 text-red-500 flex items-center justify-center shrink-0 group-hover/item:scale-105 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-sm">{{ $download->title }}</h4>
                                <p class="text-xs text-slate-500 mt-0.5">Click to Download</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                
                <a href="#faq" class="hover:text-blue-600 transition-colors">FAQ</a>
            </div>
            <div class="flex items-center gap-4">
                @auth
                    <a href="{{ route('admin.dashboard') }}" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition-colors">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" target="_blank" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition-colors">Log in</a>
                @endauth
                <a href="https://amarschool.co/contact-us/" target="_blank" class="hidden md:inline-flex px-5 py-2.5 rounded-xl bg-blue-600 text-white font-semibold hover:bg-blue-700 hover:shadow-lg hover:shadow-blue-500/30 transition-all">Contact Us</a>
            </div>
        </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <main class="relative pt-32 pb-12 lg:pt-44 lg:pb-20 overflow-hidden bg-gradient-to-b from-blue-50/80 to-white">
        <!-- Abstract Shapes & Dynamic Colorful Blobs -->
        <div class="absolute top-10 -left-10 w-96 h-96 bg-fuchsia-400 rounded-full mix-blend-multiply filter blur-[100px] opacity-40 animate-pulse transition-all duration-1000 ease-in-out"></div>
        <div class="absolute top-40 -right-10 w-96 h-96 bg-cyan-400 rounded-full mix-blend-multiply filter blur-[100px] opacity-40 animate-pulse delay-1000 transition-all duration-1000"></div>
        <div class="absolute -bottom-32 left-1/3 w-[500px] h-[500px] bg-blue-500 rounded-full mix-blend-multiply filter blur-[120px] opacity-30 transition-all duration-1000"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">
                <!-- Left: Content -->
                <div class="text-left">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-50 border border-indigo-100 text-indigo-700 text-xs font-bold uppercase tracking-widest mb-6 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-indigo-600 animate-pulse"></span>
                        {{ $settings['hero_badge'] ?? 'Smarter, Faster Examiner' }}
                    </div>
                    <h1 class="text-4xl md:text-6xl lg:text-[4rem] font-extrabold tracking-tight mb-6 text-slate-900 leading-[1.1]">
                        <span class="relative inline-block mb-1 md:mb-3">
                            <span class="absolute inset-0 bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400 blur-2xl opacity-60 animate-[pulse_3s_ease-in-out_infinite] scale-110 rounded-full z-0"></span>
                            <span class="relative z-10 text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-700 drop-shadow-sm">{{ $settings['hero_title_highlight'] ?? 'LS OMR' }}</span>
                        </span>
                        <span class="block mt-2 text-3xl md:text-5xl lg:text-[3.5rem] text-slate-800">{{ $settings['hero_title'] ?? 'The Next Generation of Optical Mark Recognition' }}</span>
                    </h1>
                    <p class="mt-4 text-lg md:text-xl text-slate-600 mb-10 leading-relaxed font-medium max-w-lg">
                        {{ $settings['hero_subtitle'] ?? 'No more manual checking. Save hours with our smart OMR solution designed to eliminate human error and accelerate results.' }}
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ $settings['hero_button_url'] ?? 'https://omrservice.amarschool.co/desktop-app/LSOMR_Setup.exe' }}" class="px-8 py-4 rounded-2xl bg-blue-600 text-white font-bold hover:shadow-[0_10px_40px_rgba(37,99,235,0.4)] hover:-translate-y-1 transition-all flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            {{ $settings['hero_button_text'] ?? 'Download LS OMR' }}
                        </a>
                        <a href="#demo" class="px-8 py-4 rounded-2xl bg-white text-slate-700 font-bold border border-slate-200 hover:border-blue-300 hover:bg-slate-50 transition-all flex items-center justify-center gap-2 shadow-sm">
                            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                            How it works (Video)
                        </a>
                    </div>
                </div>

                <!-- Right: Infographic/Dashboard Combo -->
                <div class="relative w-full h-[500px] lg:h-[600px] flex items-center justify-center perspective-1000 mt-10 lg:mt-0">
                    <!-- Base Decorative Glow -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-200/50 to-indigo-100/50 rounded-[3rem] transform rotate-3 scale-105 opacity-80 blur-xl"></div>
                    
                    <!-- Infographic Window -->
                    <div class="absolute inset-3 bg-white rounded-[2rem] shadow-2xl border border-white/80 transform -rotate-1 relative z-10 overflow-hidden flex flex-col">
                        <!-- Tiny Mac window header -->
                        <div class="h-10 border-b border-slate-100 bg-slate-50/80 flex items-center px-5 gap-2 shrink-0 backdrop-blur-md">
                            <div class="w-3 h-3 rounded-full bg-rose-400"></div>
                            <div class="w-3 h-3 rounded-full bg-amber-400"></div>
                            <div class="w-3 h-3 rounded-full bg-emerald-400"></div>
                            <div class="ml-auto text-[10px] font-medium text-slate-400 uppercase tracking-widest">OMR Dashboard</div>
                        </div>
                        
                        <!-- Inner Mockup / Infographic Dashboard -->
                        <div class="p-5 flex-1 flex flex-col gap-5 bg-slate-50/50 relative">
                            <!-- Top Analytics Row -->
                            <div class="grid grid-cols-3 gap-3">
                                <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-100 transition-transform hover:-translate-y-1">
                                    <div class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center mb-2">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                    </div>
                                    <div class="text-[10px] text-slate-400 font-bold uppercase tracking-wide">Sheets</div>
                                    <div class="text-xl font-extrabold text-slate-800">12k+</div>
                                </div>
                                <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-100 transition-transform hover:-translate-y-1">
                                    <div class="w-8 h-8 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center mb-2">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                                    </div>
                                    <div class="text-[10px] text-slate-400 font-bold uppercase tracking-wide">Speed</div>
                                    <div class="text-xl font-extrabold text-slate-800">0.2s<span class="text-xs text-slate-400 font-medium">/sh</span></div>
                                </div>
                                <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-100 transition-transform hover:-translate-y-1 relative overflow-hidden">
                                    <div class="absolute right-0 top-0 w-12 h-12 bg-purple-100 rounded-bl-full -z-10"></div>
                                    <div class="w-8 h-8 rounded-full bg-purple-50 text-purple-600 flex items-center justify-center mb-2">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                                    </div>
                                    <div class="text-[10px] text-slate-400 font-bold uppercase tracking-wide">Accuracy</div>
                                    <div class="text-xl font-extrabold text-slate-800">99.9%</div>
                                </div>
                            </div>
                            
                            <!-- Middle Section (Pulse scanner graphic) -->
                            <div class="flex-1 bg-white rounded-2xl border border-slate-100 shadow-sm p-2 relative overflow-hidden flex items-center justify-center group">
                                <div class="absolute inset-x-0 w-full top-1/3 h-0.5 bg-blue-500 shadow-[0_0_15px_rgba(59,130,246,0.8)] z-20 flex justify-center animate-[pulse_2s_ease-in-out_infinite]">
                                    <div class="absolute w-full h-24 bg-gradient-to-b from-blue-400/20 to-transparent top-0 transform -translate-y-full"></div>
                                </div>
                                <img src="{{ asset('images/hero_dashboard.png') }}" class="object-cover object-top opacity-90 w-full h-full rounded-xl mix-blend-multiply transition-transform duration-700 group-hover:scale-105" alt="OMR Dashboard Chart" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'400\' height=\'250\' viewBox=\'0 0 400 250\'%3E%3Crect width=\'400\' height=\'250\' fill=\'%23f8fafc\'/%3E%3Cpath d=\'M50 200 Q100 100 150 170 T250 130 T350 190\' fill=\'none\' stroke=\'%23e2e8f0\' stroke-width=\'6\' stroke-linecap=\'round\'/%3E%3Ccircle cx=\'150\' cy=\'170\' r=\'8\' fill=\'%233b82f6\'/%3E%3Ccircle cx=\'250\' cy=\'130\' r=\'8\' fill=\'%233b82f6\'/%3E%3C/svg%3E'">
                            </div>
                        </div>
                    </div>

                    <!-- Floating Avatars & Widgets Outwards -->
                    <!-- Floating Widgets Outwards -->
                    <!-- Top Left Floating Status Widget -->
                    <div class="absolute left-2 md:-left-12 top-10 md:top-36 bg-white/90 backdrop-blur-md px-5 py-4 rounded-2xl shadow-2xl border border-white/50 z-20 flex items-center gap-4 transition-transform hover:scale-105 duration-300">
                        <div class="w-10 h-10 rounded-full bg-emerald-100/80 text-emerald-600 flex items-center justify-center shadow-inner">
                            <span class="relative flex h-4 w-4">
                              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                              <span class="relative inline-flex rounded-full h-4 w-4 bg-emerald-500"></span>
                            </span>
                        </div>
                        <div>
                            <div class="text-[10px] text-slate-400 font-extrabold uppercase tracking-widest mb-0.5">Engine Status</div>
                            <div class="text-sm font-bold text-slate-800">Online & Ready</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Client Logo Marquee Section -->
    @if($clientLogos->count() > 0)
    <section class="py-14 bg-white border-y border-slate-100 overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
            <p class="text-center text-[11px] md:text-sm font-extrabold text-slate-400 uppercase tracking-[0.2em]">Trusted by 150+ Leading Educational Institutes</p>
        </div>
        <div class="relative flex overflow-hidden group">
            <!-- Smooth Fade Edges -->
            <div class="absolute left-0 top-0 bottom-0 w-16 md:w-40 bg-gradient-to-r from-white to-transparent z-20 pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 w-16 md:w-40 bg-gradient-to-l from-white to-transparent z-20 pointer-events-none"></div>
            
            <!-- Seamless Marquee Track -->
            <div class="marquee-track group-hover:[animation-play-state:paused] py-4">
                @for($i = 0; $i < 2; $i++)
                <div class="flex items-center shrink-0 min-w-full justify-around gap-12 sm:gap-20 px-6 sm:px-10">
                    <!-- Duplicate items multiple times to ensure enough track length even with low logo count -->
                    @for($j = 0; $j < 4; $j++)
                    @foreach($clientLogos as $cLogo)
                    <div class="flex items-center justify-center shrink-0">
                        @if($cLogo->website_url)
                        <a href="{{ $cLogo->website_url }}" target="_blank" class="block group/logo relative" title="{{ $cLogo->name }}">
                        @else
                        <div class="block group/logo relative" title="{{ $cLogo->name }}">
                        @endif
                            <!-- Premium Rounded Container with Hover Animations -->
                            <div class="relative w-24 h-24 sm:w-32 sm:h-32 rounded-full bg-white shadow-[0_5px_15px_rgba(0,0,0,0.04)] border border-slate-100 flex items-center justify-center p-5 sm:p-6 transition-all duration-500 ease-out group-hover/logo:scale-[1.3] group-hover/logo:shadow-[0_20px_50px_rgba(59,130,246,0.15)] group-hover/logo:border-blue-100 group-hover/logo:-translate-y-3 z-0 group-hover/logo:z-50">
                                <!-- Glowing subtle halo on hover -->
                                <div class="absolute inset-0 bg-gradient-to-tr from-blue-400 to-indigo-400 rounded-full blur-xl opacity-0 group-hover/logo:opacity-30 transition-opacity duration-300"></div>
                                <img src="{{ asset('storage/' . $cLogo->logo_path) }}" alt="{{ $cLogo->name }}" class="max-h-full max-w-full object-contain drop-shadow-sm transition-transform duration-500 group-hover/logo:scale-110 relative z-10">
                            </div>
                        @if($cLogo->website_url)
                        </a>
                        @else
                        </div>
                        @endif
                    </div>
                    @endforeach
                    @endfor
                </div>
                @endfor
            </div>
        </div>
    </section>
    @endif

    <!-- Pricing -->
    <section id="pricing" class="py-16 bg-slate-50 border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-100 text-indigo-700 text-sm font-semibold mb-4">
                    <span class="w-2 h-2 rounded-full bg-indigo-600"></span> Pricing
                </div>
                <h2 class="text-3xl md:text-5xl font-bold mb-4 font-outfit text-slate-900">OMR Solution Pricing Plans</h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-lg">(For Non-ERP Clients)</p>
            </div>
            
            <!-- Comparison Table -->
            <div class="bg-white rounded-3xl shadow-[0_20px_50px_rgba(0,0,0,0.05)] border border-slate-200 overflow-hidden mb-10 max-w-5xl mx-auto">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr>
                                <th class="px-4 md:px-5 py-4 border-b border-r border-slate-200 bg-slate-50/95 backdrop-blur-md w-1/4 min-w-[140px] md:min-w-[200px] sticky left-0 z-20 shadow-[4px_0_15px_rgba(0,0,0,0.03)]">
                                    <span class="text-[10px] md:text-xs font-bold uppercase tracking-widest text-slate-500">Features / Plan</span>
                                </th>
                                @foreach($plans as $index => $plan)
                                    @php
                                        $isPopular = ($index == 1);
                                        $colors = ['emerald', 'blue', 'purple', 'rose'];
                                        $color = $colors[$index % count($colors)];
                                    @endphp
                                    <th class="px-4 md:px-5 py-4 border-b border-slate-200 {{ $isPopular ? 'bg-blue-50/50 relative' : 'bg-white' }} min-w-[130px] md:min-w-[150px]">
                                        @if($isPopular)
                                            <div class="absolute top-0 inset-x-0 h-1 bg-blue-500"></div>
                                        @endif
                                        <div class="flex flex-col md:flex-row md:items-center gap-1.5 md:gap-2 mb-1">
                                            <div class="flex items-center gap-1.5">
                                                <span class="w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-{{ $color }}-400 shrink-0"></span>
                                                <span class="font-bold text-slate-900 text-base md:text-lg">{{ $plan->name }}</span>
                                            </div>
                                            @if($isPopular)
                                                <span class="bg-yellow-100 text-yellow-800 text-[9px] md:text-[10px] font-bold px-2 py-0.5 rounded-full inline-flex items-center gap-1 w-fit">⭐ Popular</span>
                                            @endif
                                        </div>
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="text-sm md:text-base">
                            <!-- Price Row -->
                            <tr class="group hover:bg-slate-50 transition-colors">
                                <td class="px-4 md:px-5 py-4 border-b border-r border-slate-100 font-semibold text-slate-600 bg-slate-50/95 backdrop-blur-md group-hover:bg-slate-100/95 sticky left-0 z-10 shadow-[4px_0_15px_rgba(0,0,0,0.03)] text-sm md:text-base">Annual Price</td>
                                @foreach($plans as $index => $plan)
                                    <td class="px-4 md:px-5 py-4 border-b border-slate-100 font-bold {{ $index == 1 ? 'text-blue-700 bg-blue-50/50' : 'text-slate-900' }} text-sm md:text-base">
                                        {{ number_format($plan->price) }} Tk
                                    </td>
                                @endforeach
                            </tr>

                            @php
                                $featureLabels = [
                                    'OMR Sheets / Year',
                                    'Per Sheet Cost',
                                    'OMR Processing',
                                    'Result Export',
                                    'Reporting',
                                    'Support',
                                    'OMR Sheet with School Name and Logo',
                                    'Fully Customized OMR Template'
                                ];
                            @endphp

                            <!-- Dynamic Feature Rows -->
                            @foreach($featureLabels as $featureIndex => $label)
                                <tr class="group hover:bg-slate-50 transition-colors">
                                    <td class="px-4 md:px-5 py-3.5 border-r border-slate-100 font-semibold text-slate-600 bg-slate-50/95 backdrop-blur-md group-hover:bg-slate-100/95 sticky left-0 z-10 shadow-[4px_0_15px_rgba(0,0,0,0.03)] text-xs md:text-sm {{ $loop->last ? '' : 'border-b' }}">{{ $label }}</td>
                                    @foreach($plans as $planIndex => $plan)
                                        @php
                                            if ($label === 'OMR Sheet with School Name and Logo') {
                                                $featureValue = '<span class="text-emerald-500 font-bold text-lg">✔</span>';
                                            } else {
                                                $mapIndex = $featureIndex;
                                                if ($featureIndex == 7) $mapIndex = 6; // Keep mapping 'Fully Customized OMR Template' to db index 6
                                                $featureValue = $plan->features_json[$mapIndex] ?? '-';
                                                
                                                if ($label === 'Fully Customized OMR Template' && (str_contains($featureValue, '✖') || str_contains($featureValue, 'u2716') || $featureValue === '-')) {
                                                    $featureValue = '<div class="flex flex-col gap-2"><div class="flex items-center gap-1.5"><span class="text-rose-400 font-bold text-sm">✖</span><span class="text-[11px] md:text-xs font-semibold text-slate-500">Not Included</span></div><a href="https://amarschool.co/contact-us/" target="_blank" class="block w-full max-w-[120px] md:max-w-[140px] text-center border border-indigo-100 bg-gradient-to-b from-indigo-50/50 to-indigo-50 hover:border-indigo-300 hover:shadow-sm rounded-xl p-2 md:p-2.5 transition-all group cursor-pointer"><span class="block text-[8px] md:text-[9px] font-bold uppercase tracking-widest text-indigo-400 group-hover:text-indigo-600 transition-colors mb-1 truncate">+ Custom Template</span><span class="block text-[10px] md:text-xs font-extrabold text-indigo-700 truncate">2K - 5K Tk</span></a></div>';
                                                }
                                            }
                                        @endphp
                                        <td class="px-4 md:px-5 py-3.5 border-slate-100 text-xs md:text-sm {{ $loop->parent->last ? '' : 'border-b' }} {{ $planIndex == 1 ? 'bg-blue-50/50' : '' }}">
                                            {!! $featureValue !!}
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="grid lg:grid-cols-3 gap-8 max-w-6xl mx-auto items-stretch">
                <!-- ERP Integration Packages -->
                <div class="lg:col-span-2 bg-gradient-to-br from-slate-900 via-slate-800 to-indigo-950 rounded-[2.5rem] p-5 sm:p-8 md:p-10 text-white relative overflow-hidden shadow-[0_20px_60px_rgba(15,23,42,0.4)] flex flex-col h-full ring-1 ring-white/10 hover:shadow-[0_30px_70px_rgba(15,23,42,0.5)] transition-all duration-500 group/erp">
                    <!-- Premium Background Effects -->
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCI+PHBhdGggZD0iTTAgMGg0MHY0MEgweiIgZmlsbD0ibm9uZSIvPjxwYXRoIGQ9Ik0wIDEwaDQwTTEwIDB2NDBNMCAyMGg0ME0yMCAwdjQwTTAgMzBoNDBNMzAgMHY0MCIgc3Ryb2tlPSJyZ2JhKDI1NSwyNTUsMjU1LDAuMDMpIi8+PC9zdmc+')] opacity-50 z-0 pointer-events-none"></div>
                    <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-500 rounded-full filter blur-[100px] opacity-20 group-hover/erp:opacity-40 group-hover/erp:scale-110 transition-all duration-700"></div>
                    <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-indigo-500 rounded-full filter blur-[100px] opacity-10 group-hover/erp:opacity-20 group-hover/erp:scale-110 transition-all duration-700"></div>
                    
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="mb-8 flex flex-col sm:flex-row sm:items-start justify-between gap-4 border-b border-white/10 pb-6">
                            <div>
                                <div class="inline-flex items-center gap-2.5 px-5 py-2 rounded-full bg-white/15 text-white text-sm font-extrabold mb-4 backdrop-blur-md border border-white/30 uppercase tracking-widest shadow-[0_0_15px_rgba(255,255,255,0.1)]">
                                    <span class="w-2.5 h-2.5 rounded-full bg-blue-400 animate-pulse shadow-[0_0_10px_rgba(96,165,250,0.8)]"></span>
                                    ERP Software Clients
                                </div>
                                <h3 class="text-3xl md:text-4xl font-bold font-outfit tracking-tight">Premium Packages</h3>
                            </div>
                            <div class="text-left sm:text-right mt-1 sm:mt-12">
                                <p class="text-sm text-slate-400 max-w-full sm:max-w-[200px] sm:ml-auto leading-relaxed">Exclusive tailored pricing for integrated partners</p>
                            </div>
                        </div>
                        
                        <div class="grid sm:grid-cols-2 gap-6 flex-1 h-full items-stretch relative">
                            <!-- Standard Plan -->
                            <div class="bg-white/5 border border-white/10 rounded-3xl p-6 hover:bg-white/10 hover:border-white/20 transition-all duration-300 backdrop-blur-md flex flex-col relative group">
                                <div class="absolute inset-0 bg-emerald-500/5 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                                <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/10 rounded-bl-full rounded-tr-3xl filter blur-2xl group-hover:scale-150 transition-transform duration-500 pointer-events-none"></div>
                                <div class="flex justify-between items-start mb-6 relative z-10">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-8 h-8 rounded-full bg-emerald-500/20 flex items-center justify-center border border-emerald-500/30">
                                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 group-hover:scale-125 transition-transform duration-300"></span>
                                        </div>
                                        <h4 class="text-lg font-bold text-slate-100">Standard Plan</h4>
                                    </div>
                                </div>
                                <div class="mb-6 flex items-baseline gap-1 relative z-10">
                                    <span class="text-4xl font-extrabold text-white tracking-tight">7 Tk</span>
                                    <span class="text-xs font-medium text-slate-400">/student/mo</span>
                                </div>
                                <ul class="text-slate-300 text-sm space-y-3.5 mt-auto relative z-10">
                                    <li class="flex gap-3 items-start"><span class="text-emerald-400 mt-0.5">✔</span> <span class="leading-snug">Basic School Management Features</span></li>
                                    <li class="flex gap-3 items-start"><span class="text-emerald-400 mt-0.5">✔</span> <span class="leading-snug">Standard Support Line</span></li>
                                </ul>
                            </div>
                            
                            <!-- Smart Exam Plan -->
                            <div class="bg-gradient-to-b from-blue-600/40 to-indigo-800/40 border border-blue-400/50 rounded-3xl p-5 sm:p-6 relative shadow-[0_0_40px_rgba(59,130,246,0.3)] flex flex-col group group/smart mt-8 sm:mt-0">
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-400/10 to-transparent opacity-0 group-hover/smart:opacity-100 rounded-3xl transition-opacity duration-300 pointer-events-none"></div>
                                
                                <!-- Floating Badges outside container correctly (Requires no overflow-hidden) -->
                                <div class="absolute -top-4 left-2 sm:left-4 bg-gradient-to-r from-emerald-400 to-emerald-500 text-slate-900 text-[9px] sm:text-[11px] font-extrabold px-3 sm:px-4 py-1.5 rounded-full uppercase tracking-widest shadow-[0_5px_15px_rgba(52,211,153,0.4)] flex items-center gap-1.5 animate-bounce z-20"><svg class="w-3 h-3 sm:w-4 sm:h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg> OMR FREE</div>
                                <div class="absolute -top-3 right-3 sm:right-4 bg-yellow-400 text-yellow-900 text-[8px] sm:text-[10px] font-bold px-2.5 sm:px-3 py-1 rounded-full uppercase tracking-wider shadow-md z-20">Recommended</div>
                                
                                <div class="flex justify-between items-start mb-6 mt-3 relative z-10">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-8 h-8 rounded-full bg-blue-500/20 flex items-center justify-center border border-blue-500/30">
                                            <span class="w-2.5 h-2.5 rounded-full bg-blue-400 group-hover/smart:scale-125 transition-transform duration-300 shadow-[0_0_10px_rgba(96,165,250,1)]"></span>
                                        </div>
                                        <h4 class="text-lg font-bold text-white">Smart Exam Plan</h4>
                                    </div>
                                </div>
                                <div class="mb-5 flex items-baseline gap-1 relative z-10 pb-5 border-b border-blue-400/20">
                                    <span class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-white to-blue-200 tracking-tight">10 Tk</span>
                                    <span class="text-xs font-medium text-blue-200">/student/mo</span>
                                </div>
                                <ul class="text-blue-50 text-[13px] space-y-4 mt-auto relative z-10 leading-snug">
                                    <li class="flex gap-3 font-bold text-white items-start bg-blue-500/20 p-2.5 -mx-2.5 rounded-xl border border-blue-400/30 shadow-inner">
                                        <span class="text-yellow-400 drop-shadow shrink-0 text-xl mt-[-2px]">🔥</span> 
                                        <div class="flex flex-col">
                                            <span class="text-sm">Full OMR Processing Engine</span>
                                            <span class="text-emerald-300 font-extrabold text-xs tracking-widest uppercase mt-1">100% Free Forever</span>
                                        </div>
                                    </li>
                                    <li class="flex gap-2.5 items-start"><span class="text-blue-300 drop-shadow shrink-0 mt-0.5">✔</span> <span>Advanced School Management</span></li>
                                    <li class="flex gap-2.5 items-start"><span class="text-blue-300 drop-shadow shrink-0 mt-0.5">✔</span> <span>Question Bank (Auto Gen.)</span></li>
                                    <li class="flex gap-2.5 items-start"><span class="text-blue-300 drop-shadow shrink-0 mt-0.5">✔</span> <span>Instant Web & App Results</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Custom Plan & Add-ons -->
                <div class="flex flex-col h-full lg:col-span-1 mt-8 lg:mt-0">
                    <!-- Custom Plan -->
                    <div class="bg-white rounded-[2.5rem] p-5 sm:p-8 md:p-10 border border-slate-200 shadow-[0_20px_50px_rgba(15,23,42,0.05)] flex-1 flex flex-col relative overflow-hidden hover:border-indigo-300 hover:shadow-[0_30px_70px_rgba(15,23,42,0.08)] transition-all duration-500 group/custom">
                        <!-- BG elements -->
                        <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-indigo-50 to-blue-50 rounded-bl-full -z-10 group-hover/custom:scale-110 transition-transform duration-700"></div>
                        <div class="absolute bottom-0 left-0 w-32 h-32 bg-slate-50/80 rounded-tr-full -z-10 group-hover/custom:bg-blue-50/50 transition-colors duration-500"></div>
                        
                        <div class="flex items-center gap-3 mb-8">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-slate-800 to-slate-900 text-white flex items-center justify-center shrink-0 shadow-lg shadow-slate-900/20 border border-slate-700">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                            <h4 class="text-3xl font-bold font-outfit text-slate-900 tracking-tight">Custom Plan</h4>
                        </div>
                        <p class="text-slate-500 mb-8 max-w-sm text-sm leading-relaxed">For massive scale operations, government bodies, or multi-campus institutions requiring custom integrations.</p>
                        
                        <div class="space-y-4 mb-10 w-full mt-auto">
                            <div class="flex justify-between items-center border-b border-slate-100 pb-3">
                                <span class="text-slate-500 text-sm font-medium">Volume Limit</span>
                                <span class="font-bold text-slate-900 bg-slate-100/80 text-xs px-3 py-1.5 rounded-full border border-slate-200">100,000+ sheets</span>
                            </div>
                            <div class="flex justify-between items-center border-b border-slate-100 pb-3">
                                <span class="text-slate-500 text-sm font-medium">Pricing</span>
                                <span class="font-bold text-emerald-700 bg-emerald-50 text-xs px-3 py-1.5 rounded-full border border-emerald-200">Negotiated Per SLA</span>
                            </div>
                            <div class="flex justify-between items-center pt-1 pb-2">
                                <span class="text-slate-500 text-sm font-medium">Extra Perks</span>
                                <span class="font-bold text-indigo-700 bg-indigo-50 text-[11px] px-3 py-1.5 rounded-full border border-indigo-200 text-center">Priority + API</span>
                            </div>
                        </div>
                        
                        <div class="mt-auto pt-4 relative z-10">
                            <a href="https://amarschool.co/contact-us/" target="_blank" class="w-full flex items-center justify-center gap-2 py-4 rounded-2xl bg-slate-900 border border-slate-800 text-white font-bold hover:bg-indigo-600 hover:border-indigo-600 hover:shadow-xl hover:shadow-indigo-500/20 transition-all duration-300 group/btn">
                                Talk to Sales Team
                                <svg class="w-5 h-5 opacity-70 group-hover/btn:translate-x-1.5 group-hover/btn:opacity-100 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <p class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-emerald-50 border border-emerald-100 text-emerald-800 font-medium shadow-sm transition-transform hover:scale-105">
                    <span class="text-xl">💡</span> Per sheet cost starts from just <strong class="text-emerald-700 font-extrabold text-lg">0.15 Tk</strong>
                </p>
            </div>
        </div>
    </section>

    <!-- Problem Section -->
    <section id="problem" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-5xl font-bold mb-4 font-outfit text-slate-900">{{ $settings['problem_title'] ?? 'Why Traditional Checking Fails' }}</h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-lg">{{ $settings['problem_subtitle'] ?? 'The manual grading process is broken, causing stress for teachers and delayed results for students.' }}</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-red-50/50 p-8 rounded-3xl border border-red-100 flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-red-100 text-red-500 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Time-Consuming</h3>
                    <p class="text-slate-600">Teachers spend countless hours manually verifying each MCQ circle, taking away from actual teaching time.</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-orange-50/50 p-8 rounded-3xl border border-orange-100 flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-orange-100 text-orange-500 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Human Error</h3>
                    <p class="text-slate-600">Fatigue leads to grading mistakes, causing frustration for students and damaging institutional credibility.</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-yellow-50/50 p-8 rounded-3xl border border-yellow-100 flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-yellow-100 text-yellow-600 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Large Volume Overload</h3>
                    <p class="text-slate-600">Mid-terms and finals generate thousands of scripts that are nearly impossible to process swiftly by hand.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section class="py-16 bg-blue-50/50 border-y border-blue-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-5xl font-bold mb-4 font-outfit text-slate-900">How OMR Solves It</h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-lg">Just 3 simple steps to eliminate grading hassle forever.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                <!-- Line Connector (Desktop) -->
                <div class="hidden md:block absolute top-1/2 left-[10%] right-[10%] h-0.5 bg-blue-200 -z-10"></div>
                
                <!-- Step 1 -->
                <div class="flex flex-col items-center text-center">
                    <div class="w-20 h-20 bg-white rounded-2xl shadow-lg border-2 border-blue-100 flex items-center justify-center text-blue-600 font-bold text-2xl mb-6">1</div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3">Upload OMR Sheet</h3>
                    <p class="text-slate-600">Scan physical sheets using any standard scanner or mobile app and upload to the dashboard.</p>
                </div>
                <!-- Step 2 -->
                <div class="flex flex-col items-center text-center">
                    <div class="w-20 h-20 bg-blue-600 rounded-2xl shadow-[0_10px_20px_rgba(37,99,235,0.4)] border-2 border-blue-600 flex items-center justify-center text-white font-bold text-2xl mb-6 transform -translate-y-2">2</div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3">Auto Scan Engine</h3>
                    <p class="text-slate-600">Our advanced Optical Mark Recognition AI reads the circles instantly with 99.9% accuracy.</p>
                </div>
                <!-- Step 3 -->
                <div class="flex flex-col items-center text-center">
                    <div class="w-20 h-20 bg-white rounded-2xl shadow-lg border-2 border-blue-100 flex items-center justify-center text-blue-600 font-bold text-2xl mb-6">3</div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3">Get Instant Result</h3>
                    <p class="text-slate-600">View detailed analytics, student rankings, and export results directly to Excel or PDF.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-5xl font-bold mb-4 font-outfit text-slate-900">Powerful Core Features</h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-lg">Everything you need to run sophisticated MCQ exams seamlessly.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($features as $feature)
                <div class="p-8 rounded-3xl bg-white hover:shadow-xl transition-shadow border border-slate-100 group">
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        @if($feature->icon)
                            {!! $feature->icon !!}
                        @else
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        @endif
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-slate-900">{{ $feature->title }}</h3>
                    <p class="text-slate-600 leading-relaxed">{{ $feature->description }}</p>
                </div>
                @empty
                <div class="col-span-3 text-center text-slate-500 p-8">Features not found. Add them from Admin Panel.</div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Demo Section -->
    <section id="demo" class="py-16 bg-slate-900 text-white rounded-t-[3rem]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl md:text-5xl font-bold mb-6 font-outfit leading-tight text-white">Experience the<br>Speed of AmarOMR</h2>
                    <p class="text-lg text-slate-400 mb-8 leading-relaxed">Watch how quickly a batch of 100 exam scripts gets analyzed, evaluated, and published on the results dashboard. Don't believe it? Try the demo yourself.</p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3 text-slate-300"><span class="w-6 h-6 rounded-full bg-blue-500/20 text-blue-400 flex items-center justify-center">✓</span> Blazing Fast Processing</li>
                        <li class="flex items-center gap-3 text-slate-300"><span class="w-6 h-6 rounded-full bg-blue-500/20 text-blue-400 flex items-center justify-center">✓</span> Detailed Analytics Per Question</li>
                        <li class="flex items-center gap-3 text-slate-300"><span class="w-6 h-6 rounded-full bg-blue-500/20 text-blue-400 flex items-center justify-center">✓</span> Double Verification Engine</li>
                    </ul>
                    <a href="{{ route('tutorials') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-blue-600 text-white font-bold hover:bg-blue-500 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Watch Video Tutorials
                    </a>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-blue-500 blur-[80px] opacity-20 rounded-full"></div>
                    <div class="relative p-2 rounded-2xl bg-white/5 border border-white/10 aspect-video flex items-center justify-center shadow-2xl">
                        <!-- Youtube Embed Placeholder -->
                        @if(isset($featuredTutorial))
                            <iframe class="w-full h-full rounded-xl" src="{{ $featuredTutorial->embed_url }}" title="{{ $featuredTutorial->title }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        @else
                            <div class="text-center">
                                <div class="w-16 h-16 bg-white text-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 cursor-pointer hover:scale-110 transition-transform shadow-xl">
                                    <svg class="w-8 h-8 ml-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                                </div>
                                <span class="text-slate-300 uppercase tracking-widest text-sm font-bold">Watch Video Demo</span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Downloads Section -->
    <section id="downloads" class="py-14 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row gap-12 items-center justify-between bg-blue-50/50 rounded-3xl p-8 md:p-12 border border-blue-100">
                <div class="max-w-xl">
                    <h2 class="text-3xl font-bold mb-4 font-outfit text-slate-900">Download Resources</h2>
                    <p class="text-slate-600 mb-6 text-lg">Grab our sample OMR sheets or our mobile scanner app to test the platform for free before deciding.</p>
                </div>
                <div class="w-full md:w-auto flex flex-col sm:flex-row gap-4">
                    @forelse($downloads as $dl)
                    <a href="{{ route('download.file', $dl) }}" class="flex items-center gap-3 bg-white border border-slate-200 hover:border-blue-300 hover:shadow-md px-6 py-4 rounded-2xl transition-all">
                        <div class="p-2 bg-red-50 text-red-500 rounded-lg shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800 text-sm">{{ $dl->title }}</h4>
                            <span class="text-xs text-slate-500">{{ $dl->download_count }} downloads</span>
                        </div>
                    </a>
                    @empty
                    <p class="text-slate-500">No resources available.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>



    <!-- Testimonials Section -->
    <section class="py-16 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-5xl font-bold mb-4 font-outfit text-slate-900">Loved by Educators</h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-lg">See what school administrators have to say about Amarschool OMR.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @forelse($testimonials as $testimonial)
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 relative">
                    <div class="text-yellow-400 flex gap-1 mb-4">
                        @for($i=0; $i<$testimonial->rating; $i++)
                            ★
                        @endfor
                    </div>
                    <p class="text-slate-600 italic mb-6">"{{ $testimonial->content }}"</p>
                    <div class="flex items-center gap-4">
                        @if($testimonial->image)
                            <img src="{{ Storage::url($testimonial->image) }}" class="w-12 h-12 object-cover rounded-full border border-slate-200 shrink-0 shadow-sm">
                        @else
                            @php
                                $initials = strtoupper(substr($testimonial->name, 0, 2));
                                $colors = ['blue', 'indigo', 'purple', 'emerald', 'orange', 'red'];
                                $color = $colors[strlen($testimonial->name) % count($colors)];
                            @endphp
                            <div class="w-12 h-12 bg-{{$color}}-100 rounded-full flex items-center justify-center text-{{$color}}-600 font-bold shrink-0">
                                {{ $initials }}
                            </div>
                        @endif
                        <div>
                            <h4 class="font-bold text-slate-900">{{ $testimonial->name }}</h4>
                            <p class="text-sm text-slate-500">{{ $testimonial->designation }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-3 text-center text-slate-500 p-8">No testimonials yet.</div>
                @endforelse
            </div>
        </div>
        </div>
    </section>

    <!-- OMR Templates Section -->
    <section id="omr-templates" class="py-16 bg-slate-50 border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <span class="text-blue-600 font-bold tracking-wider uppercase text-sm mb-4 block">Design Gallery</span>
                <h2 class="text-3xl md:text-5xl font-bold font-outfit text-slate-900 mb-6">OMR Template Designs</h2>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto">Explore and download our ready-made OMR sheet templates customized for AmarSchool's advanced grading engine.</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($omrTemplates as $template)
                <div class="bg-white rounded-3xl p-4 shadow-sm border border-slate-200 group hover:shadow-xl transition-all duration-300 flex flex-col">
                    <div class="aspect-[1/1.4] bg-slate-100 rounded-2xl mb-6 overflow-hidden relative border border-slate-100">
                        @if($template->image)
                            <img src="{{ Storage::url($template->image) }}" alt="{{ $template->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center backdrop-blur-sm">
                                <a href="{{ Storage::url($template->image) }}" download title="Download Template" class="bg-white text-slate-900 font-bold px-6 py-3 rounded-xl hover:scale-105 hover:bg-blue-50 hover:text-blue-700 transition-all shadow-2xl flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                    Download Image
                                </a>
                            </div>
                        @else
                            <div class="w-full h-full flex flex-col items-center justify-center text-slate-400">
                                <svg class="w-12 h-12 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <span class="text-sm font-medium">No Preview Available</span>
                            </div>
                        @endif
                    </div>
                    <div class="px-2 pb-2 text-center mt-auto">
                        <h3 class="text-lg font-bold text-slate-800 font-outfit">{{ $template->title }}</h3>
                        <p class="text-sm text-slate-500 mt-1">{{ $template->description }}</p>
                    </div>
                </div>
                @empty
                <div class="col-span-full py-12 text-center text-slate-500">
                    <p class="mb-4">No template designs uploaded yet.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-16 bg-white border-t border-slate-100">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 font-outfit text-slate-900">Frequently Asked Questions</h2>
            </div>
            <div class="space-y-6">
                @forelse($faqs as $faq)
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                    <h3 class="text-lg font-bold text-slate-900 mb-2">{{ $faq->question }}</h3>
                    <p class="text-slate-600 leading-relaxed">{{ $faq->answer }}</p>
                </div>
                @empty
                <p class="text-center text-slate-500">No FAQs available.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-10">
                <!-- Branding -->
                <div>
                    <a href="https://amarschool.co/" class="block mb-6">
                        <img src="https://amarschool.co/wp-content/uploads/2024/04/logo.png" alt="AmarSchool" class="h-12 w-auto brightness-0 invert">
                    </a>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">
                        Amar School is a completely online school management software. It has more school management features than any other online school management system in the market.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:text-white hover:bg-blue-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:text-white hover:bg-blue-800 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Company -->
                <div>
                    <h4 class="text-white font-bold text-lg mb-6 relative inline-block after:content-[''] after:absolute after:-bottom-2 after:left-0 after:w-12 after:h-0.5 after:bg-blue-500">Company</h4>
                    <ul class="space-y-3">
                        <li><a href="https://amarschool.co/about-us/" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center gap-2"><span class="w-1 h-1 rounded-full bg-blue-500"></span> About Us</a></li>
                        <li><a href="https://amarschool.co/contact-us/" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center gap-2"><span class="w-1 h-1 rounded-full bg-blue-500"></span> Contact Us</a></li>
                        <li><a href="https://amarschool.co/features/" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center gap-2"><span class="w-1 h-1 rounded-full bg-blue-500"></span> Software Core Features</a></li>
                        <li><a href="https://amarschool.co/sample-report/" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center gap-2"><span class="w-1 h-1 rounded-full bg-blue-500"></span> Sample Reports</a></li>
                        <li><a href="https://amarschool.co/voucher-generate/" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center gap-2"><span class="w-1 h-1 rounded-full bg-blue-500"></span> Voucher Generate</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-white font-bold text-lg mb-6 relative inline-block after:content-[''] after:absolute after:-bottom-2 after:left-0 after:w-12 after:h-0.5 after:bg-blue-500">Services</h4>
                    <ul class="space-y-3">
                        <li><a href="https://amarschool.co/id_card/" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center gap-2"><span class="w-1 h-1 rounded-full bg-blue-500"></span> ID Card</a></li>
                        <li><a href="https://amarschool.co/graphics-design-service/" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center gap-2"><span class="w-1 h-1 rounded-full bg-blue-500"></span> Graphics Design</a></li>
                        <li><a href="https://amarschool.co/" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center gap-2"><span class="w-1 h-1 rounded-full bg-blue-500"></span> Web Development</a></li>
                        <li><a href="https://amarschool.co/" class="text-slate-400 hover:text-blue-400 transition-colors flex items-center gap-2"><span class="w-1 h-1 rounded-full bg-blue-500"></span> Digital Marketing</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-white font-bold text-lg mb-6 relative inline-block after:content-[''] after:absolute after:-bottom-2 after:left-0 after:w-12 after:h-0.5 after:bg-blue-500">Contact Info</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <span class="mt-1 text-blue-500 shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </span>
                            <span class="text-slate-400">{{ $settings['contact_address'] ?? 'House #192, Road #2, Avenue #3, Mirpur DOHS, Dhaka 1216' }}</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 text-blue-500 shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </span>
                            <div class="flex flex-col text-slate-400">
                                <a href="mailto:{{ $settings['contact_email'] ?? 'hello@amarschool.co' }}" class="hover:text-blue-400 transition-colors">{{ $settings['contact_email'] ?? 'hello@amarschool.co' }}</a>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 text-blue-500 shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </span>
                            <div class="flex flex-col text-slate-400">
                                <a href="tel:{{ $settings['contact_phone'] ?? '+8801716282884' }}" class="hover:text-blue-400 transition-colors">{{ $settings['contact_phone'] ?? '+88 01716 282 884' }}</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright Line -->
            <div class="pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-500 text-sm">&copy; {{ date('Y') }} Amarschool All Right Reserved.</p>
                <div class="flex space-x-6 text-sm">
                    <a href="https://amarschool.co/privacy-policy/" class="text-slate-500 hover:text-white transition-colors">Privacy Policy</a>
                    <a href="https://amarschool.co/" class="text-slate-500 hover:text-white transition-colors">Support</a>
                    <a href="https://amarschool.co/" class="text-slate-500 hover:text-white transition-colors">Term & Condition</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- AI Chatbot Widget -->
    <div id="chatbot-widget" class="fixed bottom-6 right-6 z-50 flex flex-col items-end">
        <div id="chat-window" class="hidden mb-4 w-[350px] bg-white border border-slate-200 shadow-[0_20px_50px_rgba(0,0,0,0.15)] rounded-2xl overflow-hidden flex flex-col h-[450px] transition-all transform origin-bottom-right scale-95 opacity-0">
            <!-- Header -->
            <div class="bg-blue-600 p-4 text-white flex justify-between items-center">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center">🤖</div>
                    <span class="font-bold">Amar AI</span>
                </div>
                <button id="close-chat" class="text-blue-100 hover:text-white"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></button>
            </div>
            
            <!-- Messages -->
            <div id="chat-messages" class="flex-1 p-4 overflow-y-auto space-y-4 bg-slate-50 text-sm">
                <div class="flex items-start gap-2 max-w-[85%]">
                    <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center shrink-0">🤖</div>
                    <div class="bg-white border border-slate-200 p-3 rounded-2xl rounded-tl-sm text-slate-700 shadow-sm">
                        Hi! I'm the AmarOMR assistant. How can I help you today?
                    </div>
                </div>
            </div>
            
            <!-- Input -->
            <div class="p-3 bg-white border-t border-slate-200">
                <form id="chat-form" class="flex gap-2">
                    <input type="text" id="chat-input" class="flex-1 bg-slate-50 border border-slate-200 rounded-full px-4 py-2 text-slate-800 focus:outline-none focus:border-blue-500" placeholder="Type a message..." required>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white w-10 h-10 rounded-full flex items-center justify-center shrink-0 transition-colors shadow-md shadow-blue-200">
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Toggle Button -->
        <button id="toggle-chat" class="w-14 h-14 bg-blue-600 rounded-full shadow-[0_10px_20px_rgba(37,99,235,0.3)] flex items-center justify-center text-white hover:scale-110 transition-transform">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
        </button>
    </div>

    <!-- Chatbot Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggleChat = document.getElementById('toggle-chat');
            const closeChat = document.getElementById('close-chat');
            const chatWindow = document.getElementById('chat-window');
            const chatForm = document.getElementById('chat-form');
            const chatInput = document.getElementById('chat-input');
            const chatMessages = document.getElementById('chat-messages');
            
            function toggleChatVisibility() {
                if (chatWindow.classList.contains('hidden')) {
                    chatWindow.classList.remove('hidden');
                    setTimeout(() => {
                        chatWindow.classList.remove('scale-95', 'opacity-0');
                        chatWindow.classList.add('scale-100', 'opacity-100');
                    }, 10);
                } else {
                    chatWindow.classList.remove('scale-100', 'opacity-100');
                    chatWindow.classList.add('scale-95', 'opacity-0');
                    setTimeout(() => {
                        chatWindow.classList.add('hidden');
                    }, 300);
                }
            }

            toggleChat.addEventListener('click', toggleChatVisibility);
            closeChat.addEventListener('click', toggleChatVisibility);
            
            chatForm.addEventListener('submit', async (e) => {
                e.preventDefault();
                const text = chatInput.value.trim();
                if(!text) return;
                
                // Add user message
                appendMessage('user', text);
                chatInput.value = '';
                
                // Show loading
                const loadingId = 'loading-' + Date.now();
                appendLoading(loadingId);
                
                try {
                    const response = await fetch('{{ route('chatbot.ask') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ message: text })
                    });
                    
                    const data = await response.json();
                    document.getElementById(loadingId).remove();
                    appendMessage('bot', data.reply);
                } catch (error) {
                    document.getElementById(loadingId).remove();
                    appendMessage('bot', 'Sorry, I am having trouble connecting right now.');
                }
            });
            
            function appendMessage(sender, text) {
                const msgDiv = document.createElement('div');
                msgDiv.className = sender === 'user' ? 'flex items-start gap-2 max-w-[85%] self-end ml-auto' : 'flex items-start gap-2 max-w-[85%]';
                
                const avatar = sender === 'user' ? '' : '<div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center shrink-0">🤖</div>';
                const bubble = `<div class="${sender === 'user' ? 'bg-blue-600 text-white rounded-2xl rounded-tr-sm shadow-md shadow-blue-100' : 'bg-white border border-slate-200 text-slate-700 rounded-2xl rounded-tl-sm shadow-sm'} p-3 break-words">${text}</div>`;
                
                msgDiv.innerHTML = sender === 'user' ? bubble : avatar + bubble;
                chatMessages.appendChild(msgDiv);
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
            
            function appendLoading(id) {
                const msgDiv = document.createElement('div');
                msgDiv.id = id;
                msgDiv.className = 'flex items-start gap-2 max-w-[85%]';
                msgDiv.innerHTML = `
                    <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center shrink-0">🤖</div>
                    <div class="bg-white border border-slate-200 p-3 rounded-2xl rounded-tl-sm shadow-sm flex gap-1 items-center">
                        <div class="w-2 h-2 bg-slate-300 rounded-full animate-bounce"></div>
                        <div class="w-2 h-2 bg-slate-300 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                        <div class="w-2 h-2 bg-slate-300 rounded-full animate-bounce" style="animation-delay: 0.4s"></div>
                    </div>
                `;
                chatMessages.appendChild(msgDiv);
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
        });
    </script>

    <!-- Super Premium Antigravity & Reveal Effects -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // 1. Reveal Animations (AOS style)
            const observerOptions = {
                threshold: 0.1,
                rootMargin: "0px 0px -50px 0px"
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        // Optional: unobserve after reveal depending on preference
                        // observer.unobserve(entry.target); 
                    }
                });
            }, observerOptions);

            // Select elements to animate
            const revealElements = document.querySelectorAll('section > div > div, .grid > div, h2, p, .bg-white.rounded-3xl');
            revealElements.forEach((el, index) => {
                if(!el.classList.contains('fixed') && !el.closest('#chatbot-widget') && !el.classList.contains('hidden') && !el.closest('nav')) {
                    el.classList.add('reveal');
                    // Stagger grid items
                    if(el.parentElement && el.parentElement.classList.contains('grid')) {
                        el.style.transitionDelay = `${(index % 4) * 100}ms`;
                    }
                    observer.observe(el);
                }
            });

            // 2. Antigravity Mouse Glow Effect
            const glow1 = document.getElementById('magic-cursor-glow');
            const glow2 = document.getElementById('magic-cursor-glow-2');
            
            let mouseX = window.innerWidth / 2;
            let mouseY = window.innerHeight / 2;
            let currentX1 = mouseX;
            let currentY1 = mouseY;
            let currentX2 = mouseX;
            let currentY2 = mouseY;

            window.addEventListener('mousemove', (e) => {
                mouseX = e.clientX;
                mouseY = e.clientY;
            });

            // Smooth interpolation (lerp) for that DeepMind/Antigravity liquid feel
            function animateGlow() {
                // Lerp for inner glow (super fluid)
                currentX1 += (mouseX - currentX1) * 0.08;
                currentY1 += (mouseY - currentY1) * 0.08;
                
                // Lerp for outer glow (slow, floaty, organic)
                currentX2 += (mouseX - currentX2) * 0.04;
                currentY2 += (mouseY - currentY2) * 0.04;

                if (glow1) glow1.style.background = `radial-gradient(circle 700px at ${currentX1}px ${currentY1}px, rgba(236, 72, 153, 0.25), transparent 50%), radial-gradient(circle 400px at ${currentX2}px ${currentY2}px, rgba(6, 182, 212, 0.2), transparent 50%)`;
                if (glow2) glow2.style.background = `radial-gradient(circle 900px at ${currentX2}px ${currentY2}px, rgba(99, 102, 241, 0.3), transparent 60%), radial-gradient(circle 500px at ${currentX1}px ${currentY2}px, rgba(244, 63, 94, 0.15), transparent 60%)`;

                requestAnimationFrame(animateGlow);
            }
            animateGlow();

            // 3. Magnetic Buttons
            const buttons = document.querySelectorAll('a.bg-blue-600, button.bg-blue-600');
            buttons.forEach(btn => {
                btn.classList.add('magnetic-btn');
                btn.addEventListener('mousemove', (e) => {
                    const rect = btn.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;
                    // Slightly move the button towards the cursor
                    btn.style.transform = `translate(${x * 0.2}px, ${y * 0.2}px)`;
                });
                btn.addEventListener('mouseleave', () => {
                    btn.style.transform = `translate(0px, 0px)`;
                });
            });
        });
    </script>
</body>
</html>
