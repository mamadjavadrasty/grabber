<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = [
        "artwork_url_160" ,
        "episode_file_extension" ,
        "episode_content_type" ,
        "artwork_url_60" ,
        "artist_view_url" ,
        "content_advisory_rating" ,
        "track_view_url" ,
        "artwork_url_600" ,
        "preview_url" ,
        "track_time_millis" ,
        "collection_view_url" ,
        "episode_url" ,
        "artist_ids" ,
        "closed_captioning" ,
        "release_date" ,
        "track_name",
        "track_id" ,
        "short_description" ,
        "feed_url" ,
        "collection_id" ,
        "collection_name" ,
        "kind" ,
        "wrapper_type" ,
        "country" ,
        "description" ,
        "genres" ,
        "episode_guid" ,
        "podcast_id" ,
        "podcaster_id" ,
    ];

    public function podcast()
    {
        return $this->belongsTo(Podcast::class);
    }

    public function podcaster()
    {
        return $this->belongsTo(Podcaster::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
