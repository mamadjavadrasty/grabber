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
                                    <form action="{{ route('admin.podcaster.update' , ['podcaster' => $podcaster->id ]) }}" method="post">@method('put') @csrf
                                        <table class="table table-bordered mb-4">
                                            <tbody>
                                                <tr>
                                                    <td>Id</td>
                                                    <td>
                                                        <input id="t-text" type="number" class="form-control" value="{{ $podcaster->id  }}" disabled>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>wrapper_type</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="wrapper_type" class="form-control" value="{{ $podcaster->wrapper_type }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artist_type	</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artist_type" class="form-control" value="{{ $podcaster->artist_type }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artist name</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artist_name" class="form-control" value="{{ $podcaster->artist_name }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artist link url</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artist_link_url" class="form-control" value="{{ $podcaster->artist_link_url }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artwork_url30</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artwork_url30" class="form-control" value="{{ $podcaster->artwork_url30 }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artwork_url60</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artwork_url60" class="form-control" value="{{ $podcaster->artwork_url60 }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artwork_url100</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artwork_url100" class="form-control" value="{{ $podcaster->artwork_url100 }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artwork_url_600</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artwork_url_600" class="form-control" value="{{ $podcaster->artwork_url_600 }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>artist id</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="artist_id" class="form-control" value="{{ $podcaster->artist_id }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>primary_genre_name</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="primary_genre_name" class="form-control" value="{{ $podcaster->primary_genre_name }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>primary_genre_id</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="primary_genre_id" class="form-control" value="{{ $podcaster->primary_genre_id }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>isset_artist_id</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="isset_artist_id" class="form-control" value="{{ $podcaster->isset_artist_id }}" required="">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <button type="numberic" class="btn btn-warning">Save Changes</button>
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
                                            <h4>Podcaster Image</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-4">
                                            <tbody>
                                                <tr>
                                                    <img src="{{ $podcaster->artwork_url_600 }}" width="100%" class="mb-2">
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row layout-top-spacing">
                        <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>podcasts</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-4">
                                            <tbody>
                                                <tr>
                                                    <td>Number of podcasts</td>
                                                    <td>
                                                        {{ $podcaster->podcasts->count() }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="{{ route('admin.podcaster.podcast' , ['podcaster' => $podcaster->id ]) }}" class="mr-2 btn btn-primary">Go to podcasts</a>
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