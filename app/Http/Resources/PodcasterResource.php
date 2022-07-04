<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PodcasterResource extends JsonResource
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
            'artist_type'=>$this->artist_type,
            'artist_name'=>$this->artist_name,
            'artist_link_url'=>$this->artist_link_url,
            'artist_id'=>$this->artist_id,
            'primary_genre_name'=>$this->primary_genre_name,
            'primary_genre_id'=>$this->primary_genre_id,
            "isset_artist_id"=>$this->isset_artist_id,
            'artwork_url30'=>$this->artwork_url30,
            'artwork_url60'=>$this->artwork_url60,
            'artwork_url100'=>$this->artwork_url100,
            'artwork_url_600'=>$this->artwork_url_600,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
            // 'podcasts'=>PodcastResource::collection($this->whenLoaded('podcasts')),
            // 'episodes'=>EpisodeResource::collection($this->whenLoaded('episodes')),
        ];
    }
}
