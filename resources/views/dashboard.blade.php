<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800 leading-tight">
            {{ __('Welcome back, ' . Auth::user()->name) }}
        </h2>
        <p class="text-sm text-slate-500 mt-1">Here's what's happening with your OMR platform today.</p>
    </x-slot>

    <div class="space-y-6 pb-12">
        
        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Stat 1 -->
            <div class="bg-white overflow-hidden shadow-sm border border-slate-100 rounded-2xl p-6 relative group hover:shadow-md transition-all">
                <div class="absolute right-0 top-0 w-24 h-24 bg-blue-50 rounded-bl-full -z-10 group-hover:scale-110 transition-transform"></div>
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-sm font-semibold text-slate-500 uppercase tracking-widest mb-1">Total Leads</p>
                        <h4 class="text-3xl font-extrabold text-slate-900">{{ \App\Models\Lead::count() }}</h4>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                </div>
            </div>
            
            <!-- Stat 2 -->
            <div class="bg-white overflow-hidden shadow-sm border border-slate-100 rounded-2xl p-6 relative group hover:shadow-md transition-all">
                <div class="absolute right-0 top-0 w-24 h-24 bg-emerald-50 rounded-bl-full -z-10 group-hover:scale-110 transition-transform"></div>
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-sm font-semibold text-slate-500 uppercase tracking-widest mb-1">Demo Requests</p>
                        <h4 class="text-3xl font-extrabold text-slate-900">{{ \App\Models\Lead::where('is_demo_requested', true)->count() }}</h4>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </div>
                </div>
            </div>
            
            <!-- Stat 3 -->
            <div class="bg-white overflow-hidden shadow-sm border border-slate-100 rounded-2xl p-6 relative group hover:shadow-md transition-all">
                <div class="absolute right-0 top-0 w-24 h-24 bg-purple-50 rounded-bl-full -z-10 group-hover:scale-110 transition-transform"></div>
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-sm font-semibold text-slate-500 uppercase tracking-widest mb-1">Active Features</p>
                        <h4 class="text-3xl font-extrabold text-slate-900">{{ \App\Models\Feature::count() }}</h4>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    </div>
                </div>
            </div>
            
            <!-- Stat 4 -->
            <div class="bg-white overflow-hidden shadow-sm border border-slate-100 rounded-2xl p-6 relative group hover:shadow-md transition-all">
                <div class="absolute right-0 top-0 w-24 h-24 bg-orange-50 rounded-bl-full -z-10 group-hover:scale-110 transition-transform"></div>
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-sm font-semibold text-slate-500 uppercase tracking-widest mb-1">Pricing Plans</p>
                        <h4 class="text-3xl font-extrabold text-slate-900">{{ \App\Models\PricingPlan::count() }}</h4>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-orange-100 text-orange-600 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Recent Leads Table -->
            <div class="md:col-span-2 bg-white shadow-sm border border-slate-100 rounded-2xl p-6 flex flex-col">
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h3 class="text-xl font-bold text-slate-800">Recent Leads</h3>
                        <p class="text-sm text-slate-500">Latest school inquiries and demo requests.</p>
                    </div>
                    <a href="{{ route('admin.leads.index') }}" class="text-sm font-semibold text-blue-600 hover:text-blue-800 bg-blue-50 px-4 py-2 rounded-lg transition-colors">View All</a>
                </div>
                
                <div class="overflow-x-auto flex-1">
                    <table class="w-full text-left border-collapse whitespace-nowrap">
                        <thead>
                            <tr class="text-slate-500 text-sm border-b border-slate-100">
                                <th class="pb-3 font-semibold px-2">Name</th>
                                <th class="pb-3 font-semibold px-2">Organization</th>
                                <th class="pb-3 font-semibold px-2">Email</th>
                                <th class="pb-3 font-semibold px-2 text-center">Demo</th>
                                <th class="pb-3 font-semibold px-2 text-right">Time</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-slate-700">
                            @forelse(\App\Models\Lead::latest()->take(5)->get() as $lead)
                                <tr class="border-b border-slate-50 hover:bg-slate-50/80 transition-colors">
                                    <td class="py-4 px-2 font-medium">{{ $lead->name }}</td>
                                    <td class="py-4 px-2 text-slate-600">{{ $lead->school }}</td>
                                    <td class="py-4 px-2 text-blue-600">{{ $lead->email }}</td>
                                    <td class="py-4 px-2 text-center">
                                        @if($lead->is_demo_requested)
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800">
                                                Requested
                                            </span>
                                        @else
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-600">
                                                -
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-4 px-2 text-slate-500 text-right">{{ $lead->created_at->diffForHumans() }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="py-10 text-center">
                                        <div class="flex flex-col items-center justify-center space-y-2">
                                            <svg class="w-12 h-12 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                            <p class="text-slate-500 font-medium">No leads captured yet.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Quick Actions & System Info -->
            <div class="space-y-6">
                <!-- Actions -->
                <div class="bg-white shadow-sm border border-slate-100 rounded-2xl p-6 relative overflow-hidden">
                    <div class="absolute -right-10 -top-10 w-32 h-32 bg-indigo-50 rounded-full blur-2xl"></div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4 relative z-10">Quick Actions</h3>
                    <div class="space-y-3 relative z-10">
                        <a href="{{ route('admin.settings.index') }}" class="flex items-center p-3 rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-100 transition-all group">
                            <div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 mr-4 group-hover:scale-105 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <p class="font-semibold text-slate-800 text-sm">Landing Page Settings</p>
                                <p class="text-xs text-slate-500">Update hero texts and meta</p>
                            </div>
                        </a>
                        <a href="{{ route('admin.downloads.index') }}" class="flex items-center p-3 rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-100 transition-all group">
                            <div class="w-10 h-10 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 mr-4 group-hover:scale-105 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            </div>
                            <div>
                                <p class="font-semibold text-slate-800 text-sm">Upload Demo Sheet</p>
                                <p class="text-xs text-slate-500">Add new files to S3 bucket</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Server Info -->
                <div class="bg-gradient-to-br from-slate-800 to-slate-900 rounded-2xl p-6 text-white shadow-xl relative overflow-hidden">
                    <svg class="absolute right-0 bottom-0 text-slate-700 opacity-50 w-32 h-32 transform translate-x-10 translate-y-10" fill="currentColor" viewBox="0 0 24 24"><path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    <h3 class="text-lg font-bold mb-4 font-outfit relative z-10">System Status</h3>
                    <div class="space-y-4 relative z-10 text-sm">
                        <div class="flex items-center justify-between">
                            <span class="text-slate-400">Database</span>
                            <span class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span> Connected</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-slate-400">Cloud Storage</span>
                            <span class="flex items-center gap-2 text-blue-300">R2 Bucket Active</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-slate-400">AI Chatbot</span>
                            <span class="flex items-center gap-2 text-purple-300">OpenAI Active</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
