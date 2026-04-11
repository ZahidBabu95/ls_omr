<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OmrTemplate extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image', 'order_index'];
}
