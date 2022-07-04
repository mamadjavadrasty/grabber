<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    Protected $primaryKey = "id";

    protected $fillable = [
        "wrapper_type" ,
        "kind" ,
        "artist_id" ,
        "collection_id" ,
        "track_id" ,
        "artist_name" ,
        "collection_name" ,
        "track_name" ,
        "collection_censored_name" ,
        "track_censored_name" ,
        "artist_view_url" ,
        "collection_view_url" ,
        "feed_url" ,
        "track_view_url" ,
        "artwork_url30" ,
        "artwork_url60" ,
        "artwork_url100" ,
        "collection_price" ,
        "track_price" ,
        "track_rental_price" ,
        "collection_hd_price" ,
        "track_hd_price" ,
        "track_hd_rental_price" ,
        "release_date" ,
        "collection_explicitness" ,
        "track_explicitness" ,
        "track_count" ,
        "country" ,
        "currency" ,
        "primary_genre_name" ,
        "content_advisory_rating" ,
        "artwork_url_600" ,
        "genre_ids" ,
        "genres" ,
        'artwork_url_3000',
        "podcaster_id" ,
        'uuid'
    ];

    use HasFactory;

    public function podcaster()
    {
        return $this->belongsTo(Podcaster::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class,'podcast_category');
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
