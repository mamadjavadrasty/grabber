<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PodcastEpisodesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'wrapper_type'=>$this->wrapper_type,
            'kind'=>$this->kind,
            'artist_id'=>$this->artist_id,
            'collection_id'=>$this->collection_id,
            'track_id'=>$this->track_id,
            'artist_name'=>$this->artist_name,
            'collection_name'=>$this->collection_name,
            'track_name'=>$this->track_name,
            'collection_censored_name'=>$this->collection_censored_name,
            'track_censored_name'=>$this->track_censored_name,
            'artist_view_url'=>$this->artist_view_url,
            'collection_view_url'=>$this->collection_view_url,
            'feed_url'=>$this->feed_url,
            'track_view_url'=>$this->track_view_url,
            'artwork_url30'=>$this->artwork_url30,
            'artwork_url60'=>$this->artwork_url60,
            'artwork_url100'=>$this->artwork_url100,
            'collection_price'=>$this->collection_price,
            'track_price'=>$this->track_price,
            'track_rental_price'=>$this->track_rental_price,
            'collection_hd_price'=>$this->collection_hd_price,
            'track_hd_price'=>$this->track_hd_price,
            'track_hd_rental_price'=>$this->track_hd_rental_price,
            'release_date'=>$this->release_date,
            'collection_explicitness'=>$this->collection_explicitness,
            'track_explicitness'=>$this->track_explicitness,
            'track_count'=>$this->track_count,
            'country'=>$this->country,
            'currency'=>$this->currency,
            'primary_genre_name'=>$this->primary_genre_name,
            'content_advisory_rating'=>$this->content_advisory_rating,
            'artwork_url_600'=>$this->artwork_url_600,
            'genre_ids'=>$this->genre_ids,
            'genres'=>$this->genres,
            'category_id'=>$this->category_id,
            'podcaster_id'=>$this->podcaster_id,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
            'episodes'=>EpisodeResource::collection($this->whenLoaded('episodes')),
        ];
    }
}
