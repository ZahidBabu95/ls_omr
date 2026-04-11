<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'AmarSchool OMR') }}</title>
        <link rel="icon" href="https://amarschool.co/wp-content/uploads/2024/04/cropped-logo-32x32.png" sizes="32x32">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            body { font-family: 'Inter', sans-serif; }
            h1, h2, h3, h4, h5, h6 { font-family: 'Outfit', sans-serif; }
        </style>
    </head>
    <body class="font-sans text-slate-800 antialiased bg-white selection:bg-blue-200">
        <div class="min-h-screen flex">
            <!-- Left Side: Login Form -->
            <div class="w-full lg:w-1/2 flex flex-col justify-center px-8 sm:px-16 xl:px-24">
                <div class="mb-12">
                    <a href="/">
                        <img src="https://amarschool.co/wp-content/uploads/2024/04/logo.png" alt="AmarSchool" class="h-12 w-auto">
                    </a>
                </div>
                
                <div class="w-full max-w-md">
                    {{ $slot }}
                </div>
                
                <div class="mt-auto pt-16 pb-8 text-sm text-slate-500">
                    &copy; {{ date('Y') }} AmarSchool OMR. All rights reserved.
                </div>
            </div>

            <!-- Right Side: Graphic/Information -->
            <div class="hidden lg:flex w-1/2 bg-blue-600 relative overflow-hidden flex-col justify-center items-center">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-indigo-700"></div>
                <!-- Abstract Blobs -->
                <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-3xl mix-blend-overlay"></div>
                <div class="absolute bottom-10 left-10 w-72 h-72 bg-blue-300/20 rounded-full blur-3xl mix-blend-overlay"></div>
                
                <div class="relative z-10 px-16 text-white text-center max-w-lg">
                    <div class="w-20 h-20 bg-white/10 rounded-3xl flex items-center justify-center mx-auto mb-8 backdrop-blur-sm border border-white/20 shadow-xl">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h2 class="text-4xl font-bold font-outfit mb-6">Manage examinations with lightning speed</h2>
                    <p class="text-blue-100 text-lg leading-relaxed">Join thousands of educators relying on AmarOMR to automate grading, eliminate human errors, and publish results instantly.</p>
                </div>
                
                <div class="absolute bottom-0 w-full">
                    <svg class="w-full h-32" viewBox="0 0 1440 320" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.05)" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
                </div>
            </div>
        </div>
    </body>
</html>
