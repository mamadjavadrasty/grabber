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
                                        <h4>Episode Details</h4>
                                    </div>
                                </div>
                            </div>
                            @if (session('success'))
                                <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                                    <strong>{{ session('success') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <form action="{{ route('admin.episode.store') }}" method="post"> @csrf
                                        <table class="table table-bordered mb-4">
                                            <tbody>
                                                <tr>
                                                    <td>artwork_url_160</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artwork_url_160" class="form-control" placeholder="Some Text..." value="{{ old('artwork_url_160') }}">
                                                        @error('artwork_url_160')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('artwork_url_160')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artwork_url_60</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artwork_url_60" class="form-control" placeholder="Some Text..." value="{{ old('artwork_url_160') }}">
                                                        @error('artwork_url_60')
                                                        <p class="text-danger text-center text-xs italic">
                                                            {{$errors->first('artwork_url_60')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>episode_file_extension</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="episode_file_extension" class="form-control" placeholder="Some Text..." value="{{ old('episode_file_extension') }}"  >
                                                        @error('episode_file_extension')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('episode_file_extension')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>episode_content_type</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="episode_content_type" class="form-control" placeholder="Some Text..." value="{{ old('episode_content_type') }}"  >
                                                        @error('episode_content_type')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('episode_content_type')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_name</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_name" class="form-control" placeholder="Some Text..." value="{{ old('episode_content_type') }}"  >
                                                        @error('track_name')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('track_name')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artwork_url_60</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artwork_url_60" class="form-control" placeholder="Some Text..." value="{{ old('artwork_url_60') }}"  >
                                                        @error('artwork_url_60')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('artwork_url_60')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artist_view_url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artist_view_url" class="form-control" placeholder="Some Text..." value="{{ old('artist_view_url') }}"  >
                                                        @error('artist_view_url')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('artist_view_url')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>content_advisory_rating</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="content_advisory_rating" class="form-control" placeholder="Some Text..." value="{{ old('content_advisory_rating') }}"  >
                                                        @error('content_advisory_rating')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('content_advisory_rating')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_view_url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_view_url" class="form-control" placeholder="Some Text..." value="{{ old('track_view_url') }}"  >
                                                        @error('track_view_url')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('track_view_url')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artwork_url_600</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artwork_url_600" class="form-control" placeholder="Some Text..." value="{{ old('artwork_url_600') }}"  >
                                                        @error('artwork_url_600')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('artwork_url_600')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>preview_url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="preview_url" class="form-control" placeholder="Some Text..." value="{{ old('preview_url') }}"  >
                                                        @error('preview_url')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('preview_url')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_time_millis</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_time_millis" class="form-control" placeholder="Some Text..." value="{{ old('track_time_millis') }}"  >
                                                        @error('track_time_millis')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('track_time_millis')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>collection_view_url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="collection_view_url" class="form-control" placeholder="Some Text..." value="{{ old('collection_view_url') }}"  >
                                                        @error('collection_view_url')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('collection_view_url')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>episode_url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="episode_url" class="form-control" placeholder="Some Text..." value="{{ old('episode_url') }}"  >
                                                        @error('episode_url')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('episode_url')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artist_ids</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artist_ids" class="form-control" placeholder="Some Text..." value="{{ old('artist_ids') }}"  >
                                                        @error('artist_ids')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('artist_ids')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>closed_captioning</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="closed_captioning" class="form-control" placeholder="Some Text..." value="{{ old('closed_captioning') }}"  >
                                                        @error('closed_captioning')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('closed_captioning')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>release_date</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="release_date" class="form-control" placeholder="Some Text..." value="{{ old('release_date') }}"  >
                                                        @error('release_date')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('release_date')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_id</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_id" class="form-control" placeholder="Some Text..." value="{{ old('track_id') }}"  >
                                                        @error('track_id')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('track_id')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>short_description</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="short_description" class="form-control" placeholder="Some Text..." value="{{ old('short_description') }}"  >
                                                        @error('short_description')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('short_description')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>feed_url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="feed_url" class="form-control" placeholder="Some Text..." value="{{ old('feed_url') }}"  >
                                                        @error('feed_url')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('feed_url')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>collection_id</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="collection_id" class="form-control" placeholder="Some Text..." value="{{ old('collection_id') }}"  >
                                                        @error('collection_id')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('collection_id')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>collection_name</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="collection_name" class="form-control" placeholder="Some Text..." value="{{ old('collection_name') }}"  >
                                                        @error('collection_name')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('collection_name')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>kind</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="kind" class="form-control" placeholder="Some Text..." value="{{ old('kind') }}"  >
                                                        @error('kind')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('kind')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>wrapper_type</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="wrapper_type" class="form-control" placeholder="Some Text..." value="{{ old('wrapper_type') }}"  >
                                                        @error('wrapper_type')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('wrapper_type')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>country</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="country" class="form-control" placeholder="Some Text..." value="{{ old('country') }}"  >
                                                        @error('country')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('country')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>description</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="description" class="form-control" placeholder="Some Text..." value="{{ old('description') }}"  >
                                                        @error('description')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('description')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>genres</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="genres" class="form-control" placeholder="Some Text..." value="{{ old('genres') }}"  >
                                                        @error('genres')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('genres')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>episode_guid</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="episode_guid" class="form-control" placeholder="Some Text..." value="{{ old('episode_guid') }}"  >
                                                        @error('episode_guid')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('episode_guid')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>podcast_id</td>
                                                    <td>
                                                        <select id="order" name="podcast_id" class="js-user-disabled js-states form-control"  data-select2-id="select2-data-2-6ku6" tabindex="-1">
                                                            @foreach($podcasts as $podcast)
                                                                <option value="{{$podcast->id}}" {{($podcaster->id ?? '' )== old('podcast_id') ? 'selected' : ''}}>{{$podcast->wrapper_type.'-'.$podcast->collection_name}}</option>
                                                            @endforeach

                                                        </select>
                                                        @error('podcast_id')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('podcast_id')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>podcaster_id</td>
                                                    <td>
                                                        <select id="order" name="podcaster_id" class="js-user-disabled js-states form-control"  data-select2-id="select2-data-2-6ku6" tabindex="-1">
                                                            @foreach($podcasters as $podcaster)
                                                                <option value="{{$podcaster->id}}" {{$podcaster->id == old('podcaster_id') ? 'selected' : ''}}>{{$podcaster->wrapper_type.'-'.$podcaster->artist_name}}</option>
                                                            @endforeach

                                                        </select>
                                                        @error('podcaster_id')
                                                        <p class=" text-danger text-center text-xs italic">
                                                            {{$errors->first('podcaster_id')}}
                                                        </p>
                                                        @enderror
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <button type="submit" class="btn btn-warning">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(".js-user-disabled").select2();
        $(".js-user-disabled").select2();
    </script>
</x-admin.layout-component>
