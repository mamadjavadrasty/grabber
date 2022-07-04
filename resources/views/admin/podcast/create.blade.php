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
                                        <h4>Podcast Create</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <form id="form" action="{{route('admin.podcast.store')}}" method="post">
                                        @csrf
                                        <table class="table table-bordered mb-4">
                                            <tbody>

                                                <tr>
                                                    <td>wrapper_type</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="wrapper_type" placeholder="Some Text..." class="form-control" value="{{ old('wrapper_type') }}">
                                                        @error('wrapper_type')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('wrapper_type')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>kind</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="kind" placeholder="Some Text..." class="form-control" value="{{ old('kind') }}">
                                                        @error('kind')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('kind')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artist_id</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artist_id" placeholder="Some Text..." class="form-control" value="{{ old('artist_id') }}">
                                                        @error('artist_id')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('artist_id')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>collection_id</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="collection_id" placeholder="Some Text..." class="form-control" value="{{ old('collection_id') }}">
                                                        @error('collection_id')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('collection_id')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_id</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_id" placeholder="Some Text..." class="form-control" value="{{ old('track_id') }}">
                                                        @error('track_id')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('track_id')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artist_name</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artist_name" placeholder="Some Text..." class="form-control" value="{{ old('artist_name') }}">
                                                        @error('artist_name')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('artist_name')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>collection_name	</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="collection_name" placeholder="Some Text..." class="form-control" value="{{ old('collection_name') }}">
                                                        @error('collection_name')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('collection_name')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_name</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_name" placeholder="Some Text..." class="form-control" value="{{ old('track_name') }}">
                                                        @error('track_name')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('track_name')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>collection_censored_name</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="collection_censored_name" placeholder="Some Text..." class="form-control" value="{{ old('collection_censored_name') }}">
                                                        @error('collection_censored_name')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('collection_censored_name')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_censored_name</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_censored_name" placeholder="Some Text..." class="form-control" value="{{ old('track_censored_name') }}">
                                                        @error('track_censored_name')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('track_censored_name')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artist_view_url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artist_view_url" placeholder="Some Text..." class="form-control" value="{{ old('artist_view_url') }}">
                                                        @error('artist_view_url')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('artist_view_url')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>collection_view_url	</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="collection_view_url" placeholder="Some Text..." class="form-control" value="{{ old('collection_view_url') }}">
                                                        @error('collection_view_url')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('collection_view_url')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>feed_url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="feed_url" placeholder="Some Text..." class="form-control" value="{{ old('feed_url') }}">
                                                        @error('feed_url')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('feed_url')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_view_url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_view_url" placeholder="Some Text..." class="form-control" value="{{ old('track_view_url') }}">
                                                        @error('track_view_url')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('track_view_url')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artwork_url30</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artwork_url30" placeholder="Some Text..." class="form-control" value="{{ old('artwork_url30') }}">
                                                        @error('artwork_url30')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('artwork_url30')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artwork_url60</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artwork_url60" placeholder="Some Text..." class="form-control" value="{{ old('artwork_url60') }}">
                                                        @error('artwork_url60')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('artwork_url60')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artwork_url100</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artwork_url100" placeholder="Some Text..." class="form-control" value="{{ old('artwork_url100') }}">
                                                        @error('artwork_url100')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('artwork_url100')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>collection_price</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="collection_price" placeholder="Some Text..." class="form-control" value="{{ old('collection_price') }}">
                                                        @error('collection_price')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('collection_price')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_price</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_price" placeholder="Some Text..." class="form-control" value="{{ old('track_price') }}">
                                                        @error('track_price')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('track_price')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_rental_price</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_rental_price" placeholder="Some Text..." class="form-control" value="{{ old('track_rental_price') }}">
                                                        @error('track_rental_price')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('track_rental_price')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>collection_hd_price</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="collection_hd_price" placeholder="Some Text..." class="form-control" value="{{ old('collection_hd_price') }}">
                                                        @error('collection_hd_price')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('collection_hd_price')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_hd_price</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_hd_price" placeholder="Some Text..." class="form-control" value="{{ old('track_hd_price') }}">
                                                        @error('track_hd_price')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('track_hd_price')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_hd_rental_price</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_hd_rental_price" placeholder="Some Text..." class="form-control" value="{{ old('track_hd_rental_price') }}">
                                                        @error('track_hd_rental_price')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('track_hd_rental_price')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>release_date</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="release_date" placeholder="Some Text..." class="form-control" value="{{ old('release_date') }}">
                                                        @error('release_date')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('release_date')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>collection_explicitness</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="collection_explicitness" placeholder="Some Text..." class="form-control" value="{{ old('collection_explicitness') }}">
                                                        @error('collection_explicitness')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('collection_explicitness')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>track_explicitness</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_explicitness" placeholder="Some Text..." class="form-control" value="{{ old('track_explicitness')  }}">
                                                        @error('track_explicitness')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('track_explicitness')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>track_count</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="track_count" placeholder="Some Text..." class="form-control" value="{{ old('track_count') }}">
                                                        @error('track_count')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('track_count')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>country</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="country" placeholder="Some Text..." class="form-control" value="{{ old('country') }}">
                                                        @error('country')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('country')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>currency</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="currency" placeholder="Some Text..." class="form-control" value="{{ old('currency') }}">
                                                        @error('currency')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('currency')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>primary_genre_name</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="primary_genre_name" placeholder="Some Text..." class="form-control" value="{{ old('primary_genre_name') }}">
                                                        @error('primary_genre_name')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('primary_genre_name')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>content_advisory_rating</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="content_advisory_rating" placeholder="Some Text..." class="form-control" value="{{ old('content_advisory_rating') }}">
                                                        @error('content_advisory_rating')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('content_advisory_rating')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artwork_url_600</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artwork_url_600" placeholder="Some Text..." class="form-control" value="{{ old('artwork_url_600') }}">
                                                        @error('artwork_url_600')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('artwork_url_600')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>genre_ids</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="genre_ids" placeholder="Some Text..." class="form-control" value="{{ old('genre_ids') }}">
                                                        @error('genre_ids')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('genre_ids')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>genres</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="genres" placeholder="Some Text..." class="form-control" value="{{ old('genres') }}">
                                                        @error('genres')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('genres')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>podcaster</td>
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
                                                <tr>
                                                    <td>category </td>

                                                     <td>
                                                         <select class="js-example-responsive form-control" name="categories[]"  id="select_category" multiple="multiple">
                                                             @foreach($categories as $category)
                                                                 <option value="{{$category->id}}">{{$category->name}}</option>
                                                             @endforeach
                                                         </select>
                                                         @error('categories')
                                                         <div class="text-danger text-center">
                                                             {{$errors->first('categories')}}
                                                         </div>
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

        $(document).ready(function () {
            $(".js-example-responsive").select2({
                placeholder : 'Select Category',
                tags: true
            });
        })
    </script>
</x-admin.layout-component>
