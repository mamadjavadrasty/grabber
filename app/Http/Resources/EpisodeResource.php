<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EpisodeResource extends JsonResource
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
            'artwork_url_160'=>$this->artwork_url_160,
            'episode_file_extension'=>$this->episode_file_extension,
            'episode_content_type'=>$this->episode_content_type,
            'artwork_url_60'=>$this->artwork_url_60,
            'artist_view_url'=>$this->artist_view_url,
            'content_advisory_rating'=>$this->content_advisory_rating,
            'track_view_url'=>$this->track_view_url,
            'artwork_url_600'=>$this->artwork_url_600,
            'preview_url'=>$this->preview_url,
            'track_time_millis'=>$this->track_time_millis,
            'collection_view_url'=>$this->collection_view_url,
            'episode_url'=>$this->episode_url,
            'artist_ids'=>$this->artist_ids,
            'closed_captioning'=>$this->closed_captioning,
            'release_date'=>$this->release_date,
            'track_id'=>$this->track_id,
            'track_name'=>$this->track_name,
            'short_description'=>$this->short_description,
            'feed_url'=>$this->feed_url,
            'collection_id'=>$this->collection_id,
            'collection_name'=>$this->collection_name,
            'kind'=>$this->kind,
            'wrapper_type'=>$this->wrapper_type,
            'country'=>$this->country,
            'description'=>$this->description,
            'genres'=>$this->genres,
            'episode_guid'=>$this->episode_guid,
            'podcast_id'=>$this->podcast_id,
            'podcaster_id'=>$this->podcaster_id,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
            'podcast'=>new PodcastResource($this->whenLoaded('podcast')),
            'podcaster'=> new PodcasterResource($this->whenLoaded('podcaster')),
          //  'category'=>new CategoryResource($this->whenLoaded('category')),
        ];
    }
}
