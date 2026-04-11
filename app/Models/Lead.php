<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = ['name', 'school', 'phone', 'email', 'is_contacted', 'is_demo_requested'];
}
