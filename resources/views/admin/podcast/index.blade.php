<x-admin.layout-component>
    <div class="container">
        <div class="container">
            <div class="row layout-top-spacing">
                <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                    @if (session('success'))
                    <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Filter</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <form action="{{ route('admin.podcast.index') }}" method="get">
                                    <div class="form-group mb-4">
                                        <label for="filter_by">Filter by</label>
                                        <select name="filter_by" class="form-control" id="filter_by">
                                            <option value="" {{ old('filter_by') == 'track_name' ? 'selected' : '' }}>please select</option>
                                            <option value="track_name" {{ old('filter_by') == 'track_name' ? 'selected' : '' }}>Podcast Name</option>
                                            <option value="artist_name" {{ old('filter_by') == 'artist_name' ? 'selected' : '' }}>Podcaster Name</option>
                                            <option value="primary_genre_name" {{ old('filter_by') == 'primary_genre_name' ? 'selected' : '' }}>Category</option>
                                            <option value="track_id" {{ old('filter_by') == 'track_id' ? 'selected' : '' }}>Apple Id</option>
                                            <option value="release_date" {{ old('filter_by') == 'release_date' ? 'selected' : '' }}>Fetch Date</option>
                                            <option value="created_at" {{ old('filter_by') == 'created_at' ? 'selected' : '' }}>Release Date</option>
                                        </select>
                                    </div>  
                                    <div class="row mb-4">
                                        <div class="col podcast_name_field">
                                            <label for="podcast_name_field">Podcast Name</label>
                                            <input name="track_name" type="text" id="podcast_name_field" class="form-control" placeholder="Podcast Name" value="{{ old('track_name') }}">
                                        </div>
                                        <div class="col podcaster_name_field">
                                            <label for="podcaster_name_field">Podcaster Name</label>
                                            <input name="artist_name" type="text" id="podcaster_name_field" class="form-control" placeholder="Podcaster Name" value="{{ old('artist_name') }}">
                                        </div>
                                        <div class="col category_field">
                                            <label for="category_field">Category</label>
                                            <select name="category_id" type="text" id="category_field" class="form-control">
                                                @foreach (\App\Models\Category::all() as $category)
                                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected':'' }}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col apple_id_field">
                                            <label for="apple_id_field">Apple Id</label>
                                            <input name="track_id" type="number" id="apple_id_field" class="form-control" placeholder="Podcaster Name" value="{{ old('track_id') }}">
                                        </div>
                                        <div class="col start_fetch_date_field">
                                            <label for="start_fetch_date_field">Start Fetch Date</label>
                                            <input name="start_fetch_date" type="date" id="start_fetch_date_field" class="form-control" placeholder="Podcast Name" value="{{ old('start_fetch_date') }}">
                                        </div>
                                        <div class="col end_fetch_date_field">
                                            <label for="end_fetch_date_field">End Fetch Date</label>
                                            <input name="end_fetch_date" type="date" id="end_fetch_date_field" class="form-control" placeholder="Podcaster Name" value="{{ old('end_fetch_date') }}">
                                        </div>
                                        <div class="col start_release_date_field">
                                            <label for="start_release_date_field">Start Release Date</label>
                                            <input name="start_release_date" type="date" id="start_release_date_field" class="form-control" placeholder="Podcast Name" value="{{ old('start_release_date') }}">
                                        </div>
                                        <div class="col end_release_date_field">
                                            <label for="end_release_date_field">End Release Date</label>
                                            <input name="end_release_date" type="date" id="end_release_date_field" class="form-control" placeholder="Podcaster Name" value="{{ old('end_release_date') }}">
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Search">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container">
            <div class="row layout-top-spacing">
                <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Podcasters {{ isset($getWay) ?  'Of ' . $getWay : '' }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-4">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Podcaster</th>
                                            <th>Category</th>
                                            <th>Apple ID</th>
                                            <th>Release Date</th>
                                            <th>Fetch Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($podcasts as $podcast)
                                            <tr>
                                                <td>{{ $podcast->id }}</td>
                                                <th><img src="{{ $podcast->artwork_url60 }}" alt=""></th>
                                                <td><a href="{{ route('admin.podcast.show' , ['podcast' => $podcast->id ]) }}">{{ $podcast->track_name }}</td>
                                                <td>
                                                    @if (isset($podcast->podcaster->id))
                                                        <a href="{{ route('admin.podcaster.show' , ['podcaster'=> $podcast->podcaster->id  ]) }}">{{ $podcast->podcaster->artist_name }}</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    @foreach ($podcast->categories as $category)
                                                        {{ $category->name }}
                                                    @endforeach
                                                </td>
                                                <td>{{ $podcast->track_id }}</td>
                                                <td>{{ $podcast->release_date }}</td>
                                                <td>{{ $podcast->created_at }}</td>
                                                <td class="text-center">
                                                    <a class="btn btn-primary" href="{{ route('admin.podcast.show' , ['podcast' => $podcast->id ]) }}">Details</a>
                                                    <a href="{{ route('admin.podcastCreate',['collectionId' => $podcast->collection_id]) }}" class="btn btn-warning">Update</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div> {{ $podcasts->links() }} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){

            allField = [
                "podcast_name_field" ,
                "podcaster_name_field",
                "category_field",
                "apple_id_field",
                "start_fetch_date_field",
                "end_fetch_date_field",
                "start_release_date_field",
                "end_release_date_field"
            ];

            function showFields(fields){
                fields.forEach(field => { 
                    $("#" + field).removeAttr('disabled','disabled');
                    $("." + field).css('display', 'block');
                });
            }

            function hideAllFields(){
                this.allField.forEach(field => {
                    $("#" + field).attr('disabled','disabled');
                    $("." + field).css('display', 'none');
                });
            }

            function fieldStatus() {

                filterBy = $("#filter_by").val();

                switch(filterBy) {
                    case "track_name":
                        hideAllFields();
                        showFields(['podcast_name_field']);
                        break;
                    case "artist_name":
                        hideAllFields();
                        showFields(['podcaster_name_field']);
                        break;
                    case "primary_genre_name":
                        hideAllFields();    
                        showFields(['category_field']);
                        break;
                    case "track_id":
                        hideAllFields();
                        showFields(['apple_id_field']);
                        break;
                    case "release_date":
                        hideAllFields();
                        showFields(['start_fetch_date_field','end_fetch_date_field']);
                        break;
                    case "created_at":
                        hideAllFields();
                        showFields(['start_release_date_field' , 'end_release_date_field']);
                        break;
                    default:
                        hideAllFields();
                }

            }

            fieldStatus();
            
            $("#filter_by").change(function(){
                fieldStatus();
            });

        });
    </script>
</x-admin.layout-component>