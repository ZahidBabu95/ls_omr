<aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-slate-200 transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-auto flex flex-col h-full shadow-[0_0_20px_rgba(0,0,0,0.02)]">
    
    <!-- Logo & Close Button -->
    <div class="flex items-center justify-between h-16 px-6 border-b border-slate-100 shrink-0">
        <a href="{{ route('home') }}" class="flex items-center gap-2">
            <img src="https://amarschool.co/wp-content/uploads/2024/04/logo.png" alt="AmarSchool" class="h-8 w-auto">
        </a>
        <button @click="sidebarOpen = false" class="lg:hidden text-slate-400 hover:text-slate-600 focus:outline-none">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
        </button>
    </div>

    <!-- Navigation Links -->
    <div class="flex-1 px-4 py-6 overflow-y-auto space-y-1 custom-scrollbar">
        <p class="px-2 text-xs font-bold uppercase tracking-wider text-slate-400 mb-2 font-outfit">Overview</p>
        
        <a href="{{ route('admin.dashboard') }}" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group {{ request()->routeIs('admin.dashboard') ? 'bg-blue-50 text-blue-700 font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600 font-medium' }}">
            <svg class="w-5 h-5 mr-3 shrink-0 {{ request()->routeIs('admin.dashboard') ? 'text-blue-600' : 'text-slate-400 group-hover:text-blue-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
            Dashboard
        </a>
        
        <a href="{{ route('admin.leads.index') }}" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group {{ request()->routeIs('admin.leads.*') ? 'bg-blue-50 text-blue-700 font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600 font-medium' }}">
            <svg class="w-5 h-5 mr-3 shrink-0 {{ request()->routeIs('admin.leads.*') ? 'text-blue-600' : 'text-slate-400 group-hover:text-blue-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            Leads & Waitlist
        </a>

        <div class="mt-8 mb-2">
            <p class="px-2 text-xs font-bold uppercase tracking-wider text-slate-400 mb-2 font-outfit mt-6">Landing Page</p>
        </div>
        
        <a href="{{ route('admin.features.index') }}" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group {{ request()->routeIs('admin.features.*') ? 'bg-blue-50 text-blue-700 font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600 font-medium' }}">
            <svg class="w-5 h-5 mr-3 shrink-0 {{ request()->routeIs('admin.features.*') ? 'text-blue-600' : 'text-slate-400 group-hover:text-blue-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
            Features
        </a>
        
        <a href="{{ route('admin.pricing.index') }}" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group {{ request()->routeIs('admin.pricing.*') ? 'bg-blue-50 text-blue-700 font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600 font-medium' }}">
            <svg class="w-5 h-5 mr-3 shrink-0 {{ request()->routeIs('admin.pricing.*') ? 'text-blue-600' : 'text-slate-400 group-hover:text-blue-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            Pricing Plans
        </a>
        
        <a href="{{ route('admin.faqs.index') }}" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group {{ request()->routeIs('admin.faqs.*') ? 'bg-blue-50 text-blue-700 font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600 font-medium' }}">
            <svg class="w-5 h-5 mr-3 shrink-0 {{ request()->routeIs('admin.faqs.*') ? 'text-blue-600' : 'text-slate-400 group-hover:text-blue-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            FAQs
        </a>
        
        <a href="{{ route('admin.downloads.index') }}" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group {{ request()->routeIs('admin.downloads.*') ? 'bg-blue-50 text-blue-700 font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600 font-medium' }}">
            <svg class="w-5 h-5 mr-3 shrink-0 {{ request()->routeIs('admin.downloads.*') ? 'text-blue-600' : 'text-slate-400 group-hover:text-blue-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
            Downloads
        </a>

        <a href="{{ route('admin.testimonials.index') }}" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group {{ request()->routeIs('admin.testimonials.*') ? 'bg-blue-50 text-blue-700 font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600 font-medium' }}">
            <svg class="w-5 h-5 mr-3 shrink-0 {{ request()->routeIs('admin.testimonials.*') ? 'text-blue-600' : 'text-slate-400 group-hover:text-blue-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
            Testimonials
        </a>

        <div class="mt-8 mb-2">
            <p class="px-2 text-xs font-bold uppercase tracking-wider text-slate-400 mb-2 font-outfit mt-6">System</p>
        </div>
        
        <a href="{{ route('admin.settings.index') }}" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group {{ request()->routeIs('admin.settings.*') ? 'bg-blue-50 text-blue-700 font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600 font-medium' }}">
            <svg class="w-5 h-5 mr-3 shrink-0 {{ request()->routeIs('admin.settings.*') ? 'text-blue-600' : 'text-slate-400 group-hover:text-blue-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            Site Settings
        </a>
    </div>

    <!-- User Profile Area -->
    <div class="p-4 border-t border-slate-100 shrink-0">
        <div class="relative" x-data="{ userOpen: false }">
            <button @click="userOpen = !userOpen" @click.away="userOpen = false" class="w-full flex items-center justify-between p-2 rounded-xl hover:bg-slate-50 transition-colors">
                <div class="flex items-center gap-3 overflow-hidden">
                    <div class="w-9 h-9 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-sm shrink-0">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                    <div class="text-left truncate">
                        <p class="text-sm font-bold text-slate-800 truncate">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-slate-500 truncate">{{ Auth::user()->email }}</p>
                    </div>
                </div>
                <svg class="w-4 h-4 text-slate-400 shrink-0 mx-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
            </button>
            
            <!-- Dropdown -->
            <div x-show="userOpen" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95 translate-y-2" x-transition:enter-end="transform opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100 translate-y-0" x-transition:leave-end="transform opacity-0 scale-95 translate-y-2" class="absolute bottom-full left-0 w-full mb-2 bg-white rounded-xl shadow-lg border border-slate-100 overflow-hidden z-50">
                <a href="{{ route('profile.edit') }}" class="block px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-50 hover:text-blue-600 transition-colors">
                    Edit Profile
                </a>
                <div class="h-px bg-slate-100"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left block px-4 py-3 text-sm font-medium text-red-600 hover:bg-red-50 hover:text-red-700 transition-colors">
                        Log Out
                    </button>
                </form>
            </div>
        </div>
    </div>
</aside>
