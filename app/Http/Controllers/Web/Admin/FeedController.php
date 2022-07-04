<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Podcast;
use App\Models\Podcaster;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function podcast($uuid)
    {
        $podcast = Podcast::with('episodes')->where('uuid',$uuid)->firstOrFail();
        return response()->view('feeds.podcasts-rss',compact('podcast'))->header('Content-Type', 'application/xml');
    }

    public function podcaster($uuid)
    {
        $podcaster = Podcaster::where('uuid',$uuid)->firstOrFail();
        return response()->view('feeds.podcasters-rss',compact('podcaster'))->header('Content-Type', 'application/xml');
    }

    public function category($uuid)
    {
        $category = Category::where('uuid',$uuid)->firstOrFail();
        return response()->view('feeds.categories-rss',compact('category'))->header('Content-Type', 'application/xml');
    }
}
