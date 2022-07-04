<?php

namespace App\Service;

use App\Models\Episode;
use Illuminate\Support\Facades\Http;

class EpisodeService {
    public function updateOrCreate($episodes,$podcastId,$podcasterId)
    {

        if ($episodes[0]['feedUrl']){
            $episodes = $episodes[0];
            $results = $this->xmlToArray($episodes['feedUrl']);

            if (!is_null($results)){
                foreach($results as $result){

                    $episode_artist_ids = isset($episodes['artistId']) ? [$episodes['artistId']] : null;

                    Episode::updateOrCreate(

                        ['track_name'=>$result['track_name']],
                        [
                            'episode_file_extension'=>$result['episode_file_extension'],
                            'episode_content_type'=>$result['episode_content_type'],
                            'artwork_url_60'=>isset($episodes['artworkUrl60']) ? $episodes['artworkUrl60'] : null,
                            'artist_view_url'=>isset($episodes['collectionViewUrl']) ? $episodes['collectionViewUrl'] : null,
                            'content_advisory_rating'=>isset($episodes['contentAdvisoryRating']) ? $episodes['contentAdvisoryRating'] : null,
                            'artwork_url_600'=>isset($episodes['artworkUrl600']) ? $episodes['artworkUrl600'] : null,
                            'preview_url'=>$result['preview_url'],
                            'collection_view_url'=>isset($episodes['collectionViewUrl']) ? $episodes['collectionViewUrl'] : null,
                            'episode_url'=>$result['episode_url'],
                            'artist_ids'=>json_encode($episode_artist_ids),
                            'release_date'=>$result['release_date'],
                            'track_name'=>$result['track_name'],
                            'feed_url'=>isset($episodes['feedUrl']) ? $episodes['feedUrl']: null ,
                            'collection_id'=>isset($episodes['collectionId']) ? $episodes['collectionId'] : null,
                            'collection_name'=>isset($episodes['collectionName']) ? $episodes['collectionName'] : null,
                            'kind'=>'podcast-episode',
                            'wrapper_type'=>'podcastEpisode',
                            'country'=>isset($episodes['country']) ? $episodes['country'] : null,
                            'description'=>isset($result['description']) ? $result['description'] : null,
                            'episode_guid'=>$result['episode_guid'],
                            'podcast_id'=>$podcastId,
                            'podcaster_id'=>$podcasterId,
                        ]);
                }
            }else{
                $this->EpisodeApiCreate($episodes,$podcastId,$podcasterId);
            }

        }else{
            $this->EpisodeApiCreate($episodes,$podcastId,$podcasterId);
        }



    }


    public function EpisodeApiCreate($episodes,$podcastId,$podcasterId)
    {
        unset($episodes[0]);
        foreach($episodes as $episode){

            $episode_genres_json = json_encode($episode['genres']);
            $episode_artist_ids = json_encode($episode['artistIds']);
            Episode::updateOrCreate(
                ['track_id'=>$episode['trackId']],
                [
                    'artwork_url_160'=>$episode['artworkUrl160'],
                    'episode_file_extension'=>$episode['episodeFileExtension'],
                    'episode_content_type'=>$episode['episodeContentType'],
                    'artwork_url_60'=>$episode['artworkUrl60'],
                    'artist_view_url'=>$episode['collectionViewUrl'],
                    'content_advisory_rating'=>isset($episode['contentAdvisoryRating']) ? $episode['contentAdvisoryRating'] : null,
                    'track_view_url'=>$episode['trackViewUrl'],
                    'artwork_url_600'=>$episode['artworkUrl600'],
                    'preview_url'=>$episode['previewUrl'],
                    'track_time_millis'=>isset($episode['trackTimeMillis']) ? $episode['trackTimeMillis'] : null ,
                    'collection_view_url'=>$episode['collectionViewUrl'],
                    'episode_url'=>$episode['episodeUrl'],
                    'artist_ids'=>$episode_artist_ids,
                    'closed_captioning'=>$episode['closedCaptioning'],
                    'release_date'=>date("Y-m-d h:i:s", strtotime($episode['releaseDate'])),
                    'track_id'=>$episode['trackId'],
                    'track_name'=>$episode['trackName'],
                    'short_description'=>$episode['shortDescription'],
                    'feed_url'=>isset($episode['feedUrl']) ? $episode['feedUrl'] : null ,
                    'collection_id'=>$episode['collectionId'],
                    'collection_name'=>$episode['collectionName'],
                    'kind'=>$episode['kind'],
                    'wrapper_type'=>$episode['wrapperType'],
                    'country'=>$episode['country'],
                    'description'=>$episode['description'],
                    'genres'=>$episode_genres_json,
                    'episode_guid'=>$episode['episodeGuid'],
                    'podcast_id'=>$podcastId,
                    'podcaster_id'=>$podcasterId,
                ]);
        }
    }

    public function xmlToArray($feedUrl)
    {
        $request = Http::get($feedUrl);

        $xml = simplexml_load_string($request->body(),'SimpleXMLElement',LIBXML_NOCDATA);
        $xmlToJson = json_encode($xml,true);
        $xmlToArray = json_decode($xmlToJson,true);

        $episodes = $xmlToArray['channel']['item'];


        foreach ($episodes as $item){

            $description = isset($item['description']) ? json_encode($item['description']): null;
            $type = explode('/',$item['enclosure']['@attributes']['type']);
            $episode['episode_guid'] = $item['guid'];
            $episode['track_name'] = $item['title'];
            $episode['description'] = $description;
            $episode['release_date'] = date("Y-m-d h:i:s", strtotime($item['pubDate']));
            $episode['episode_file_extension'] = 'mp3';
            $episode['episode_content_type'] = $type[0];
            $episode['preview_url'] = $item['enclosure']['@attributes']['url'];
            $episode['episode_url'] = $item['enclosure']['@attributes']['url'];

            $results[] = $episode;
        }

        return $results;

    }
}
