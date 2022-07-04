<x-admin.layout-component>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet"> 
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="plugins/font-icons/fontawesome/css/regular.css">
    <link rel="stylesheet" href="plugins/font-icons/fontawesome/css/fontawesome.css">
    <div class="container">
        <div class="container">
            <div class="sidenav">
                <div class="sidenav-content">
                    <a href="#font-icon_feather" class="active">Fetch random podcasts settings</a>
                </div>
            </div>
            <form action="{{ route('admin.setting.store') }}" method="post">@csrf
                <div class="row layout-spacing layout-top-spacing feather-icon">
                    <div id="font-icon_feather" class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area bx-top-6">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Fetch random podcasts settings</h4>
                                    </div>
                                </div>
                                <div class="container mb-4">
                                    <div class="">Fetch by :</div>
                                    <div class="custom-control custom-radio">
                                        <input type="hidden" name="key[]" value="random_fetch_by">
                                        <input type="radio" id="random_fetch_by1" name="value[0]" class="custom-control-input" value="English_letters" {{ $settings->firstWhere('key','random_fetch_by')->value == 'English_letters' ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="random_fetch_by1">English letters (A-Z)</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="random_fetch_by2" name="value[0]" class="custom-control-input" value="Persian_Letters" {{ $settings->firstWhere('key','random_fetch_by')->value == 'Persian_Letters' ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="random_fetch_by2">Persian Letters (الف - ی)</label>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="">status :</div>
                                    <div class="custom-control custom-radio">
                                        <input type="hidden" name="key[]" value="random_status">
                                        <input type="radio" id="customRadio3" name="value[1]" class="custom-control-input" value="1" {{ $settings->firstWhere('key','random_status')->value  ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="customRadio3">On</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio4" name="value[1]" class="custom-control-input" value="0" {{ $settings->firstWhere('key','random_status')->value  ? '' : 'checked' }}>
                                        <label class="custom-control-label" for="customRadio4">Off</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </div>
    <script src="assets/js/scrollspyNav.js"></script>
    <script src="plugins/font-icons/feather/feather.min.js"></script>
    <script type="text/javascript">
        feather.replace();
    </script>
</x-admin.layout-component>