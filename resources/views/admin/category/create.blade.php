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
                                        <h4>Category Create</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <form id="form" action="{{route('admin.category.store')}}" method="post">
                                        @csrf
                                        <table class="table table-bordered mb-4">
                                            <tbody>

                                                <tr>
                                                    <td>name</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="name" placeholder="Some Text..." class="form-control" value="{{ old('name') }}">
                                                        @error('name')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('name')}}
                                                        </div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>genre_id</td>
                                                    <td>
                                                        <input id="t-text" type="text" name="genre_id" placeholder="Some Text..." class="form-control" value="{{ old('genre_id') }}">
                                                        @error('genre_id')
                                                        <div class="text-danger text-center">
                                                            {{$errors->first('genre_id')}}
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
        $(document).ready(function () {
            var category_input = $('#category');
            var select_category = $('#select_category');
            const ids = [];
            $(".js-example-responsive").select2({
                placeholder : 'لطفا تگ های خود را وارد نمایید',
                tags: true
            });
            $('#form').submit(function ( event ){

                const category = document.getElementById('category');
                var selectedSource = select_category.val().join(',');
                category.value = selectedSource;

                alert(category.value);
                //event.preventDefault();
                // if(select_category.val() !== null && select_category.val().length > 0){
                //
                //     var selectedSource = select_category.val().join(',');
                //     category_input.val(selectedSource)
                // }
            })
        })
    </script>
</x-admin.layout-component>
