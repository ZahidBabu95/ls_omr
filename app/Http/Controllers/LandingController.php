<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Feature;
use App\Models\PricingPlan;
use App\Models\Faq;
use App\Models\Download;
use App\Models\Lead;
use App\Models\Testimonial;

class LandingController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        $features = Feature::orderBy('order_index')->get();
        $plans = PricingPlan::all();
        $faqs = Faq::orderBy('order_index')->get();
        $downloads = Download::all();
        $testimonials = Testimonial::orderBy('order_index')->get();
        $omrTemplates = \App\Models\OmrTemplate::orderBy('order_index')->get();
        $clientLogos = \App\Models\ClientLogo::orderBy('order_index')->get();
        $featuredTutorial = \App\Models\Tutorial::where('is_featured', true)->first();
        
        return view('welcome', compact('settings', 'features', 'plans', 'faqs', 'downloads', 'testimonials', 'omrTemplates', 'clientLogos', 'featuredTutorial'));
    }

    public function tutorials()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        $tutorials = \App\Models\Tutorial::orderBy('sort_order')->get();
        $downloads = Download::all();
        
        return view('tutorials', compact('settings', 'tutorials', 'downloads'));
    }

    public function storeLead(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'school' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'is_demo_requested' => 'boolean'
        ]);

        Lead::create($validated);

        return back()->with('success', 'Thank you! Your request has been received.');
    }

    public function downloadFile(Download $download)
    {
        $download->increment('download_count');
        return \Illuminate\Support\Facades\Storage::disk('public')->download($download->file_path);
    }
}
