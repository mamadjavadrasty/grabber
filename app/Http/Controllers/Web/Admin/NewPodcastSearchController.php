<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\RequestCreateData;
use Illuminate\Http\Request;

class NewPodcastSearchController extends Controller
{
    public function newPodcastShow()
    {
        return view('admin.new-podcast-search');
    }

    public function newPodcastShowDetails()
    {
        return view('admin.new-podcast-search-show');
    }

    public function newPodcastCreate($id)
    {
        RequestCreateData::dispatch($id)->onQueue('high');

        return redirect()->back()->with('success','Your request has been successfully submitted');
    }
}
