<?php

namespace App\Service;

use App\Models\Podcaster;
use Illuminate\Support\Str;

class PodcasterService {

    public function updateOrCreate($podcaster)
    {
        if (!$podcaster['resultCount'] >= 1) {
            return false;
        }

        $podcaster = Podcaster::updateOrCreate(
            ['artist_id'=>$podcaster['results'][0]['artistId']],
            [
                'wrapper_type'=>$podcaster['results'][0]['wrapperType'],
                'artist_type'=>$podcaster['results'][0]['artistType'],
                'artist_name'=>$podcaster['results'][0]['artistName'],
                'artist_link_url'=>$podcaster['results'][0]['artistLinkUrl'],
                'artist_id'=>$podcaster['results'][0]['artistId'],
                'primary_genre_name'=>isset($podcaster['results'][0]['primaryGenreName']) ? $podcaster['results'][0]['primaryGenreName'] : null,
                'primary_genre_id'=>isset($podcaster['results'][0]['primaryGenreId']) ? $podcaster['results'][0]['primaryGenreId'] : null,
                'isset_artist_id' => 1,
                'uuid'=>Str::uuid()->toString(),
            ]
        );
        return $podcaster;
    }

    public function updateOrCreateWithoutArtistId($artistName)
    {
        $podcaster = Podcaster::updateOrCreate([
            'artist_name' => $artistName,
            'isset_artist_id' => 0
        ]);

        return $podcaster;
    }

}
