<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $settings['hero_title'] ?? 'AmarSchool OMR - Next-Gen Scanning' }}</title>
    
    <meta name="description" content="Optical Mark Recognition software designed for schools and businesses. Accurate scanning, fast processing, and comprehensive analytics.">
    
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
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased overflow-x-hidden relative selection:bg-blue-200">
    
    <!-- Navigation -->
    <nav class="fixed w-full z-50 glass-nav transition-all duration-300 py-4 shadow-sm">
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
                        <a href="#downloads" class="flex items-start gap-3 p-3 rounded-xl hover:bg-slate-50 transition-colors group/item">
                            <div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 group-hover/item:scale-105 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-sm">Mobile Scanner</h4>
                                <p class="text-xs text-slate-500 mt-0.5">Android & iOS App</p>
                            </div>
                        </a>
                        <a href="#downloads" class="flex items-start gap-3 p-3 rounded-xl hover:bg-slate-50 transition-colors group/item mt-1">
                            <div class="w-10 h-10 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center shrink-0 group-hover/item:scale-105 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-sm">Desktop Software</h4>
                                <p class="text-xs text-slate-500 mt-0.5">Windows & Mac OS</p>
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
                    <a href="{{ route('login') }}" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition-colors">Log in</a>
                @endauth
                <a href="#contact" class="hidden md:inline-flex px-5 py-2.5 rounded-xl bg-blue-600 text-white font-semibold hover:bg-blue-700 hover:shadow-lg hover:shadow-blue-500/30 transition-all">Start Free Demo</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <main class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-gradient-to-b from-blue-50/80 to-white">
        <!-- Abstract Shapes -->
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
        <div class="absolute top-40 right-10 w-72 h-72 bg-indigo-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-100 text-blue-700 text-sm font-semibold mb-8">
                <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                Smarter, Faster Examiner
            </div>
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 text-slate-900 leading-tight">
                {{ $settings['hero_title'] ?? 'Automate Your MCQ Exam' }}<br>
                <span class="text-blue-600">Checking in Seconds</span>
            </h1>
            <p class="mt-4 max-w-2xl text-lg md:text-xl text-slate-600 mx-auto mb-10 leading-relaxed font-medium">
                No more manual checking. Save hours with our smart OMR solution designed to eliminate human error and accelerate results.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contact" class="px-8 py-4 rounded-2xl bg-blue-600 text-white font-bold hover:shadow-[0_8px_30px_rgb(37,99,235,0.3)] hover:-translate-y-1 transition-all">Start Free Demo</a>
                <a href="#downloads" class="px-8 py-4 rounded-2xl bg-white text-blue-600 font-bold border-2 border-blue-100 hover:border-blue-300 hover:bg-blue-50 transition-all flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    Download Sample Sheet
                </a>
            </div>

            <!-- Trust Badges -->
            <div class="mt-16 pt-10 border-t border-slate-200/60 max-w-3xl mx-auto">
                <p class="text-sm font-semibold text-slate-500 uppercase tracking-widest mb-6">Trusted by 150+ Schools & Universities</p>
                <div class="flex flex-wrap justify-center gap-8 md:gap-12 opacity-60 grayscale hover:grayscale-0 transition-all">
                    <!-- Replace with real logos -->
                    <span class="text-xl font-bold font-outfit text-slate-700">EduSchool+</span>
                    <span class="text-xl font-bold font-outfit text-slate-700">National Academy</span>
                    <span class="text-xl font-bold font-outfit text-slate-700">TechInst.</span>
                    <span class="text-xl font-bold font-outfit text-slate-700">Global University</span>
                </div>
            </div>
        </div>
        
        <!-- Dashboard Mockup Image -->
        <div class="max-w-6xl mx-auto mt-20 px-4 sm:px-6 relative group">
            <div class="absolute inset-x-10 -bottom-10 h-1/2 bg-gradient-to-t from-white to-transparent z-20"></div>
            <img src="{{ asset('images/hero_dashboard.png') }}" alt="App Dashboard" class="relative rounded-2xl shadow-[0_20px_50px_rgba(8,_112,_184,_0.1)] border border-slate-200 z-10 mx-auto transform transition-all duration-700 group-hover:-translate-y-2 w-full max-w-5xl">
        </div>
    </main>

    <!-- Problem Section -->
    <section id="problem" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold mb-4 font-outfit text-slate-900">Why Traditional Checking Fails</h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-lg">The manual grading process is broken, causing stress for teachers and delayed results for students.</p>
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
    <section class="py-24 bg-blue-50/50 border-y border-blue-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
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
    <section id="features" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
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
    <section id="demo" class="py-24 bg-slate-900 text-white rounded-t-[3rem] mt-10">
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
                    <a href="#contact" class="inline-flex px-8 py-4 rounded-xl bg-blue-600 text-white font-bold hover:bg-blue-500 transition-colors">Try Live Demo</a>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-blue-500 blur-[80px] opacity-20 rounded-full"></div>
                    <div class="relative p-2 rounded-2xl bg-white/5 border border-white/10 aspect-video flex items-center justify-center shadow-2xl">
                        <!-- Youtube Embed Placeholder -->
                        @if(isset($settings['demo_video_url']))
                            <iframe class="w-full h-full rounded-xl" src="{{ $settings['demo_video_url'] }}" title="Demo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

    <!-- Pricing -->
    <section id="pricing" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="mb-16">
                <h2 class="text-3xl md:text-5xl font-bold mb-4 font-outfit text-slate-900">Transparent Pricing Plans</h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-lg">Choose a plan that fits your institution's size and examination frequency.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-[repeat(auto-fit,minmax(300px,1fr))] gap-8 max-w-5xl mx-auto">
                @foreach($plans as $plan)
                <div class="p-8 rounded-3xl bg-white border border-slate-200 text-left hover:shadow-[0_20px_40px_rgba(0,0,0,0.06)] transition-all duration-300 flex flex-col relative overflow-hidden group">
                    @if($loop->iteration == 2)
                        <div class="absolute top-0 right-0 bg-blue-600 text-white text-xs font-bold px-4 py-1.5 rounded-bl-xl">POPULAR</div>
                        <div class="absolute inset-0 border-2 border-blue-600 rounded-3xl z-[-1] pointer-events-none"></div>
                    @endif
                    <h3 class="text-2xl font-bold text-slate-800 mb-2">{{ $plan->name }}</h3>
                    <div class="flex items-baseline gap-2 mb-6">
                        <span class="text-5xl font-extrabold text-blue-600">৳{{ number_format($plan->price, 0) }}</span>
                        <span class="text-slate-500 font-medium">/ {{ $plan->billing_cycle }}</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-1">
                        @if($plan->features_json)
                            @foreach($plan->features_json as $pf)
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-blue-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span class="text-slate-600">{{ $pf }}</span>
                            </li>
                            @endforeach
                        @endif
                    </ul>
                    <a href="#contact" class="w-full block text-center py-4 rounded-xl {{ $loop->iteration == 2 ? 'bg-blue-600 hover:bg-blue-700 text-white shadow-lg shadow-blue-200' : 'bg-slate-100 hover:bg-slate-200 text-slate-800' }} font-bold transition-all">Get Started</a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Downloads Section -->
    <section id="downloads" class="py-20 bg-white border-t border-slate-100">
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

    <!-- Lead Capture Form / Create Account Section -->
    <section id="contact" class="py-24 bg-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-50 rounded-full blur-3xl -z-10"></div>
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="bg-white rounded-3xl border border-slate-200 p-8 md:p-12 shadow-[0_20px_50px_rgba(0,0,0,0.05)]">
                <div class="text-center mb-10">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 font-outfit text-slate-900">Create Demo Account</h2>
                    <p class="text-slate-600 text-lg">Leave your details and we will set up a personalized demo environment for your school within 24 hours.</p>
                </div>
                
                @if(session('success'))
                    <div class="bg-green-50 border border-green-200 text-green-700 p-6 rounded-2xl mb-6 text-center font-medium">
                        {{ session('success') }}
                    </div>
                @else
                    <form action="{{ route('lead.store') }}" method="POST" class="space-y-6 max-w-3xl mx-auto">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold mb-2 text-slate-700">Full Name</label>
                                <input type="text" name="name" required class="w-full bg-slate-50 border {{ $errors->has('name') ? 'border-red-500' : 'border-slate-200' }} rounded-xl px-5 py-3 text-slate-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition-colors">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold mb-2 text-slate-700">School/Organization</label>
                                <input type="text" name="school" required class="w-full bg-slate-50 border {{ $errors->has('school') ? 'border-red-500' : 'border-slate-200' }} rounded-xl px-5 py-3 text-slate-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition-colors">
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold mb-2 text-slate-700">Phone Number</label>
                                <input type="text" name="phone" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-5 py-3 text-slate-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition-colors">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold mb-2 text-slate-700">Email Address</label>
                                <input type="email" name="email" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-5 py-3 text-slate-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition-colors">
                            </div>
                        </div>
                        <div class="pt-2 flex items-center bg-slate-50 p-4 rounded-xl border border-slate-100">
                            <input type="hidden" name="is_demo_requested" value="0">
                            <input type="checkbox" name="is_demo_requested" value="1" id="demo_req" class="w-5 h-5 bg-white border-slate-300 rounded text-blue-600 focus:ring-blue-500" checked>
                            <label for="demo_req" class="ml-3 text-sm font-medium text-slate-700">Yes, I want to request a live demo walkthrough.</label>
                        </div>
                        <div class="pt-4">
                            <button type="submit" class="w-full bg-blue-600 text-white font-bold text-lg py-4 rounded-xl hover:bg-blue-700 hover:shadow-lg hover:shadow-blue-200 transition-all">Create Demo Account</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
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
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-24 bg-white border-t border-slate-100">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
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
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
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
                            <span class="text-slate-400">House #192, Road #2, Avenue #3, Mirpur DOHS, Dhaka 1216</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 text-blue-500 shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </span>
                            <div class="flex flex-col text-slate-400">
                                <a href="mailto:hello@amarschool.co" class="hover:text-blue-400 transition-colors">hello@amarschool.co</a>
                                <a href="mailto:support@amarschool.co" class="hover:text-blue-400 transition-colors">support@amarschool.co</a>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 text-blue-500 shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </span>
                            <div class="flex flex-col text-slate-400">
                                <a href="tel:+8801716282884" class="hover:text-blue-400 transition-colors">+88 01716 282 884</a>
                                <a href="tel:+8801738737668" class="hover:text-blue-400 transition-colors">+88 01738 737 668</a>
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
</body>
</html>
