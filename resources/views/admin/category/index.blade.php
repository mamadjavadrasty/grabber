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
                                <form action="{{ route('admin.category.index') }}" method="get">
                                    <div class="form-group mb-4">
                                        <label for="filter_by">Filter by</label>
                                        <select name="filter_by" class="form-control" id="filter_by">
                                            <option value="">please select</option>
                                            <option {{ is_null(old('name')) ? '' : 'selected' }} value="name">Category name</option>
                                            <option {{ is_null(old('category_id')) ? '' : 'selected' }} value="parent">Parent</option>
                                        </select>
                                    </div>  
                                    <div class="row mb-4">
                                        <div class="col category_name_field">
                                            <label for="category_name_field">Podcast Name</label>
                                            <input name="name" type="text" id="category_name_field" class="form-control" placeholder="Category Name">
                                        </div>
                                        <div class="col category_id_field">
                                            <label for="category_id_field">Parent :</label>
                                            <select class="form-control" id="category_id_field" name="category_id">
                                                @foreach ($categories_field as $option)
                                                    <option value="{{ $option->id }}" {{ old('category_id') == $option->id ? 'selected' : '' }}>{{ $option->name }}</option>
                                                @endforeach
                                            </select>
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
                                    <h4>Categories</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-4">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Parent</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($categories as $category)
                                            <tr>
                                                <td><a href="{{ route('admin.category.edit' , ['category' =>  $category->id]) }}">{{ $category->name }}</a></td>
                                                <td>{{ $category->id }}</td>
                                                <td>{{ !is_null($category->category) ? $category->category->name : 'NO PARENT'  }}</td>
                                            </tr>    
                                        @empty
                                            No Data !
                                        @endforelse
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div> {{ $categories->links() }} </div>
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
                "end_release_date_field",
                "category_name_field",
                "category_id_field"
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
                    // case "track_name":
                    //     hideAllFields();
                    //     showFields(['podcast_name_field']);
                    //     break;
                    // case "artist_name":
                    //     hideAllFields();
                    //     showFields(['podcaster_name_field']);
                    //     break;
                    // case "primary_genre_name":
                    //     hideAllFields();    
                    //     showFields(['category_field']);
                    //     break;
                    // case "track_id":
                    //     hideAllFields();
                    //     showFields(['apple_id_field']);
                    //     break;
                    // case "release_date":
                    //     hideAllFields();
                    //     showFields(['start_fetch_date_field','end_fetch_date_field']);
                    //     break;
                    // case "created_at":
                    //     hideAllFields();
                    //     showFields(['start_release_date_field' , 'end_release_date_field']);
                    //     break;
                    case "name":
                        hideAllFields();
                        showFields(['category_name_field']);
                        break;    
                    case "parent":
                        hideAllFields();
                        showFields(['category_id_field']);
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