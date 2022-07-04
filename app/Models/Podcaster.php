<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcaster extends Model
{
    use HasFactory;

    protected $fillable = [
        "wrapper_type",
        "artist_type" ,
        "artist_name" ,
        "artist_link_url" ,
        "artist_id" ,
        "primary_genre_name" ,
        "primary_genre_id" ,
        "isset_artist_id",
        'artwork_url30',
        'artwork_url60',
        'artwork_url100',
        'artwork_url_600',
        'uuid'
    ];

    public function podcasts()
    {
        return $this->hasMany(Podcast::class);
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
