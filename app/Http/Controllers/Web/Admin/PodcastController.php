<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\PodcastIndexRequest;
use App\Http\Requests\Web\Admin\PodcastStoreRequest;
use App\Http\Requests\Web\Admin\UpdatePodcastRequest;
use App\Models\Category;
use App\Models\Podcast;
use App\Models\PodcastCategory;
use App\Models\Podcaster;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PodcastController extends Controller
{
    public function index(PodcastIndexRequest $request)
    {
        $q = Podcast::query();

        if ($request->track_name) {
            $q->where('track_name','LIKE' , '%' . $request->track_name . '%');
        }

        if ($request->artist_name) {
            $q->where('artist_name','LIKE' , '%' . $request->artist_name . '%');
        }

        if ($request->category_id) {
            $q->whereHas('categories',function(Builder $query)use($request){
                $query->where('categories.id','=',$request->category_id);
            });
        }

        if ($request->track_id) {
            $q->where('track_id','LIKE' , '%' . $request->track_id . '%');
        }

        if ($request->start_fetch_date) {
            $q->whereDate('created_at','>', $request->start_fetch_date);
        }

        if ($request->end_fetch_date) {
            $q->whereDate('created_at','<' , $request->end_fetch_date);
        }

        if ($request->start_release_date) {
            $q->whereDate('release_date', '>',$request->start_release_date);
        }

        if ($request->end_release_date) {
            $q->whereDate('release_date', '<',$request->end_release_date);
        }

        $podcasts = $q->orderByDesc('created_at')->paginate(20)->withQueryString();
        $request->flash();
        $categories = Category::all();
        return view('admin.podcast.index' , compact('podcasts','categories'));
    }

    public function showDetails($id)
    {
        $podcast = Podcast::findOrFail($id);
        return view('admin.podcast.edit' , compact('podcast'));
    }

    public function create()
    {
        $categories = Category::all();
        $podcasters = Podcaster::all();
        return view('admin.podcast.create',compact('categories','podcasters'));
    }

    public function store(PodcastStoreRequest $request)
    {
        $inputs = $request->all();
        $inputs['uuid'] = Str::uuid()->toString();
        $podcast = Podcast::create($inputs);

        foreach ($inputs['categories'] as $catId){
            $category = Category::find($catId);
            if (!is_null($catId)){
                PodcastCategory::create(['podcast_id'=>$podcast->id,'category_id'=>$catId]);
            }

        }



        return redirect()->route('admin.podcast.index')->with('success','podcast created successfully');
    }

    public function show($id)
    {
        $categories = Category::all();
        $podcast = Podcast::findOrFail($id);
        return view('admin.podcast.edit' , compact('podcast', 'categories'));
    }

    public function update($id, Request $request)
    {
        Podcast::findOrFail($id)->update($request->all());
        if (!is_null($request->categories)) {
            PodcastCategory::where('podcast_id',$id)->delete();
            foreach ($request->categories as $categoryId) {
                PodcastCategory::updateOrCreate(['podcast_id'=>$id,'category_id'=> $categoryId ]);
            }
        } else {
            PodcastCategory::where('podcast_id',$id)->delete();
        }
        return back();
    }
}
