<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'AmarSchool OMR') }} — Admin</title>
        @php $faviconSetting = \App\Models\Setting::where('key','favicon')->value('value'); @endphp
        @if($faviconSetting)
            <link rel="icon" href="{{ asset($faviconSetting) }}" sizes="32x32">
        @else
            <link rel="icon" href="https://amarschool.co/wp-content/uploads/2024/04/cropped-logo-32x32.png" sizes="32x32">
        @endif

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            body { font-family: 'Inter', sans-serif; }
            h1, h2, h3, h4, h5, h6 { font-family: 'Outfit', sans-serif; }
            ::-webkit-scrollbar { width: 5px; height: 5px; }
            ::-webkit-scrollbar-track { background: transparent; }
            ::-webkit-scrollbar-thumb { background: #334155; border-radius: 10px; }
            ::-webkit-scrollbar-thumb:hover { background: #475569; }

            /* Main scrollbar (lighter) */
            .main-scroll::-webkit-scrollbar-thumb { background: #e2e8f0; }
            .main-scroll::-webkit-scrollbar-thumb:hover { background: #cbd5e1; }
        </style>
    </head>
    <body class="font-sans antialiased text-slate-800 bg-[#f1f5f9] selection:bg-blue-200">
        <div class="flex h-screen overflow-hidden" x-data="{ sidebarOpen: false }">
            
            <!-- Sidebar Navigation -->
            @include('layouts.navigation')

            <!-- Main Content Area -->
            <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden main-scroll">
                
                <!-- Top Header -->
                <header class="sticky top-0 z-30 flex items-center justify-between w-full h-[72px] px-6 bg-white/80 backdrop-blur-xl border-b border-slate-200/60 sm:px-8">
                    <div class="flex items-center gap-4">
                        <button @click="sidebarOpen = !sidebarOpen" class="p-2 text-slate-500 rounded-xl lg:hidden hover:text-blue-600 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                        </button>
                        
                        @isset($header)
                            <div>
                                {{ $header }}
                            </div>
                        @endisset
                    </div>

                    <!-- Right Side: Search + Actions -->
                    <div class="flex items-center gap-3">
                        <!-- Date Display -->
                        <div class="hidden sm:flex items-center gap-2 px-4 py-2 bg-slate-100/80 rounded-xl text-xs font-semibold text-slate-500">
                            <svg class="w-4 h-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                            {{ now()->format('D, M d, Y') }}
                        </div>

                        <!-- Notification Bell -->
                        <button class="relative p-2.5 rounded-xl hover:bg-slate-100 text-slate-400 hover:text-slate-600 transition-all group">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
                            <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-blue-500 rounded-full ring-2 ring-white"></span>
                        </button>
                    </div>
                </header>

                <main class="w-full flex-1 p-6 sm:p-8 max-w-[1400px] mx-auto">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
