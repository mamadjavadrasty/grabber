<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\SyncPodcast;
use Illuminate\Http\Request;

class SyncPodcastController extends Controller
{
    public function index()
    {
      $syncPodcasts = SyncPodcast::orderByDesc('created_at')->get();
       return view('admin.podcast.sync-podcast',compact('syncPodcasts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'collection_id'=>'required|unique:sync_podcasts,collection_id'
        ]);

        $collection_id = $request->collection_id;
        SyncPodcast::create(['collection_id' => $collection_id]);

        return back()->with('success','Successfully added to list');
    }

    public function destroy($id)
    {
        SyncPodcast::find($id)->delete();

        return back()->with('success','Record successfully deleted');
    }
}
