<?php

namespace App\Http\Controllers\Api;


use App\Http\Requests\Api\ApiPodcastRequest;
use App\Http\Requests\Api\ApiPodcastShowRequest;
use App\Http\Resources\PodcastResource;
use App\Models\Podcast;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PodcastEpisodesResource;
use App\Models\Podcaster;

class ApiPodcastsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ApiPodcastRequest $request)
    {
        $q = Podcast::query();

        if (!is_null($request->last_date)) {
            $q->whereDate('created_at','>=',$request->last_date);
        }

        $podcasts = $q->with('podcaster','categories','episodes')->paginate($request->input('limit',100),['*'],'offset');
        return PodcastResource::collection($podcasts);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ApiPodcastShowRequest $request)
    {
        $podcast = Podcast::where('collection_id',$request->collectionId)->firstOrFail();
        return new PodcastResource($podcast);
    }

    public function podcastEpisodes(ApiPodcastShowRequest $request){
        $podcast = Podcast::with('episodes')->where('collection_id',$request->collectionId)->firstOrFail();
        return new PodcastEpisodesResource($podcast);
    }
}
