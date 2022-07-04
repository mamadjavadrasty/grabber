<x-admin.layout-component>
    <link rel="stylesheet" type="text/css" href="plugins/dropify/dropify.min.css">
    <link href="assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
<div class="layout-px-spacing"><br>               
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif 

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="account-settings-container layout-top-spacing">
        <div class="account-content mb-5">
            <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <form id="general-info" class="section general-info" action="{{ route('admin.newAdmin.store') }}" method="POST">@csrf
                            <div class="info">
                                <h6 class="">Create New Admin</h6>
                                <div class="row">
                                    <div class="col-lg-11 mx-auto">
                                        <div class="row">
                                            <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                <div class="form">

                                                    <div class="form-group">
                                                        <label for="fullName">Full Name</label>*
                                                        <input type="text" name="name" class="form-control mb-4" id="fullName" placeholder="Full Name" value="{{ old('name') }}" required>
                                                        @error('name')
                                                            <div class="invalid-feedback" style="display: inline-block">
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="email">Email</label>*
                                                        <input type="email" name="email" class="form-control mb-4" id="email" placeholder="example@gmail.com" value="{{ old('email') }}" required>
                                                        @error('email')
                                                            <div class="invalid-feedback" style="display: inline-block">
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <label for="phone">Phone Number</label>
                                                    <input type="number" name="phone" class="form-control mb-4" id="phone" placeholder="0912..." value="">
                                                    @error('phone')
                                                        <div class="invalid-feedback" style="display: inline-block" value="">
                                                        </div>
                                                    @enderror

                                                    <div class="form-group">
                                                        <label for="password">New Password</label>*
                                                        <input type="password" name="password" class="form-control mb-4" id="password" placeholder="fg6gtfqBTVI..." value="">
                                                        @error('password')
                                                            <div class="invalid-feedback" style="display: inline-block" value="">
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="confirm_password">Confirm New password</label>*
                                                        <input type="password" name="password_confirmation" class="form-control mb-4" id="confirm_password" placeholder="fg6gtfqBTVI..." value="">
                                                        @error('password')
                                                            <div class="invalid-feedback" style="display: inline-block" value="">
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Create New Admin</button>

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
    </div>
</div>
<script src="plugins/dropify/dropify.min.js" defer></script>
<script src="plugins/blockui/jquery.blockUI.min.js" defer></script>
<!-- <script src="plugins/tagInput/tags-input.js"></script> -->
<script src="assets/js/users/account-settings.js" defer></script>
</x-admin.layout-component>