<?php

namespace App\Service;

use App\Models\Category;
use App\Models\PodcastCategory;
use Illuminate\Support\Str;

class CategoryService{
    public function updateOrCreate($podcast)
    {
        $category_names = json_decode($podcast->genres);
        $category_ids = json_decode($podcast->genre_ids);
        foreach ($category_ids as $key => $category_id) {
            $category = Category::updateOrCreate(
                ['genre_id' => $category_id ],
                [
                    'name' => $category_names[$key],
                    'uuid'=>Str::uuid()->toString(),
                ]
            );
            PodcastCategory::updateOrCreate(['podcast_id'=>$podcast->id , 'category_id' => $category->id]);
        }
    }
}
