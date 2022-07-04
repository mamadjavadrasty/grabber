<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiSyncPodcastRequest;
use App\Models\SyncPodcast;
use Illuminate\Http\Request;

class ApiSyncPodcastsController extends Controller
{
    public function store(ApiSyncPodcastRequest $request)
    {
        $status = SyncPodcast::create(['collection_id'=>$request->collectionId]);
        return ($status ?
        response()->json(['message'=>'collectionId created successfully'],200) :
        response()->json(['message'=>'fail to add collectionId podcast'],200));
    }
}
