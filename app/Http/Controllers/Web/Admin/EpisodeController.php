<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\EpisodeRequest;
use App\Models\Category;
use App\Models\Episode;
use App\Models\Podcast;
use App\Models\Podcaster;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function show($id)
    {
        $episodes = Podcast::find($id)->episodes()->orderBy('release_date','desc')->paginate(20);
        return view('admin.episode.index' , compact('episodes'));
    }

    public function create()
    {
        $podcasts = Podcast::all();
        $podcasters = Podcaster::all();
        return view('admin.episode.create',compact('podcasts','podcasters'));
    }

    public function store(EpisodeRequest $request)
    {
        $inputs = $request->all();

        Episode::create($inputs);

        return back()->with('success','episode created success fully');
    }

    public function showDetails($episodeId)
    {
        $podcasts = Podcast::all(['id','track_name']);
        $podcasters = Podcaster::all();
        $episode = Episode::find($episodeId);
        return view('admin.episode.edit' , compact('episode' , 'podcasts' ,'podcasters'));
    }

    public function update($id,Request $request)
    {
        Episode::find($id)->update($request->all());
        return back();
    }
}
