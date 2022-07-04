<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\PodcasterRequest;
use App\Models\Podcast;
use App\Models\Podcaster;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Str;

class PodcasterController extends Controller
{
    public function index(Request $request)
    {
        $filter_by = $request->filter_by;
        if ($filter_by == null) {
            $podcasters = Podcaster::latest()->paginate(10)->withQueryString();
            return view('admin.podcaster.index' , compact('podcasters'));
        }

        $podcasters = Podcaster::where($filter_by , 'LIKE' , '%' . $request->$filter_by . '%')
        ->latest()
        ->paginate(10)
        ->withQueryString();

        $request->flash();
        return view('admin.podcaster.index' , compact('podcasters'));
    }

    public function create()
    {
        return view('admin.podcaster.create');
    }

    public function store(PodcasterRequest $request)
    {
        $inputs = $request->all();
        $inputs['isset_artist_id'] = $inputs['artist_id'] ? 1 : 0;
        $inputs['uuid'] = Str::uuid()->toString();
        $podcaster = Podcaster::create($inputs);

        return redirect()->route('admin.podcaster.index')->with('success','podcaster created successfully');
    }


    public function show($id)
    {
        $podcaster = Podcaster::findOrFail($id);
        return view('admin.podcaster.edit',compact('podcaster'));
    }

    public function showPodcasts($id)
    {
        $podcaster = Podcaster::findOrFail($id);
        $getWay = $podcaster->name . ' Podcaster';
        $podcasts = Podcast::where('podcaster_id', $id)->paginate(10);
        return view('admin.podcast.index' ,compact('podcasts' , 'getWay'));
    }

    public function update($id,Request $request)
    {
        Podcaster::findOrFail($id)->update($request->all());
        return back();
    }
}
