<x-admin.layout-component>
    <div class="container">
        <div class="container">
            <div class="row layout-top-spacing">
                <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
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
                                <form action="{{ route('admin.podcaster.index') }}" method="get">
                                    <div class="form-group mb-4">
                                        <label for="filter_by">Filter by</label>
                                        <select name="filter_by" class="form-control" id="filter_by">
                                            <option value="">please select</option>
                                            <option {{ old('filter_by') == 'artist_name' ? 'selected' : '' }} value="artist_name">Podcaster Name</option>
                                            <option {{ old('filter_by') == 'artist_id' ? 'selected' : '' }} value="artist_id">Apple Id</option>
                                        </select>
                                    </div>  
                                    <div class="row mb-4">
                                        <div class="col podcaster_name_field">
                                            <label for="podcaster_name_field">Podcaster Name</label>
                                            <input value="{{ old('artist_name') }}" name="artist_name" type="text" id="podcaster_name_field" class="form-control" placeholder="Podcaster Name">
                                        </div>
                                        <div class="col apple_id_field">
                                            <label for="apple_id_field">Apple Id</label>
                                            <input value="{{ old('artist_id') }}" name="artist_id" type="number" id="apple_id_field" class="form-control" placeholder="Podcaster Name">
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Search">
                                </form>
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
                                                case "artist_name":
                                                    hideAllFields();
                                                    showFields(['podcaster_name_field']);
                                                    break;
                                                case "artist_id":
                                                    hideAllFields();
                                                    showFields(['apple_id_field']);
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
                                    <h4>Podcasters</h4>
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
                                            <th>Name</th>
                                            <th>Apple id</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($podcasters as $podcaster)
                                            <tr>
                                                <td>{{ $podcaster->id }}</td>
                                                <td><img src="{{ $podcaster->artwork_url60 }}"></td>
                                                <td><a href="{{ route('admin.podcaster.show', ['podcaster'=>$podcaster->id ]) }}">{{ $podcaster->artist_name }}</a></td>
                                                <td>{{ $podcaster->artist_id }}</td>
                                                <td>
                                                    <a href="" class="btn btn-warning">Update</a>
                                                    <a href="{{ route('admin.podcaster.show', ['podcaster'=>$podcaster->id]) }}" class="btn btn-primary">Details</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <div class="">NO PODCASTER !</div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div> {{ $podcasters->links() }} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout-component>