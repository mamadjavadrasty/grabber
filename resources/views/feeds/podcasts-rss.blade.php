<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0"  xmlns:cc="http://web.resource.org/cc/" xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" xmlns:media="http://search.yahoo.com/mrss/" xmlns:content="http://purl.org/rss/1.0/modules/content/"  xmlns:podcast="https://podcastindex.org/namespace/1.0"  xmlns:googleplay="http://www.google.com/schemas/play-podcasts/1.0" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
    <channel>
        <title>
            {{ $podcast->collection_name}}
        </title>
        <pubDate>{{ $podcast->release_date }}</pubDate>
        <language>en</language>
        <link>
            {{request()->url()}}
        </link>
            <itunes:wrapper_type> {{$podcast->wrapper_type}}</itunes:wrapper_type>
            <itunes:kind> {{$podcast->kind}}</itunes:kind>
            <itunes:artist_id> {{$podcast->artist_id}}</itunes:artist_id>
            <itunes:collection_id> {{$podcast->collection_id}}</itunes:collection_id>
            <itunes:track_id> {{$podcast->track_id}}</itunes:track_id>
            <itunes:artist_name> {{$podcast->artist_name}}</itunes:artist_name>
            <itunes:collection_name> {{$podcast->collection_name}}</itunes:collection_name>
            <itunes:track_name> {{$podcast->track_name}}</itunes:track_name>
            <itunes:collection_censored_name> {{$podcast->collection_censored_name}}</itunes:collection_censored_name>
            <itunes:track_censored_name> {{$podcast->track_censored_name}}</itunes:track_censored_name>
            <itunes:artist_view_url> {{$podcast->artist_view_url}}</itunes:artist_view_url>
            <itunes:collection_view_url> {{$podcast->collection_view_url}}</itunes:collection_view_url>
            <itunes:feed_url> {{$podcast->feed_url}}</itunes:feed_url>
            <itunes:track_view_url> {{$podcast->track_view_url}}</itunes:track_view_url>
            <itunes:artwork_url30> {{$podcast->artwork_url30}}</itunes:artwork_url30>
            <itunes:artwork_url100> {{$podcast->artwork_url100}}</itunes:artwork_url100>
            <itunes:track_rental_price> {{$podcast->track_rental_price}}</itunes:track_rental_price>
            <itunes:track_hd_price> {{$podcast->track_hd_price}}</itunes:track_hd_price>
            <itunes:track_hd_rental_price> {{$podcast->track_hd_rental_price}}</itunes:track_hd_rental_price>
            <itunes:release_date> {{$podcast->release_date}}</itunes:release_date>
            <itunes:collection_explicitness> {{$podcast->collection_explicitness}}</itunes:collection_explicitness>
            <itunes:track_explicitness> {{$podcast->track_explicitness}}</itunes:track_explicitness>
            <itunes:track_count> {{$podcast->track_count}}</itunes:track_count>
            <itunes:country> {{$podcast->country}}</itunes:country>
            <itunes:currency> {{$podcast->currency}}</itunes:currency>
            <itunes:primary_genre_name> {{$podcast->primary_genre_name}}</itunes:primary_genre_name>
            <itunes:content_advisory_rating> {{$podcast->content_advisory_rating}}</itunes:content_advisory_rating>
            <itunes:artwork_url_600> {{$podcast->artwork_url_600}}</itunes:artwork_url_600>
            <itunes:genre_ids> {{$podcast->collection_name}}</itunes:genre_ids>
            <itunes:genres> {{$podcast->genre_ids}}</itunes:genres>
            <itunes:category_id > {{$podcast->category_id}}</itunes:category_id >
            <itunes:podcaster_id > {{$podcast->podcaster_id}}</itunes:podcaster_id >
            @foreach ($podcast->episodes as $episode)
        <item>
            <itunes:artwork_url_160>{{ $episode->artwork_url_160 }}</itunes:artwork_url_160>
            <itunes:episode_file_extension>{{ $episode->episode_file_extension }}</itunes:episode_file_extension>
            <itunes:episode_content_type>{{ $episode->episode_content_type }}</itunes:episode_content_type>
            <itunes:artwork_url_60>{{ $episode->artwork_url_60 }}</itunes:artwork_url_60>
            <itunes:artist_view_url>{{ $episode->artist_view_url }}</itunes:artist_view_url>
            <itunes:content_advisory_rating>{{ $episode->content_advisory_rating }}</itunes:content_advisory_rating>
            <itunes:track_view_url>{{ $episode->track_view_url }}</itunes:track_view_url>
            <itunes:artwork_url_600>{{ $episode->artwork_url_600 }}</itunes:artwork_url_600>
            <itunes:preview_url>{{ $episode->preview_url }}</itunes:preview_url>
            <itunes:track_time_millis>{{ $episode->track_time_millis }}</itunes:track_time_millis>
            <itunes:collection_view_url>{{ $episode->collection_view_url }}</itunes:collection_view_url>
            <itunes:episode_url>{{ $episode->episode_url }}</itunes:episode_url>
            <itunes:artist_ids>{{ $episode->artist_ids }}</itunes:artist_ids>
            <itunes:closed_captioning>{{ $episode->closed_captioning }}</itunes:closed_captioning>
            <itunes:release_date>{{ $episode->release_date }}</itunes:release_date>
            <itunes:track_id>{{ $episode->track_id }}</itunes:track_id>
            <itunes:track_name>{{ $episode->track_name }}</itunes:track_name>
            <itunes:short_description>{{ $episode->short_description }}</itunes:short_description>
            <itunes:feed_url>{{ $episode->feed_url }}</itunes:feed_url>
            <itunes:collection_id>{{ $episode->collection_id }}</itunes:collection_id>
            <itunes:collection_name>{{ $episode->collection_name }}</itunes:collection_name>
            <itunes:kind>{{ $episode->kind }}</itunes:kind>
            <itunes:wrapper_type>{{ $episode->wrapper_type }}</itunes:wrapper_type>
            <itunes:country>{{ $episode->country }}</itunes:country>
            <itunes:description>{{ $episode->description }}</itunes:description>
            <itunes:genres>{{ $episode->genres }}</itunes:genres>
            <itunes:episode_guid>{{ $episode->episode_guid }}</itunes:episode_guid>
        </item>
        @endforeach
    </channel>
</rss>
