<x-admin.layout-component>
    <div class="container">
        <div class="container">
            <div class="row layout-top-spacing">
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
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Apple id</th>
                                            <th>Podcaster</th>
                                            <th>Release Date</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($episodes as $episode)
                                            <tr>
                                                <td>{{ $episode->id }}</td>
                                                <td> <img src="{{ $episode->artwork_url_60 }}"></td>
                                                <td>{{ $episode->track_name }}</td>
                                                <td>{{ $episode->track_id }}</td>
                                                <td>
                                                    @if (isset($episode->podcaster->id))
                                                    <a href="{{ route('admin.podcaster.show',['podcaster' => $episode->podcaster->id]) }}">
                                                    {{ $episode->podcaster->artist_name }}
                                                    </a>
                                                    @endif
                                                </td>
                                                <td>{{ $episode->release_date }}</td>
                                                <td>{{ $episode->short_description }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('admin.episode.show.details' , ['episodeId' => $episode->id ]) }}" class="btn btn-primary">Details</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                {{ $episodes->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout-component>