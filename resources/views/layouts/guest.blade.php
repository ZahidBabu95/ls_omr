<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'AmarSchool OMR') }} — Login</title>
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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            body { font-family: 'Inter', sans-serif; }
            h1, h2, h3, h4, h5, h6 { font-family: 'Outfit', sans-serif; }

            /* Chrome/Edge Autofill Override */
            input:-webkit-autofill,
            input:-webkit-autofill:hover, 
            input:-webkit-autofill:focus, 
            input:-webkit-autofill:active {
                -webkit-box-shadow: 0 0 0 30px rgba(255,255,255,0.95) inset !important;
                -webkit-text-fill-color: #1e293b !important;
                transition: background-color 5000s ease-in-out 0s;
            }

            /* Animated Gradient Background */
            .auth-bg {
                background: linear-gradient(135deg, #0f172a 0%, #1e293b 25%, #0f172a 50%, #1e1b4b 75%, #0f172a 100%);
                background-size: 400% 400%;
                animation: gradientShift 15s ease infinite;
            }
            @keyframes gradientShift {
                0% { background-position: 0% 50%; }
                50% { background-position: 100% 50%; }
                100% { background-position: 0% 50%; }
            }

            /* Floating Orbs */
            .orb {
                position: absolute;
                border-radius: 50%;
                filter: blur(80px);
                opacity: 0.4;
                animation: float 20s ease-in-out infinite;
            }
            .orb-1 {
                width: 400px; height: 400px;
                background: rgba(59, 130, 246, 0.5);
                top: -100px; left: -100px;
                animation-delay: 0s;
            }
            .orb-2 {
                width: 350px; height: 350px;
                background: rgba(139, 92, 246, 0.4);
                bottom: -80px; right: -80px;
                animation-delay: -5s;
            }
            .orb-3 {
                width: 250px; height: 250px;
                background: rgba(16, 185, 129, 0.3);
                top: 50%; right: 15%;
                animation-delay: -10s;
            }
            @keyframes float {
                0%, 100% { transform: translate(0, 0) scale(1); }
                25% { transform: translate(30px, -40px) scale(1.1); }
                50% { transform: translate(-20px, 20px) scale(0.95); }
                75% { transform: translate(15px, 30px) scale(1.05); }
            }

            /* Grid pattern overlay */
            .grid-pattern {
                background-image: 
                    linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
                background-size: 60px 60px;
            }

            /* Glassmorphism Card */
            .glass-card {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 255, 255, 0.3);
                box-shadow: 
                    0 25px 50px -12px rgba(0, 0, 0, 0.4),
                    0 0 0 1px rgba(255, 255, 255, 0.1),
                    inset 0 1px 0 rgba(255, 255, 255, 0.5);
            }

            /* Subtle entrance animation */
            .card-entrance {
                animation: cardEnter 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            }
            @keyframes cardEnter {
                from { opacity: 0; transform: translateY(30px) scale(0.97); }
                to { opacity: 1; transform: translateY(0) scale(1); }
            }
        </style>
    </head>
    <body class="antialiased auth-bg min-h-screen relative overflow-hidden">
        <!-- Animated Orbs -->
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
        <div class="orb orb-3"></div>

        <!-- Grid Pattern Overlay -->
        <div class="absolute inset-0 grid-pattern pointer-events-none"></div>

        <!-- Main Content -->
        <div class="relative z-10 min-h-screen flex flex-col items-center justify-center px-4 py-8 sm:py-12">
            
            <!-- Logo & Brand -->
            <div class="mb-8 text-center card-entrance" style="animation-delay: 0s;">
                <a href="/" class="inline-block group">
                    <img src="https://amarschool.co/wp-content/uploads/2024/04/logo.png" alt="AmarSchool" class="h-12 sm:h-14 w-auto brightness-0 invert opacity-90 group-hover:opacity-100 transition-opacity mx-auto">
                </a>
            </div>

            <!-- Login Card -->
            <div class="w-full max-w-md glass-card rounded-3xl p-8 sm:p-10 card-entrance" style="animation-delay: 0.1s;">
                {{ $slot }}
            </div>

            <!-- Footer -->
            <div class="mt-8 text-center card-entrance" style="animation-delay: 0.2s;">
                <p class="text-slate-500 text-sm font-medium">&copy; {{ date('Y') }} AmarSchool OMR. All rights reserved.</p>
                <a href="/" class="inline-flex items-center gap-1.5 mt-3 text-slate-400 hover:text-white text-xs font-semibold transition-colors group">
                    <svg class="w-4 h-4 group-hover:-translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Back to Homepage
                </a>
            </div>
        </div>
    </body>
</html>
