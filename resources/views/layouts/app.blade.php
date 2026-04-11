<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'AmarSchool OMR') }}</title>
        @php $faviconSetting = \App\Models\Setting::where('key','favicon')->value('value'); @endphp
        @if($faviconSetting)
            <link rel="icon" href="{{ asset($faviconSetting) }}" sizes="32x32">
        @else
            <link rel="icon" href="https://amarschool.co/wp-content/uploads/2024/04/cropped-logo-32x32.png" sizes="32x32">
        @endif

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            body { font-family: 'Inter', sans-serif; }
            h1, h2, h3, h4, h5, h6 { font-family: 'Outfit', sans-serif; }
            ::-webkit-scrollbar { width: 6px; height: 6px; }
            ::-webkit-scrollbar-track { background: transparent; }
            ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
            ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        </style>
    </head>
    <body class="font-sans antialiased text-slate-800 bg-slate-50 selection:bg-blue-200">
        <div class="flex h-screen overflow-hidden" x-data="{ sidebarOpen: false }">
            
            <!-- Sidebar Navigation -->
            @include('layouts.navigation')

            <!-- Main Content Area -->
            <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
                
                <!-- Top Header -->
                <header class="sticky top-0 z-30 flex items-center justify-between w-full h-16 px-4 bg-white border-b border-slate-200 shadow-sm sm:px-6 lg:px-8">
                    <div class="flex items-center">
                        <button @click="sidebarOpen = !sidebarOpen" class="p-1 mr-4 text-slate-500 rounded-md lg:hidden hover:text-blue-600 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                        </button>
                        
                        @isset($header)
                            <div class="font-semibold text-xl text-slate-800 font-outfit">
                                {{ $header }}
                            </div>
                        @endisset
                    </div>
                </header>

                <main class="w-full flex-1 p-4 sm:p-6 lg:p-8 max-w-7xl mx-auto">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
