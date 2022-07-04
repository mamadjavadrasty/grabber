<x-admin.layout-component>
    <link rel="stylesheet" type="text/css" href="plugins/dropify/dropify.min.css">
    <link href="assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
<div class="layout-px-spacing">                
    <div class="account-settings-container layout-top-spacing">
        <div class="account-content mb-5">
            <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <form id="general-info" class="section general-info" action="{{ route('admin.account-settings.store.info') }}" method="POST">@csrf
                            <div class="info">
                                <h6 class="">General Information</h6>
                                <div class="row">
                                    <div class="col-lg-11 mx-auto">
                                        <div class="row">
                                            <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                <div class="form">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="fullName">Full Name</label>
                                                                <input type="text" name="name" class="form-control mb-4" id="fullName" placeholder="Full Name" value="{{ old('name') ?? $admin->name }}" required>
                                                                @error('name')
                                                                    <div class="invalid-feedback" style="display: inline-block">
                                                                            {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" name="email" class="form-control mb-4" id="email" value="{{ old('email') ?? $admin->email }}">
                                                        @error('email')
                                                            <div class="invalid-feedback" style="display: inline-block">
                                                                    {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone">Phone Number</label>
                                                        <input type="number" name="phone" class="form-control mb-4" id="phone" placeholder="0912..." value="{{ $admin->phone }}">
                                                        @error('phone')
                                                            <div class="invalid-feedback" style="display: inline-block" value="{{ $admin->phone }}">
                                                                    {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save Change</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <form class="section general-info" action="{{ route('admin.account-settings.store.new-password') }}" method="POST">@csrf
                            <div class="info">
                                <h6 class="">NEW PASSWORD</h6>
                                <div class="row">
                                    <div class="col-lg-11 mx-auto">
                                        <div class="row">
                                            <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                <div class="form">
                                                    <div class="form-group">
                                                        <label for="password">New Password</label>
                                                        <input type="password" name="password" class="form-control mb-4" id="password" placeholder="fg6gtfqBTVI..." value="">
                                                        @error('password')
                                                            <div class="invalid-feedback" style="display: inline-block" value="{{ $admin->phone }}">
                                                                    {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="confirm_password">Confirm New password</label>
                                                        <input type="password" name="password_confirmation" class="form-control mb-4" id="confirm_password" placeholder="fg6gtfqBTVI..." value="">
                                                        @error('password')
                                                            <div class="invalid-feedback" style="display: inline-block" value="{{ $admin->phone }}">
                                                                    {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Set New Password</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="account-settings-footer">
            
            <div class="as-footer-container">

                <a href="{{ route('admin.account-settings') }}" class="btn btn-primary">Reset All</a>
                @if (session('success-alert')) 
                    <div class="blockui-growl-message" style="top:140px; right:40px ; position:fixed; z-index:10000; display: block">
                        <i class="flaticon-double-check"></i>&nbsp; {{ session('success-alert') }}
                    </div>
                @endif
                <button id="go-to-top" class="btn btn-dark">Go To Top</button>

            </div>

        </div>
    </div>
</div>
<script src="plugins/dropify/dropify.min.js" defer></script>
<script src="plugins/blockui/jquery.blockUI.min.js" defer></script>
<!-- <script src="plugins/tagInput/tags-input.js"></script> -->
<script src="assets/js/users/account-settings.js" defer></script>
</x-admin.layout-component>