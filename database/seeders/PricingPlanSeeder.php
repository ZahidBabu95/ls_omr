<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PricingPlan;

class PricingPlanSeeder extends Seeder
{
    public function run()
    {
        PricingPlan::truncate();

        PricingPlan::create([
            'name' => 'Starter',
            'price' => 2500,
            'billing_cycle' => 'Yearly',
            'features_json' => [
                'Up to 5,000',
                '~0.50 Tk',
                '<span class="text-emerald-500 mr-2">✔</span> Basic',
                'Excel / PDF',
                '<span class="text-rose-400 font-bold">✖</span>',
                'Standard',
                '<span class="text-rose-400 font-bold">✖</span>'
            ]
        ]);

        PricingPlan::create([
            'name' => 'Growth',
            'price' => 6000,
            'billing_cycle' => 'Yearly',
            'features_json' => [
                'Up to 20,000',
                '~0.30 Tk',
                '<span class="text-emerald-500 mr-2">✔</span> Fast',
                'Excel / PDF',
                'Basic',
                'Standard',
                '<span class="text-rose-400 font-bold">✖</span>'
            ]
        ]);

        PricingPlan::create([
            'name' => 'Pro',
            'price' => 10000,
            'billing_cycle' => 'Yearly',
            'features_json' => [
                'Up to 50,000',
                '~0.20 Tk',
                '<span class="text-emerald-500 mr-2">✔</span> Bulk Optimized',
                'Advanced Report',
                '<span class="text-purple-700 font-semibold">Advanced</span>',
                '<span class="text-indigo-700 font-medium">Priority</span>',
                '<span class="text-rose-400 font-bold">✖</span>'
            ]
        ]);

        PricingPlan::create([
            'name' => 'Enterprise',
            'price' => 15000,
            'billing_cycle' => 'Yearly',
            'features_json' => [
                'Up to 100,000',
                '~0.15 Tk',
                '<span class="text-emerald-500 mr-2">✔</span> Ultra Fast',
                'Advanced Report',
                '<span class="text-purple-700 font-semibold">Advanced</span>',
                '<span class="text-rose-600 font-bold">Dedicated</span>',
                '<span class="text-emerald-500 mr-2">✔</span> Yes'
            ]
        ]);
    }
}
