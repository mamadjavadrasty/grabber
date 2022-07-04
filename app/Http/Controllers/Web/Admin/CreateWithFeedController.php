<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\CreateWithFeedRequest;
use App\Jobs\CreateDataWithFeedJob;
use App\Models\Podcaster;
use Illuminate\Http\Request;

class CreateWithFeedController extends Controller
{
    public function index()
    {
        $podcasters = Podcaster::all();
        return view('admin.new-podcast-feed',compact('podcasters'));
    }

    public function create(CreateWithFeedRequest $request)
    {
       CreateDataWithFeedJob::dispatch($request->feed,$request->podcaster_id)->onQueue('high');

       return back()->with('success','Your request has been successfully submitted');
    }
}
