<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'genre_id'=>$this->genre_id,
            'name'=>$this->name,
            'category_id'=>$this->category_id,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
            // 'Podcasts'=>PodcastResource::collection($this->whenLoaded('Podcasts')),
           // 'category'=>new CategoryResource($this->whenLoaded('category')),
        ];
    }
}
