<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{
    protected $fillable = ['name', 'price', 'billing_cycle', 'features_json'];

    protected function casts(): array
    {
        return [
            'features_json' => 'array',
        ];
    }
}
