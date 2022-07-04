<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0"  xmlns:cc="http://web.resource.org/cc/" xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" xmlns:media="http://search.yahoo.com/mrss/" xmlns:content="http://purl.org/rss/1.0/modules/content/"  xmlns:podcast="https://podcastindex.org/namespace/1.0"  xmlns:googleplay="http://www.google.com/schemas/play-podcasts/1.0" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
    <channel>
        <title>
            {{ $category->name}}
        </title>
        <pubDate> {{ $category->created_at }} </pubDate>
        <language>en</language>
        <link>
            {{request()->url()}}
        </link>
            <itunes:id> {{$category->id}}</itunes:id>
            <itunes:name> {{$category->name}}</itunes:name>
            <itunes:genre_id> {{$category->genre_id}}</itunes:genre_id>
            <itunes:category_id> {{$category->category_id}}</itunes:category_id>
    </channel>
</rss>
