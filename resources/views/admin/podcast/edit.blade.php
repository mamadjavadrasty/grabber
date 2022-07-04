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
                                    <form action="{{ route('admin.podcast.update' , ['podcast' => $podcast->id ]) }}" method="post">@method('put') @csrf
                                        <table class="table table-bordered mb-4">
                                            <tbody>
                                                <tr>
                                                    <td>id</td>
                                                    <td>
                                                        <input id="t-text" type="number" placeholder="Some Text..." class="form-control" value="{{ $podcast->id }}" disabled>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>wrapper_type</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="wrapper_type" placeholder="Some Text..." class="form-control" value="{{ $podcast->wrapper_type }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>kind</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="kind" placeholder="Some Text..." class="form-control" value="{{ $podcast->kind }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artist_id</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artist_id" placeholder="Some Text..." class="form-control" value="{{ $podcast->artist_id }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>collection_id</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="collection_id" placeholder="Some Text..." class="form-control" value="{{ $podcast->collection_id }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_id</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_id" placeholder="Some Text..." class="form-control" value="{{ $podcast->track_id }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artist_name</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artist_name" placeholder="Some Text..." class="form-control" value="{{ $podcast->artist_name }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>collection_name	</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="collection_name" placeholder="Some Text..." class="form-control" value="{{ $podcast->collection_name }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_name</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_name" placeholder="Some Text..." class="form-control" value="{{ $podcast->track_name }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>collection_censored_name</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="collection_censored_name" placeholder="Some Text..." class="form-control" value="{{ $podcast->collection_censored_name }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_censored_name</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_censored_name" placeholder="Some Text..." class="form-control" value="{{ $podcast->track_censored_name }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artist_view_url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artist_view_url" placeholder="Some Text..." class="form-control" value="{{ $podcast->artist_view_url }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>collection_view_url	</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="collection_view_url" placeholder="Some Text..." class="form-control" value="{{ $podcast->collection_view_url }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>feed_url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="feed_url" placeholder="Some Text..." class="form-control" value="{{ $podcast->feed_url }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_view_url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_view_url" placeholder="Some Text..." class="form-control" value="{{ $podcast->track_view_url }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artwork_url30</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artwork_url30" placeholder="Some Text..." class="form-control" value="{{ $podcast->artwork_url30 }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artwork_url60</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artwork_url60" placeholder="Some Text..." class="form-control" value="{{ $podcast->artwork_url60 }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artwork_url100</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artwork_url100" placeholder="Some Text..." class="form-control" value="{{ $podcast->artwork_url100 }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>collection_price</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="collection_price" placeholder="Some Text..." class="form-control" value="{{ $podcast->collection_price }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_price</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_price" placeholder="Some Text..." class="form-control" value="{{ $podcast->track_price }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_rental_price</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_rental_price" placeholder="Some Text..." class="form-control" value="{{ $podcast->track_rental_price }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>collection_hd_price</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="collection_hd_price" placeholder="Some Text..." class="form-control" value="{{ $podcast->collection_hd_price }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_hd_price</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_hd_price" placeholder="Some Text..." class="form-control" value="{{ $podcast->track_hd_price }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_hd_rental_price</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_hd_rental_price" placeholder="Some Text..." class="form-control" value="{{ $podcast->track_hd_rental_price }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>release_date</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="release_date" placeholder="Some Text..." class="form-control" value="{{ $podcast->release_date }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>collection_explicitness</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="collection_explicitness" placeholder="Some Text..." class="form-control" value="{{ $podcast->collection_explicitness }}">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>track_explicitness</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_explicitness" placeholder="Some Text..." class="form-control" value="{{ $podcast->track_explicitness }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_count</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_count" placeholder="Some Text..." class="form-control" value="{{ $podcast->track_count }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>country</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="country" placeholder="Some Text..." class="form-control" value="{{ $podcast->country }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>currency</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="currency" placeholder="Some Text..." class="form-control" value="{{ $podcast->currency }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>primary_genre_name</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="primary_genre_name" placeholder="Some Text..." class="form-control" value="{{ $podcast->primary_genre_name }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>content_advisory_rating</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="content_advisory_rating" placeholder="Some Text..." class="form-control" value="{{ $podcast->content_advisory_rating }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artwork_url_600</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artwork_url_600" placeholder="Some Text..." class="form-control" value="{{ $podcast->artwork_url_600 }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>genre_ids</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="genre_ids" placeholder="Some Text..." class="form-control" value="{{ $podcast->genre_ids }}">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>genres</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="genres" placeholder="Some Text..." class="form-control" value="{{ $podcast->genres }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>category_id</td>
                                                    <td>
                                                        <select class="form-control tagging" name="categories[]" multiple="multiple">
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}" {{ in_array($category->id,array_column($podcast->categories->toArray(),'id')) ? 'selected' : '' }}>{{ $category->name . ' ' . $category->id }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>podcaster_id</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="podcaster_id" placeholder="Some Text..." class="form-control" value="{{ $podcast->podcaster_id }}">
                                                        
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
                                            <h4>Podcast Image</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <img src="{{ $podcast->artwork_url_600 }}" width="100%">
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
                                                        @if (isset($podcast->podcaster->id))
                                                            <a href="{{ route('admin.podcaster.show' , ['podcaster' => $podcast->podcaster->id ]) }}">{{ $podcast->podcaster->artist_name }}</a>
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
                    <div class="row">
                        <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Episodes</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-4">
                                            <tbody>
                                                <tr>
                                                    <td>Number of episodes</td>
                                                    <td>
                                                        {{ $podcast->episodes->count() }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="{{ route('admin.episode.show' , ['id' => $podcast->id ]) }}" class="mr-2 btn btn-primary">Go to episodes</a>
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