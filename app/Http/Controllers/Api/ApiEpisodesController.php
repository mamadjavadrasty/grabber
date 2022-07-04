<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiEpisodeRequest;
use App\Http\Resources\EpisodeResource;
use App\Models\Episode;
use Illuminate\Http\Request;

class ApiEpisodesController extends Controller
{

    public function index()
    {
        return EpisodeResource::collection(Episode::with('podcast','podcaster','category')->paginate(100));
    }

    public function indexCollectionId(ApiEpisodeRequest $request)
    {
        $episodes = Episode::with('podcast','podcaster','category')->where('collection_id',$request->collectionId)->get();

        return EpisodeResource::collection($episodes);
    }

    public function show(ApiEpisodeRequest $request)
    {
        $episode = Episode::where('track_id',$request->trackId)->firstOrFail();
        return new EpisodeResource($episode);
    }
}
