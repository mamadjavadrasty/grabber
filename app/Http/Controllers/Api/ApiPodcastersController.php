<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiPodcasterRequest;
use App\Http\Resources\PodcastEpisodesResource;
use App\Http\Resources\PodcasterResource;
use App\Models\Podcaster;
use Illuminate\Http\Request;

class ApiPodcastersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $podcasters = Podcaster::with('podcasts','episodes')->paginate(100);
        return PodcasterResource::collection($podcasters);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ApiPodcasterRequest $request)
    {
        return new PodcasterResource(Podcaster::findOrFail($request->id));
    }

}
