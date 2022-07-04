<?php

namespace App\Service;

use Illuminate\Support\Facades\Http;

class FeedToArrayService
{
    public function feedToArray($feedUrl)
    {
        //get xml
        $request = Http::get($feedUrl);
        //xml to array
        $xml = new \SimpleXMLElement($request->body());
        $xmlToJson = json_encode($xml->xpath('channel'),true);
        $xmlToArray = json_decode($xmlToJson,true);

        foreach ($xmlToArray as $item){

            $explicit = $this->tagToArray($xml->xpath('channel/itunes:explicit'))[0] == 'yes' ? 'explicit' : 'cleaned';
            $primary_genre_name = $this->tagToArray($xml->xpath('channel/itunes:category/itunes:category')) ? $this->tagToArray($xml->xpath('channel/itunes:category/itunes:category'))[0]['@attributes']['text'] :
            $this->tagToArray($xml->xpath('channel/itunes:category'))[0]['@attributes']['text'];

            $genre_check = count($this->tagToArray($xml->xpath('channel/itunes:category'))) > 1 ? true : false;
            $genre_first = $this->tagToArray($xml->xpath('channel/itunes:category')) ? $this->tagToArray($xml->xpath('channel/itunes:category')) : 'Podcasts';
            $genre_first = $genre_check ? $this->tagToArray($xml->xpath('channel/itunes:category')) : $genre_first;
            $check_genre_first = isset($genre_first[0]['@attributes']['text']) ? $genre_first[0]['@attributes']['text'] : $genre_first;
            $genre_name_next = $this->tagToArray($xml->xpath('channel/itunes:category/itunes:category')) ? $this->tagToArray($xml->xpath('channel/itunes:category/itunes:category'))[0]['@attributes']['text'] : 'Podcasts';
            $genres = $genre_check ? [$genre_first[0]['@attributes']['text'],$genre_first[1]['@attributes']['text']] : [$check_genre_first,$genre_name_next];

            $image = isset($item['image']['url']) ? $item['image']['url'] : $this->tagToArray($xml->xpath('channel/itunes:image'))['@attributes']['href'];
            $date = isset($item['pubDate']) ? $item['pubDate'] : isset($item['lastBuildDate']) ? $item['lastBuildDate'] :date('Y-m-d h:i:s');

            $podcast['wrapperType'] = 'track';
            $podcast['kind'] = 'podcast';
            $podcast['artistName'] = $this->tagToArray($xml->xpath('channel/itunes:author'))[0];
            $podcast['collectionName'] = isset($item['image']['title']) ? $item['image']['title'] : $item['title'];
            $podcast['trackName'] = isset($item['image']['title']) ? $item['image']['title'] : $item['title'];
            $podcast['collectionCensoredName'] = isset($item['image']['title']) ? $item['image']['title'] : $item['title'];
            $podcast['trackCensoredName'] = isset($item['image']['title']) ? $item['image']['title'] : $item['title'];
            $podcast['artwork_url_3000'] = $image;
            $podcast['feedUrl'] = $feedUrl;
            $podcast['releaseDate'] = $date;
            $podcast['collectionExplicitness'] = $explicit;
            $podcast['trackExplicitness'] = $explicit;
            $podcast['primaryGenreName'] = $primary_genre_name;
            $podcast['contentAdvisoryRating'] = $this->tagToArray($xml->xpath('channel/itunes:explicit')) == 'yes' ? 'Explicit' : 'Clean';
            $podcast['genres'] = json_encode($genres);

            $podcasts[] = $podcast;
        }

        return $podcasts;
    }

    public function tagToArray($xml)
    {
        $xmlToJson = json_encode($xml);
        $jsonToArray = json_decode($xmlToJson,true);

        if (empty($jsonToArray)){
            return '';
        }

        if (isset($jsonToArray[0]['@attributes'])){
            return $jsonToArray;
        }

        return $jsonToArray[0];
    }
}
