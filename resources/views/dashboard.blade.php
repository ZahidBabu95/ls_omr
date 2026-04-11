<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-3xl font-outfit text-slate-900 leading-tight">
            {{ __('Welcome back, ' . Auth::user()->name) }} 👋
        </h2>
        <p class="text-slate-500 mt-2 text-base">Here's what's happening with your OMR SaaS platform today.</p>
    </x-slot>

    <div class="space-y-8 pb-16">
        
        <!-- Stats Grid with Glassmorphism & Micro-interactions -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Stat 1 -->
            <div class="bg-white/80 backdrop-blur-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white/60 rounded-3xl p-6 relative group hover:shadow-[0_8px_30px_rgb(37,99,235,0.1)] transition-all duration-300 transform hover:-translate-y-1 overflow-hidden">
                <div class="absolute -right-6 -top-6 w-32 h-32 bg-blue-400/10 rounded-full blur-2xl group-hover:bg-blue-400/20 transition-all z-0"></div>
                <div class="flex justify-between items-start relative z-10">
                    <div>
                        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-2">Total Leads</p>
                        <h4 class="text-4xl font-extrabold font-outfit text-slate-800">{{ \App\Models\Lead::count() }}</h4>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-blue-50 to-blue-100 text-blue-600 flex items-center justify-center shadow-inner border border-blue-200/50">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                </div>
            </div>
            
            <!-- Stat 2 -->
            <div class="bg-white/80 backdrop-blur-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white/60 rounded-3xl p-6 relative group hover:shadow-[0_8px_30px_rgba(16,185,129,0.1)] transition-all duration-300 transform hover:-translate-y-1 overflow-hidden">
                <div class="absolute -right-6 -top-6 w-32 h-32 bg-emerald-400/10 rounded-full blur-2xl group-hover:bg-emerald-400/20 transition-all z-0"></div>
                <div class="flex justify-between items-start relative z-10">
                    <div>
                        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-2">Demo Requests</p>
                        <h4 class="text-4xl font-extrabold font-outfit text-slate-800">{{ \App\Models\Lead::where('is_demo_requested', true)->count() }}</h4>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-emerald-50 to-emerald-100 text-emerald-600 flex items-center justify-center shadow-inner border border-emerald-200/50">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </div>
                </div>
            </div>
            
            <!-- Stat 3 -->
            <div class="bg-white/80 backdrop-blur-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white/60 rounded-3xl p-6 relative group hover:shadow-[0_8px_30px_rgba(139,92,246,0.1)] transition-all duration-300 transform hover:-translate-y-1 overflow-hidden">
                <div class="absolute -right-6 -top-6 w-32 h-32 bg-purple-400/10 rounded-full blur-2xl group-hover:bg-purple-400/20 transition-all z-0"></div>
                <div class="flex justify-between items-start relative z-10">
                    <div>
                        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-2">Active Features</p>
                        <h4 class="text-4xl font-extrabold font-outfit text-slate-800">{{ \App\Models\Feature::count() }}</h4>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-purple-50 to-purple-100 text-purple-600 flex items-center justify-center shadow-inner border border-purple-200/50">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    </div>
                </div>
            </div>
            
            <!-- Stat 4 -->
            <div class="bg-white/80 backdrop-blur-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white/60 rounded-3xl p-6 relative group hover:shadow-[0_8px_30px_rgba(249,115,22,0.1)] transition-all duration-300 transform hover:-translate-y-1 overflow-hidden">
                <div class="absolute -right-6 -top-6 w-32 h-32 bg-orange-400/10 rounded-full blur-2xl group-hover:bg-orange-400/20 transition-all z-0"></div>
                <div class="flex justify-between items-start relative z-10">
                    <div>
                        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-2">Pricing Plans</p>
                        <h4 class="text-4xl font-extrabold font-outfit text-slate-800">{{ \App\Models\PricingPlan::count() }}</h4>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-orange-50 to-orange-100 text-orange-600 flex items-center justify-center shadow-inner border border-orange-200/50">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Recent Leads Table -->
            <div class="md:col-span-2 bg-white shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 rounded-3xl p-8 flex flex-col relative overflow-hidden">
                <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-blue-500 to-indigo-500"></div>
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h3 class="text-xl font-bold font-outfit text-slate-800 mb-1">Recent Lead Activity</h3>
                        <p class="text-sm text-slate-500 font-medium">Latest inquiries and demo requests spanning all regions.</p>
                    </div>
                    <a href="{{ route('admin.leads.index') }}" class="text-sm font-bold text-blue-600 hover:text-white hover:bg-blue-600 bg-blue-50 px-5 py-2.5 rounded-xl transition-all shadow-sm">View Pipeline</a>
                </div>
                
                <div class="overflow-x-auto flex-1">
                    <table class="w-full text-left border-collapse whitespace-nowrap">
                        <thead>
                            <tr class="text-slate-400 text-xs uppercase tracking-widest border-b border-slate-100">
                                <th class="pb-4 font-bold px-4">Contact</th>
                                <th class="pb-4 font-bold px-4">Organization</th>
                                <th class="pb-4 font-bold px-4 text-center">Status</th>
                                <th class="pb-4 font-bold px-4 text-right">Captured</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-slate-700 font-medium">
                            @forelse(\App\Models\Lead::latest()->take(5)->get() as $lead)
                                <tr class="border-b border-slate-50 hover:bg-slate-50/50 transition-colors group">
                                    <td class="py-5 px-4 flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-500 flex items-center justify-center font-bold text-xs uppercase">{{ substr($lead->name, 0, 1) }}</div>
                                        <div>
                                            <div class="text-slate-900 font-bold">{{ $lead->name }}</div>
                                            <div class="text-xs text-slate-400">{{ $lead->email }}</div>
                                        </div>
                                    </td>
                                    <td class="py-5 px-4 text-slate-600">{{ $lead->school }}</td>
                                    <td class="py-5 px-4 text-center">
                                        @if($lead->is_demo_requested)
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-[10px] font-bold bg-emerald-100 border border-emerald-200 text-emerald-700 uppercase tracking-wide">
                                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mr-1.5 animate-pulse"></span>
                                                Demo Req.
                                            </span>
                                        @else
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-[10px] font-bold bg-slate-100 border border-slate-200 text-slate-500 uppercase tracking-wide">
                                                Standard
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-5 px-4 text-slate-400 text-right text-xs">{{ $lead->created_at->diffForHumans() }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="py-16 text-center">
                                        <div class="flex flex-col items-center justify-center space-y-3">
                                            <div class="w-16 h-16 bg-slate-50 rounded-full flex items-center justify-center text-slate-300">
                                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                            </div>
                                            <p class="text-slate-500 font-medium">No leads captured yet. Your pipeline is empty.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Quick Actions & System Info -->
            <div class="space-y-8">
                <!-- Actions -->
                <div class="bg-white shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 rounded-3xl p-8 relative overflow-hidden group hover:border-blue-100 transition-colors">
                    <div class="absolute -right-10 -top-10 w-40 h-40 bg-gradient-to-br from-indigo-100 to-purple-100 rounded-full blur-3xl opacity-50 transition-opacity group-hover:opacity-100 z-0"></div>
                    <h3 class="text-xl font-bold font-outfit text-slate-800 mb-6 relative z-10">Quick Launch</h3>
                    <div class="space-y-4 relative z-10">
                        <a href="{{ route('admin.settings.index') }}" class="flex items-center p-4 rounded-2xl hover:bg-white hover:shadow-lg border border-slate-50 hover:border-slate-100 transition-all bg-slate-50/50">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-50 to-indigo-50 border border-blue-100 text-blue-600 flex items-center justify-center shrink-0 mr-4 shadow-sm">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <p class="font-bold text-slate-800 text-sm">Site Configuration</p>
                                <p class="text-xs text-slate-500 mt-0.5">Manage favicon & hero contents</p>
                            </div>
                        </a>
                        <a href="{{ route('admin.pricing.index') }}" class="flex items-center p-4 rounded-2xl hover:bg-white hover:shadow-lg border border-slate-50 hover:border-slate-100 transition-all bg-slate-50/50">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-50 to-teal-50 border border-emerald-100 text-emerald-600 flex items-center justify-center shrink-0 mr-4 shadow-sm">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <p class="font-bold text-slate-800 text-sm">Update Pricing</p>
                                <p class="text-xs text-slate-500 mt-0.5">Modify subscription tiers</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Server Info -->
                <div class="bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] bg-slate-900 rounded-3xl p-8 text-white shadow-2xl relative overflow-hidden before:absolute before:inset-0 before:bg-gradient-to-br before:from-slate-800/90 before:to-slate-900/95 before:-z-10 z-10 w-full">
                    <div class="absolute -right-10 -bottom-10 w-48 h-48 bg-emerald-500/20 rounded-full blur-3xl pointer-events-none"></div>
                    <svg class="absolute right-4 bottom-4 text-slate-700/50 w-24 h-24 transform rotate-12" fill="currentColor" viewBox="0 0 24 24"><path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-bold font-outfit">SaaS Architecture</h3>
                        <span class="flex h-3 w-3 relative">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                        </span>
                    </div>
                    
                    <div class="space-y-5 font-medium text-sm">
                        <div class="flex items-center justify-between group">
                            <span class="text-slate-400 flex items-center gap-2 shadow-sm"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg> MySQL DB</span>
                            <span class="text-emerald-400 font-bold group-hover:text-emerald-300 transition-colors">Optimal</span>
                        </div>
                        <div class="flex items-center justify-between group">
                            <span class="text-slate-400 flex items-center gap-2 shadow-sm"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg> Core API Nodes</span>
                            <span class="text-blue-400 font-bold group-hover:text-blue-300 transition-colors">Load Balanced</span>
                        </div>
                        <div class="flex items-center justify-between group">
                            <span class="text-slate-400 flex items-center gap-2 shadow-sm"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg> OMR Engine</span>
                            <span class="text-purple-400 font-bold group-hover:text-purple-300 transition-colors">Processing</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
