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
                                    <form action="{{ route('admin.category.update' , ['category' => $category->id ]) }}" method="post">@method('put') @csrf
                                        <table class="table table-bordered mb-4">
                                            <tbody>
                                                <tr>
                                                    <td>Id</td>
                                                    <td>
                                                        <input id="t-text" type="text" placeholder="567876" class="form-control" value="{{ $category->id }}" required="" disabled>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Name</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="name" class="form-control" value="{{ $category->name }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Genre Id</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="genre_id" class="form-control" value="{{ $category->genre_id }}" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Parent</td>
                                                    <td>
                                                        <select class="form-control" name="category_id">
                                                            @foreach ($categories as $option)
                                                                <option value="{{ $option->id }}" {{ $category->category_id == $option->id ? 'selected' : '' }}>{{ $option->name }}</option>
                                                            @endforeach
                                                        </select>
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
                <div class="col-lg-4 mt-4">
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
                                                    <td>Number of Podcasts</td>
                                                    <td>
                                                        {{ $category->podcasts_count }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="{{ route('admin.podcast.index',['filter_by'=>'primary_genre_name','primary_genre_name' =>$category->name]) }}" class="mr-2 btn btn-primary">Go to Podcasts of this Category</a>
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