<?php

namespace App\Service;

use App\Models\Podcast;
use Illuminate\Support\Str;


class PodcastService {

    public function updateOrCreate($podcast,$podcasterId)
    {


       $genre_ids_json = isset($podcast['genreIds']) ? json_encode($podcast['genreIds']) : null;
       $genres_json = json_encode($podcast['genres']);
       $podcast = Podcast::updateOrCreate(
           ['track_name'=>$podcast['trackName']],
           [
            'wrapper_type'=>$podcast['wrapperType'],
            'kind'=>$podcast['kind'],
            'artist_id'=>isset($podcast['artistId']) ? $podcast['artistId'] : null,
            'collection_id'=>isset($podcast['collectionId']) ? $podcast['collectionId'] : null,
            'artist_name'=>isset($podcast['artistName']) ? $podcast['artistName'] : null,
            'collection_name'=>$podcast['collectionName'],
            'track_name'=>$podcast['trackName'],
            'collection_censored_name'=>$podcast['collectionCensoredName'],
            'track_censored_name'=>$podcast['trackCensoredName'],
            'artist_view_url'=>isset($podcast['artistViewUrl']) ? $podcast['artistViewUrl'] : null,
            'collection_view_url'=>isset($podcast['collectionViewUrl']) ? $podcast['collectionViewUrl'] : null,
            'feed_url'=>isset($podcast['feedUrl']) ? $podcast['feedUrl'] : null,
            'track_view_url'=>isset($podcast['trackViewUrl']) ? $podcast['trackViewUrl'] : null,
            'artwork_url30'=>isset($podcast['artworkUrl30']) ? $podcast['artworkUrl30'] : null,
            'artwork_url60'=>isset($podcast['artworkUrl60']) ? $podcast['artworkUrl60'] : null,
            'artwork_url100'=>isset($podcast['artworkUrl100']) ? $podcast['artworkUrl100'] : null,
            'artwork_url_3000'=>isset($podcast['artwork_url_3000']) ? $podcast['artwork_url_3000'] : null,
            'collection_price'=>isset($podcast['collectionPrice']) ? $podcast['collectionPrice'] : 0,
            'primary_genre_name'=>isset($podcast['primaryGenreName']) ? $podcast['primaryGenreName'] : null,
            'track_price'=>isset($podcast['trackPrice']) ? $podcast['trackPrice'] : 0,
            'track_rental_price'=>isset($podcast['trackRentalPrice']) ? $podcast['trackRentalPrice'] : 0,
            'collection_hd_price'=>isset($podcast['collectionHdPrice']) ? $podcast['collectionHdPrice'] : 0,
            'track_hd_price'=>isset($podcast['trackHdPrice']) ? $podcast['trackHdPrice'] : 0,
            'track_hd_rental_price'=>isset($podcast['trackHdRentalPrice']) ? $podcast['trackHdRentalPrice'] : 0,
            'release_date'=>date('Y-m-d h:i:s', strtotime($podcast['releaseDate'])),
            'collection_explicitness'=>isset($podcast['collectionExplicitness']) ? $podcast['collectionExplicitness'] : null,
            'track_explicitness'=>isset($podcast['trackExplicitness']) ? $podcast['trackExplicitness'] : null,
            'track_count'=>isset($podcast['trackCount']) ? $podcast['trackCount'] : 0,
            'country'=>isset($podcast['country']) ? $podcast['country'] : null,
            'currency'=>isset($podcast['currency']) ? $podcast['currency'] : null,
            'content_advisory_rating'=>isset($podcast['contentAdvisoryRating']) ? $podcast['contentAdvisoryRating'] : null ,
            'artwork_url_600'=>isset($podcast['artworkUrl600']) ? $podcast['artworkUrl600'] : null,
            'genre_ids'=>$genre_ids_json,
            'genres'=>$genres_json,
            'uuid'=>Str::uuid()->toString(),
            'podcaster_id'=>$podcasterId,
        ]);

        return $podcast;
    }

}
