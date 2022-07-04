<x-admin.layout-component>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 row layout-top-spacing">
                    <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Podcast Details</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <form action="{{ route('admin.episode.update' , ['id' => $episode->id ]) }}" method="post">@method('put') @csrf
                                        <table class="table table-bordered mb-4">
                                            <tbody>
                                                <tr>
                                                    <td>id</td>
                                                    <td>
                                                        <input id="t-text" type="number" class="form-control" value="{{ $episode->id }}" disabled>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artwork_url_160</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artwork_url_160" class="form-control" value="{{ $episode->artwork_url_160 }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>episode_file_extension</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="episode_file_extension" class="form-control" value="{{ $episode->episode_file_extension }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>episode_content_type</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="episode_content_type" class="form-control" value="{{ $episode->episode_content_type }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artwork_url_60</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artwork_url_60" class="form-control" value="{{ $episode->artwork_url_60 }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artist_view_url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artist_view_url" class="form-control" value="{{ $episode->artist_view_url }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>content_advisory_rating</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="content_advisory_rating" class="form-control" value="{{ $episode->content_advisory_rating }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_view_url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_view_url" class="form-control" value="{{ $episode->track_view_url }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artwork_url_600</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artwork_url_600" class="form-control" value="{{ $episode->artwork_url_600 }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>preview_url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="preview_url" class="form-control" value="{{ $episode->preview_url }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_time_millis</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_time_millis" class="form-control" value="{{ $episode->track_time_millis }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>collection_view_url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="collection_view_url" class="form-control" value="{{ $episode->collection_view_url }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>episode_url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="episode_url" class="form-control" value="{{ $episode->episode_url }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artist_ids</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artist_ids" class="form-control" value="{{ $episode->artist_ids }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>closed_captioning</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="closed_captioning" class="form-control" value="{{ $episode->closed_captioning }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>release_date</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="release_date" class="form-control" value="{{ $episode->release_date }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_id</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_id" class="form-control" value="{{ $episode->track_id }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>short_description</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="short_description" class="form-control" value="{{ $episode->short_description }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>feed_url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="feed_url" class="form-control" value="{{ $episode->feed_url }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>collection_id</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="collection_id" class="form-control" value="{{ $episode->collection_id }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>collection_name</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="collection_name" class="form-control" value="{{ $episode->collection_name }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>kind</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="kind" class="form-control" value="{{ $episode->kind }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>wrapper_type</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="wrapper_type" class="form-control" value="{{ $episode->wrapper_type }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>country</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="country" class="form-control" value="{{ $episode->country }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>description</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="description" class="form-control" value="{{ $episode->description }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>genres</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="genres" class="form-control" value="{{ $episode->genres }}" required="">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>episode_guid</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="episode_guid" class="form-control" value="{{ $episode->episode_guid }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>podcast_id</td>
                                                    <td>    
                                                        <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                                                            @foreach ($podcasts as $podcast)
                                                                <option value="{{ $podcast->id }}" {{ $episode->podcast_id == $podcast->id ? 'selected' : '' }}>{{ $podcast->track_name . ' ' . $podcast->id }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>podcaster_id</td>
                                                    <td>
                                                        <select name="podcaster_id" class="form-control" id="exampleFormControlSelect1">
                                                            @foreach ($podcasters as $podcaster)
                                                                <option value="{{ $podcaster->id }}" {{ $episode->category_id == $podcaster->id ? 'selected' : '' }}>{{ $podcaster->artist_name . ' ' . $podcaster->id }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <button type="submit" class="btn btn-warning">Save Changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row layout-top-spacing">
                        <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Episode Image</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <img src="{{ $episode->artwork_url_600 }}" width="100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Podcaster</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-4">
                                            <tbody>
                                                <tr>
                                                    <td>Name</td>
                                                    <td>
                                                        @if (isset($episode->podcaster_id))
                                                            <a href="{{ route('admin.podcaster.show' , ['podcaster' => $episode->podcaster_id ]) }}">{{ $episode->podcaster->artist_name }}</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout-component> 