<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Episode;
use App\Models\Podcast;
use App\Models\Podcaster;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\DatabaseJob;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $podcasts_count = Podcast::count();
        $episodes_count = Episode::count();
        $categories_count = Category::count();
        $podcasters_count = Podcaster::count();
        $latest_fetch_podcast = Podcast::latest()->first();
        $queuePodcast = DB::table('jobs')->count();
        return view('admin.dashboard',compact('podcasts_count','episodes_count','categories_count','podcasters_count','latest_fetch_podcast','queuePodcast'));
    }
}
