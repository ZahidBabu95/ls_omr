<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-extrabold text-2xl font-outfit text-slate-900 leading-tight">
                {{ __('Welcome back, ' . Auth::user()->name) }} 👋
            </h2>
            <p class="text-slate-500 mt-1 text-sm font-medium">Here's what's happening with your OMR SaaS platform today.</p>
        </div>
    </x-slot>

    <div class="space-y-8 pb-16">
        
        <!-- Stats Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <!-- Stat 1: Total Leads -->
            <div class="bg-white rounded-2xl p-6 relative group hover:shadow-lg hover:shadow-blue-500/5 transition-all duration-300 transform hover:-translate-y-0.5 overflow-hidden border border-slate-100">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-blue-500/5 rounded-full group-hover:bg-blue-500/10 transition-all"></div>
                <div class="flex justify-between items-start relative z-10">
                    <div>
                        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-1.5">Total Leads</p>
                        <h4 class="text-3xl font-extrabold font-outfit text-slate-800">{{ \App\Models\Lead::count() }}</h4>
                        <p class="text-xs text-emerald-500 font-bold mt-2 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                            Active
                        </p>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                </div>
            </div>
            
            <!-- Stat 2: Demo Requests -->
            <div class="bg-white rounded-2xl p-6 relative group hover:shadow-lg hover:shadow-emerald-500/5 transition-all duration-300 transform hover:-translate-y-0.5 overflow-hidden border border-slate-100">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-emerald-500/5 rounded-full group-hover:bg-emerald-500/10 transition-all"></div>
                <div class="flex justify-between items-start relative z-10">
                    <div>
                        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-1.5">Demo Requests</p>
                        <h4 class="text-3xl font-extrabold font-outfit text-slate-800">{{ \App\Models\Lead::where('is_demo_requested', true)->count() }}</h4>
                        <p class="text-xs text-blue-500 font-bold mt-2 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                            Pending
                        </p>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </div>
                </div>
            </div>
            
            <!-- Stat 3: Active Features -->
            <div class="bg-white rounded-2xl p-6 relative group hover:shadow-lg hover:shadow-purple-500/5 transition-all duration-300 transform hover:-translate-y-0.5 overflow-hidden border border-slate-100">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-purple-500/5 rounded-full group-hover:bg-purple-500/10 transition-all"></div>
                <div class="flex justify-between items-start relative z-10">
                    <div>
                        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-1.5">Active Features</p>
                        <h4 class="text-3xl font-extrabold font-outfit text-slate-800">{{ \App\Models\Feature::count() }}</h4>
                        <p class="text-xs text-purple-500 font-bold mt-2 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" /></svg>
                            Published
                        </p>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    </div>
                </div>
            </div>
            
            <!-- Stat 4: Pricing Plans -->
            <div class="bg-white rounded-2xl p-6 relative group hover:shadow-lg hover:shadow-orange-500/5 transition-all duration-300 transform hover:-translate-y-0.5 overflow-hidden border border-slate-100">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-orange-500/5 rounded-full group-hover:bg-orange-500/10 transition-all"></div>
                <div class="flex justify-between items-start relative z-10">
                    <div>
                        <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest mb-1.5">Pricing Plans</p>
                        <h4 class="text-3xl font-extrabold font-outfit text-slate-800">{{ \App\Models\PricingPlan::count() }}</h4>
                        <p class="text-xs text-orange-500 font-bold mt-2 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            Live
                        </p>
                    </div>
                    <div class="w-12 h-12 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            <!-- Recent Leads Table -->
            <div class="lg:col-span-2 bg-white border border-slate-100 rounded-2xl flex flex-col relative overflow-hidden">
                <div class="flex justify-between items-center p-6 pb-0">
                    <div>
                        <h3 class="text-lg font-bold font-outfit text-slate-800">Recent Lead Activity</h3>
                        <p class="text-xs text-slate-400 font-semibold mt-0.5">Latest inquiries and demo requests</p>
                    </div>
                    <a href="{{ route('admin.leads.index') }}" class="text-xs font-bold text-blue-600 hover:text-white hover:bg-blue-600 bg-blue-50 px-4 py-2 rounded-lg transition-all">View All</a>
                </div>
                
                <div class="overflow-x-auto flex-1 p-6 pt-4">
                    <table class="w-full text-left border-collapse whitespace-nowrap">
                        <thead>
                            <tr class="text-slate-400 text-[10px] uppercase tracking-widest border-b border-slate-100">
                                <th class="pb-3 font-bold px-3">Contact</th>
                                <th class="pb-3 font-bold px-3">Organization</th>
                                <th class="pb-3 font-bold px-3 text-center">Status</th>
                                <th class="pb-3 font-bold px-3 text-right">Captured</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-slate-700 font-medium">
                            @forelse(\App\Models\Lead::latest()->take(5)->get() as $lead)
                                @php
                                    $colors = ['blue', 'indigo', 'purple', 'emerald', 'orange', 'rose'];
                                    $color = $colors[strlen($lead->name) % count($colors)];
                                @endphp
                                <tr class="border-b border-slate-50 hover:bg-slate-50/50 transition-colors group">
                                    <td class="py-4 px-3 flex items-center gap-3">
                                        <div class="w-9 h-9 rounded-xl bg-{{ $color }}-100 text-{{ $color }}-600 flex items-center justify-center font-bold text-xs uppercase shrink-0">{{ substr($lead->name, 0, 1) }}</div>
                                        <div>
                                            <div class="text-slate-900 font-bold text-sm">{{ $lead->name }}</div>
                                            <div class="text-[11px] text-slate-400">{{ $lead->email }}</div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-3 text-slate-500 text-sm">{{ $lead->school }}</td>
                                    <td class="py-4 px-3 text-center">
                                        @if($lead->is_demo_requested)
                                            <span class="inline-flex items-center px-2.5 py-1 rounded-lg text-[10px] font-bold bg-emerald-50 border border-emerald-100 text-emerald-700 uppercase tracking-wide">
                                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mr-1.5 animate-pulse"></span>
                                                Demo Req.
                                            </span>
                                        @else
                                            <span class="inline-flex items-center px-2.5 py-1 rounded-lg text-[10px] font-bold bg-slate-50 border border-slate-100 text-slate-500 uppercase tracking-wide">
                                                Standard
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-4 px-3 text-slate-400 text-right text-xs">{{ $lead->created_at->diffForHumans() }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="py-16 text-center">
                                        <div class="flex flex-col items-center justify-center space-y-3">
                                            <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-slate-300">
                                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                            </div>
                                            <p class="text-slate-400 font-semibold text-sm">No leads captured yet.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-6">
                <!-- Quick Actions -->
                <div class="bg-white border border-slate-100 rounded-2xl p-6">
                    <h3 class="text-base font-bold font-outfit text-slate-800 mb-5">Quick Launch</h3>
                    <div class="space-y-3">
                        <a href="{{ route('admin.settings.index') }}" class="flex items-center p-3.5 rounded-xl hover:bg-blue-50/50 border border-slate-100 hover:border-blue-100 transition-all group">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 mr-3.5 group-hover:scale-105 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <p class="font-bold text-slate-800 text-sm">Site Configuration</p>
                                <p class="text-[11px] text-slate-400 mt-0.5">Manage favicon & hero contents</p>
                            </div>
                        </a>
                        <a href="{{ route('admin.pricing.index') }}" class="flex items-center p-3.5 rounded-xl hover:bg-emerald-50/50 border border-slate-100 hover:border-emerald-100 transition-all group">
                            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 mr-3.5 group-hover:scale-105 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <p class="font-bold text-slate-800 text-sm">Update Pricing</p>
                                <p class="text-[11px] text-slate-400 mt-0.5">Modify subscription tiers</p>
                            </div>
                        </a>
                        <a href="{{ route('admin.features.index') }}" class="flex items-center p-3.5 rounded-xl hover:bg-purple-50/50 border border-slate-100 hover:border-purple-100 transition-all group">
                            <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center shrink-0 mr-3.5 group-hover:scale-105 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                            </div>
                            <div>
                                <p class="font-bold text-slate-800 text-sm">Manage Features</p>
                                <p class="text-[11px] text-slate-400 mt-0.5">Add or edit landing page features</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Server Info -->
                <div class="bg-slate-900 rounded-2xl p-6 text-white relative overflow-hidden">
                    <div class="absolute -right-8 -bottom-8 w-36 h-36 bg-emerald-500/10 rounded-full blur-2xl pointer-events-none"></div>
                    <div class="absolute right-4 bottom-4 text-slate-800/30">
                        <svg class="w-16 h-16 transform rotate-12" fill="currentColor" viewBox="0 0 24 24"><path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    </div>
                    
                    <div class="flex items-center justify-between mb-5 relative z-10">
                        <h3 class="text-sm font-bold font-outfit">System Status</h3>
                        <span class="flex h-2.5 w-2.5 relative">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                        </span>
                    </div>
                    
                    <div class="space-y-4 font-medium text-sm relative z-10">
                        <div class="flex items-center justify-between">
                            <span class="text-slate-400 flex items-center gap-2 text-xs">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                                Database
                            </span>
                            <span class="text-emerald-400 font-bold text-xs">Optimal</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-slate-400 flex items-center gap-2 text-xs">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                                API Nodes
                            </span>
                            <span class="text-blue-400 font-bold text-xs">Balanced</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-slate-400 flex items-center gap-2 text-xs">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                OMR Engine
                            </span>
                            <span class="text-purple-400 font-bold text-xs">Processing</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
