<aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" class="fixed inset-y-0 left-0 z-50 w-[270px] bg-slate-900 transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-auto flex flex-col h-full">
    
    <!-- Logo & Close Button -->
    <div class="flex items-center justify-between h-[72px] px-6 border-b border-slate-800/80 shrink-0">
        <a href="{{ route('home') }}" target="_blank" class="flex items-center gap-3 group">
            <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center shadow-lg shadow-blue-500/30">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
            </div>
            <div>
                <span class="block text-white font-bold text-sm font-outfit tracking-wide">AmarSchool</span>
                <span class="block text-slate-500 text-[10px] font-bold uppercase tracking-[0.2em]">OMR Admin</span>
            </div>
        </a>
        <button @click="sidebarOpen = false" class="lg:hidden text-slate-500 hover:text-white focus:outline-none transition-colors">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
        </button>
    </div>

    <!-- Navigation Links -->
    <div class="flex-1 px-4 py-6 overflow-y-auto space-y-1 custom-scrollbar">
        <p class="px-3 text-[10px] font-bold uppercase tracking-[0.2em] text-slate-500 mb-3 font-outfit">Overview</p>
        
        <a href="{{ route('admin.dashboard') }}" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group text-[13px] {{ request()->routeIs('admin.dashboard') ? 'bg-gradient-to-r from-blue-600/20 to-indigo-600/10 text-white font-bold shadow-sm border border-blue-500/20' : 'text-slate-400 hover:bg-slate-800/60 hover:text-white font-medium' }}">
            <svg class="w-[18px] h-[18px] mr-3 shrink-0 {{ request()->routeIs('admin.dashboard') ? 'text-blue-400' : 'text-slate-600 group-hover:text-slate-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
            Dashboard
            @if(request()->routeIs('admin.dashboard'))
                <div class="ml-auto w-1.5 h-1.5 rounded-full bg-blue-400 shadow-sm shadow-blue-400/50"></div>
            @endif
        </a>
        
        <a href="{{ route('admin.leads.index') }}" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group text-[13px] {{ request()->routeIs('admin.leads.*') ? 'bg-gradient-to-r from-blue-600/20 to-indigo-600/10 text-white font-bold shadow-sm border border-blue-500/20' : 'text-slate-400 hover:bg-slate-800/60 hover:text-white font-medium' }}">
            <svg class="w-[18px] h-[18px] mr-3 shrink-0 {{ request()->routeIs('admin.leads.*') ? 'text-blue-400' : 'text-slate-600 group-hover:text-slate-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            Leads & Waitlist
            <span class="ml-auto bg-blue-500/20 text-blue-300 text-[10px] font-bold px-2 py-0.5 rounded-md">{{ \App\Models\Lead::count() }}</span>
        </a>

        <div class="pt-6 pb-3">
            <p class="px-3 text-[10px] font-bold uppercase tracking-[0.2em] text-slate-500 font-outfit">Landing Page</p>
        </div>
        
        <a href="{{ route('admin.features.index') }}" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group text-[13px] {{ request()->routeIs('admin.features.*') ? 'bg-gradient-to-r from-blue-600/20 to-indigo-600/10 text-white font-bold shadow-sm border border-blue-500/20' : 'text-slate-400 hover:bg-slate-800/60 hover:text-white font-medium' }}">
            <svg class="w-[18px] h-[18px] mr-3 shrink-0 {{ request()->routeIs('admin.features.*') ? 'text-blue-400' : 'text-slate-600 group-hover:text-slate-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
            Features
        </a>
        
        <a href="{{ route('admin.pricing.index') }}" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group text-[13px] {{ request()->routeIs('admin.pricing.*') ? 'bg-gradient-to-r from-blue-600/20 to-indigo-600/10 text-white font-bold shadow-sm border border-blue-500/20' : 'text-slate-400 hover:bg-slate-800/60 hover:text-white font-medium' }}">
            <svg class="w-[18px] h-[18px] mr-3 shrink-0 {{ request()->routeIs('admin.pricing.*') ? 'text-blue-400' : 'text-slate-600 group-hover:text-slate-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            Pricing Plans
        </a>
        
        <a href="{{ route('admin.faqs.index') }}" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group text-[13px] {{ request()->routeIs('admin.faqs.*') ? 'bg-gradient-to-r from-blue-600/20 to-indigo-600/10 text-white font-bold shadow-sm border border-blue-500/20' : 'text-slate-400 hover:bg-slate-800/60 hover:text-white font-medium' }}">
            <svg class="w-[18px] h-[18px] mr-3 shrink-0 {{ request()->routeIs('admin.faqs.*') ? 'text-blue-400' : 'text-slate-600 group-hover:text-slate-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            FAQs
        </a>
        
        <a href="{{ route('admin.tutorials.index') }}" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group text-[13px] {{ request()->routeIs('admin.tutorials.*') ? 'bg-gradient-to-r from-blue-600/20 to-indigo-600/10 text-white font-bold shadow-sm border border-blue-500/20' : 'text-slate-400 hover:bg-slate-800/60 hover:text-white font-medium' }}">
            <svg class="w-[18px] h-[18px] mr-3 shrink-0 {{ request()->routeIs('admin.tutorials.*') ? 'text-blue-400' : 'text-slate-600 group-hover:text-slate-300' }}" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
            Tutorials
        </a>

        <a href="{{ route('admin.downloads.index') }}" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group text-[13px] {{ request()->routeIs('admin.downloads.*') ? 'bg-gradient-to-r from-blue-600/20 to-indigo-600/10 text-white font-bold shadow-sm border border-blue-500/20' : 'text-slate-400 hover:bg-slate-800/60 hover:text-white font-medium' }}">
            <svg class="w-[18px] h-[18px] mr-3 shrink-0 {{ request()->routeIs('admin.downloads.*') ? 'text-blue-400' : 'text-slate-600 group-hover:text-slate-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
            Downloads
        </a>

        <a href="{{ route('admin.templates.index') }}" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group text-[13px] {{ request()->routeIs('admin.templates.*') ? 'bg-gradient-to-r from-blue-600/20 to-indigo-600/10 text-white font-bold shadow-sm border border-blue-500/20' : 'text-slate-400 hover:bg-slate-800/60 hover:text-white font-medium' }}">
            <svg class="w-[18px] h-[18px] mr-3 shrink-0 {{ request()->routeIs('admin.templates.*') ? 'text-blue-400' : 'text-slate-600 group-hover:text-slate-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            OMR Templates
        </a>

        <a href="{{ route('admin.testimonials.index') }}" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group text-[13px] {{ request()->routeIs('admin.testimonials.*') ? 'bg-gradient-to-r from-blue-600/20 to-indigo-600/10 text-white font-bold shadow-sm border border-blue-500/20' : 'text-slate-400 hover:bg-slate-800/60 hover:text-white font-medium' }}">
            <svg class="w-[18px] h-[18px] mr-3 shrink-0 {{ request()->routeIs('admin.testimonials.*') ? 'text-blue-400' : 'text-slate-600 group-hover:text-slate-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
            Testimonials
        </a>

        <a href="{{ route('admin.client-logos.index') }}" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group text-[13px] {{ request()->routeIs('admin.client-logos.*') ? 'bg-gradient-to-r from-blue-600/20 to-indigo-600/10 text-white font-bold shadow-sm border border-blue-500/20' : 'text-slate-400 hover:bg-slate-800/60 hover:text-white font-medium' }}">
            <svg class="w-[18px] h-[18px] mr-3 shrink-0 {{ request()->routeIs('admin.client-logos.*') ? 'text-blue-400' : 'text-slate-600 group-hover:text-slate-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
            Client Logos
        </a>
        <div class="pt-6 pb-3">
            <p class="px-3 text-[10px] font-bold uppercase tracking-[0.2em] text-slate-500 font-outfit">System</p>
        </div>
        
        <a href="{{ route('admin.settings.index') }}" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group text-[13px] {{ request()->routeIs('admin.settings.*') ? 'bg-gradient-to-r from-blue-600/20 to-indigo-600/10 text-white font-bold shadow-sm border border-blue-500/20' : 'text-slate-400 hover:bg-slate-800/60 hover:text-white font-medium' }}">
            <svg class="w-[18px] h-[18px] mr-3 shrink-0 {{ request()->routeIs('admin.settings.*') ? 'text-blue-400' : 'text-slate-600 group-hover:text-slate-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            Site Settings
        </a>

        <a href="{{ route('admin.users.index') }}" class="flex items-center px-3 py-2.5 rounded-xl transition-all duration-200 group text-[13px] {{ request()->routeIs('admin.users.*') ? 'bg-gradient-to-r from-blue-600/20 to-indigo-600/10 text-white font-bold shadow-sm border border-blue-500/20' : 'text-slate-400 hover:bg-slate-800/60 hover:text-white font-medium' }}">
            <svg class="w-[18px] h-[18px] mr-3 shrink-0 {{ request()->routeIs('admin.users.*') ? 'text-blue-400' : 'text-slate-600 group-hover:text-slate-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            User Management
        </a>

        <!-- Visit Website Link -->
        <div class="pt-6">
            <a href="{{ route('home') }}" target="_blank" class="flex items-center px-3 py-2.5 rounded-xl text-[13px] text-slate-500 hover:text-blue-400 hover:bg-slate-800/40 transition-all font-medium group">
                <svg class="w-[18px] h-[18px] mr-3 shrink-0 text-slate-600 group-hover:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                Visit Website
            </a>
        </div>
    </div>

    <!-- User Profile Area -->
    <div class="p-4 border-t border-slate-800/60 shrink-0">
        <div class="relative" x-data="{ userOpen: false }">
            <button @click="userOpen = !userOpen" @click.away="userOpen = false" class="w-full flex items-center justify-between p-2.5 rounded-xl hover:bg-slate-800/60 transition-colors">
                <div class="flex items-center gap-3 overflow-hidden">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 text-white flex items-center justify-center font-bold text-sm shrink-0 shadow-lg shadow-blue-500/20">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                    <div class="text-left truncate">
                        <p class="text-sm font-bold text-white truncate flex items-center gap-2">
                            {{ Auth::user()->name }}
                            @if(Auth::user()->hasRole('super_admin'))
                                <span class="bg-purple-500/20 text-purple-300 text-[9px] uppercase tracking-wider px-1.5 py-0.5 rounded">Super Admin</span>
                            @endif
                        </p>
                        <p class="text-[11px] text-slate-500 truncate">{{ Auth::user()->email }}</p>
                    </div>
                </div>
                <svg class="w-4 h-4 text-slate-600 shrink-0 mx-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
            </button>
            
            <!-- Dropdown -->
            <div x-show="userOpen" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95 translate-y-2" x-transition:enter-end="transform opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100 translate-y-0" x-transition:leave-end="transform opacity-0 scale-95 translate-y-2" class="absolute bottom-full left-0 w-full mb-2 bg-slate-800 rounded-xl shadow-2xl border border-slate-700/50 overflow-hidden z-50">
                <a href="{{ route('profile.edit') }}" class="block px-4 py-3 text-sm font-medium text-slate-300 hover:bg-slate-700/50 hover:text-white transition-colors">
                    Edit Profile
                </a>
                <div class="h-px bg-slate-700/50"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left block px-4 py-3 text-sm font-medium text-red-400 hover:bg-red-500/10 hover:text-red-300 transition-colors">
                        Log Out
                    </button>
                </form>
            </div>
        </div>
    </div>
</aside>
