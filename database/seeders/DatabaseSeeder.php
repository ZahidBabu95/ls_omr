<?php
namespace Database\Seeders;

use App\Models\User;
use App\Models\Feature;
use App\Models\PricingPlan;
use App\Models\Faq;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'hello@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        Feature::create([
            'title' => 'Ultra Fast Scanning',
            'description' => 'Process up to 10,000 sheets per hour with our cloud-powered OCR technology.',
            'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>'
        ]);
        Feature::create([
            'title' => 'Detailed Analytics',
            'description' => 'Get granular insights into student performance with dynamic PDF reports.',
            'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>'
        ]);

        PricingPlan::create([
            'name' => 'Starter',
            'price' => 2500,
            'billing_cycle' => 'Yearly',
            'features_json' => ['Up to 5,000', '~0.50 Tk', '<span class="text-emerald-500 mr-2">✔</span> Basic', 'Excel / PDF', '<span class="text-rose-400 font-bold">✖</span>', 'Standard', '<span class="text-rose-400 font-bold">✖</span>']
        ]);
        PricingPlan::create([
            'name' => 'Growth',
            'price' => 6000,
            'billing_cycle' => 'Yearly',
            'features_json' => ['Up to 20,000', '~0.30 Tk', '<span class="text-emerald-500 mr-2">✔</span> Fast', 'Excel / PDF', 'Basic', 'Standard', '<span class="text-rose-400 font-bold">✖</span>']
        ]);
        PricingPlan::create([
            'name' => 'Pro',
            'price' => 10000,
            'billing_cycle' => 'Yearly',
            'features_json' => ['Up to 50,000', '~0.20 Tk', '<span class="text-emerald-500 mr-2">✔</span> Bulk Optimized', 'Advanced Report', '<span class="text-purple-700 font-semibold">Advanced</span>', '<span class="text-indigo-700 font-medium">Priority</span>', '<span class="text-rose-400 font-bold">✖</span>']
        ]);
        PricingPlan::create([
            'name' => 'Enterprise',
            'price' => 15000,
            'billing_cycle' => 'Yearly',
            'features_json' => ['Up to 100,000', '~0.15 Tk', '<span class="text-emerald-500 mr-2">✔</span> Ultra Fast', 'Advanced Report', '<span class="text-purple-700 font-semibold">Advanced</span>', '<span class="text-rose-600 font-bold">Dedicated</span>', '<span class="text-emerald-500 mr-2">✔</span> Yes']
        ]);

        Faq::create([
            'question' => 'What type of scanners do I need?',
            'answer' => 'Any standard ADF (Automatic Document Feeder) scanner works. Even mobile phone cameras are supported!'
        ]);
        Faq::create([
            'question' => 'Do you provide the OMR sheet templates?',
            'answer' => 'Yes, we provide over 50 customizable templates for free in the admin portal.'
        ]);

        Setting::create(['key' => 'hero_title', 'value' => 'The Next Generation of Optical Mark Recognition']);
    }
}
