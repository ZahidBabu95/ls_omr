<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientLogo extends Model
{
    protected $fillable = ['name', 'logo_path', 'website_url', 'order_index'];
}
