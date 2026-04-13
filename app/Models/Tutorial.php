<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'youtube_url',
        'description',
        'is_featured',
        'sort_order'
    ];

    // Helper to get embed URL from standard Youtube URL
    public function getEmbedUrlAttribute()
    {
        $url = $this->youtube_url;
        
        // Extract YouTube ID using regex
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?|shorts)/|.*[?&]v=)|youtu\.be/)([^"&?/\s]{11})%i', $url, $match);
        
        if (isset($match[1])) {
            return "https://www.youtube.com/embed/" . $match[1];
        }
        
        return $url;
    }
}
