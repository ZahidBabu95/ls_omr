<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingPlan;
use Illuminate\Http\Request;

class PricingPlanController extends Controller
{
    public function index()
    {
        $plans = PricingPlan::all();
        return view('admin.pricing.index', compact('plans'));
    }

    public function create()
    {
        return view('admin.pricing.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'billing_cycle' => 'required|string|max:255',
            'features' => 'nullable|array',
            'features.*' => 'nullable|string|max:255',
        ]);

        // Filter out empty features
        $features = array_filter($validated['features'] ?? []);

        PricingPlan::create([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'billing_cycle' => $validated['billing_cycle'],
            'features_json' => array_values($features),
        ]);

        return redirect()->route('admin.pricing.index')->with('success', 'Pricing Plan created successfully.');
    }

    public function edit(PricingPlan $pricing)
    {
        return view('admin.pricing.edit', compact('pricing'));
    }

    public function update(Request $request, PricingPlan $pricing)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'billing_cycle' => 'required|string|max:255',
            'features' => 'nullable|array',
            'features.*' => 'nullable|string|max:255',
        ]);

        $features = array_filter($validated['features'] ?? []);

        $pricing->update([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'billing_cycle' => $validated['billing_cycle'],
            'features_json' => array_values($features),
        ]);

        return redirect()->route('admin.pricing.index')->with('success', 'Pricing Plan updated successfully.');
    }

    public function destroy(PricingPlan $pricing)
    {
        $pricing->delete();
        return redirect()->route('admin.pricing.index')->with('success', 'Pricing Plan deleted successfully.');
    }
}
