<x-admin.layout-component>
    <div class="container">
        <div class="container">
            <div class="row layout-top-spacing">
                <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        @if (session('success'))
                        <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>New collectionId</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="{{route('admin.podcast.sync.store')}}" method="post">
                                    @csrf
                                    <input id="search" name="collection_id" type="text" class="form-control search-form-control  ml-lg-auto {{$errors->has('collection_id') ? 'is-invalid' : ''}}" value="{{old('collection_id')}}" placeholder="collection id...">
                                    <button type="submit" class="btn btn-info d-block mx-auto mt-3">Add</button>
                            </form>
                            @error('collection_id')
                            <div class="text-danger text-center">
                                {{$errors->first('collection_id')}}
                            </div>
                            @enderror
                        </div>
                       <hr>
                        <div id="place_table" class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-4 text-center">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Collection id</th>
                                            <th>Podcast</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($syncPodcasts as $syncPodcast)
                                            <tr>
                                                <td>{{$syncPodcast->id}}</td>
                                                <td>{{$syncPodcast->collection_id}}</td>
                                                <td><a href="{{ route('admin.podcast.index') . '?filter_by=track_id&track_id=' . $syncPodcast->collection_id }}">See Podcast</a></td>
                                                <td>
                                                    <form action="{{route('admin.podcast.sync.delete',$syncPodcast->id)}}" method="post">
                                                            @csrf
                                                           @method('delete')
                                                       <button class="btn btn-danger" type="submit">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout-component>
