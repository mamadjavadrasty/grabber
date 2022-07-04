<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiNewPodcastRequest;
use App\Http\Resources\PodcastResource;
use App\Jobs\RequestCreateData;
use App\Models\Podcast;
use Illuminate\Http\Request;


class ApiNewPodcastController extends Controller
{
    public function newPodcastCreate(ApiNewPodcastRequest $request)
    {

        RequestCreateData::dispatch($request->collectionId)->onQueue('high')->onConnection('sync');
        $podcast = Podcast::where('collection_id',$request->collectionId)->firstOrFail();
        return new PodcastResource($podcast);
    }
    public function newPodcastCreateQueue(ApiNewPodcastRequest $request)
    {
        RequestCreateData::dispatch($request->collectionId)->onQueue('high');

        return response()->json(['message'=>'the podcast added to queue successfuly']);
    }
}
