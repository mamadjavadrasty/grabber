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
                                    <h4>New Podcast With Feed</h4>
                                </div>
                            </div>
                        </div>
                        <form action="{{route('admin.new-podcast-feed.create')}}" method="post">
                            @csrf
                            <div class="widget-content widget-content-area">
                                <input id="search" type="text" name="feed" class="form-control search-form-control  ml-lg-auto" value="{{old('feed')}}" placeholder="feed...">
                                @error('feed')
                                <p class=" text-danger text-center text-xs italic">
                                    {{$errors->first('feed')}}
                                </p>
                                @enderror
                            </div>
                            <div class="widget-content widget-content-area">
                            <select id="order" name="podcaster_id" class="js-user-disabled js-states form-control custom-select-lg"  data-select2-id="select2-data-2-6ku6" tabindex="-1">
                                <option value="" >Select Podcaster</option>
                                @foreach($podcasters as $podcaster)
                                    <option value="{{$podcaster->id}}" {{$podcaster->id == old('podcaster_id') ? 'selected' : ''}}>{{$podcaster->wrapper_type.'-'.$podcaster->artist_name}}</option>
                                @endforeach

                            </select>
                            @error('podcaster_id')
                            <p class=" text-danger text-center text-xs italic">
                                {{$errors->first('podcaster_id')}}
                            </p>
                            @enderror
                            </div>
                            <button class="btn btn-warning p-2 rounded">Create</button>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

  <script>
      $(".js-user-disabled").select2();
  </script>
</x-admin.layout-component>
