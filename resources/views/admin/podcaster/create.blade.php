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
                                        <h4>Podcaster Create</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <form id="form" action="{{route('admin.podcaster.store')}}" method="post">
                                        @csrf
                                        <table class="table table-bordered mb-4">
                                            <tbody>

                                                <tr>
                                                    <td>artist_type</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artist_type" placeholder="Some Text..." class="form-control" value="{{ old('wrapper_type') }}">
                                                        @error('artist_type')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('artist_type')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
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
                                                    <td>artist_link_url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artist_link_url" placeholder="Some Text..." class="form-control" value="{{ old('artist_view_url') }}">
                                                        @error('artist_link_url')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('artist_link_url')}}
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
                                                    <td>primary_genre_id</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="primary_genre_id" placeholder="Some Text..." class="form-control" value="{{ old('genre_ids') }}">
                                                        @error('primary_genre_id')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('primary_genre_id')}}
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

</x-admin.layout-component>
