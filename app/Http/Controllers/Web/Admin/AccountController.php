<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccountSetting\StoreInfoRequest;
use App\Http\Requests\AccountSetting\StoreNewAdminRequest;
use App\Http\Requests\AccountSetting\StoreNewPasswordRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function show()
    {
        $admin = Admin::find(auth('admin')->id());
        return view('admin.account-settings' , compact('admin'));
    }

    public function storeInfo(StoreInfoRequest $request)
    {
        Admin::find(auth('admin')->id())->update($request->validated());
        return redirect(route('admin.account-settings'))->with('success-alert' , 'Information saved successfuly');
    }

    public function storePassword(StoreNewPasswordRequest $request)
    {
        Admin::find(auth('admin')->id())->update(['password' => Hash::make($request->password)]);
        return redirect(route('admin.account-settings'))->with('success-alert' , 'New password changed successfuly');
    }

    public function store(StoreNewAdminRequest $request)
    {
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ]);

        return back()->with('success','Admin "'. $request->name  .'" created successfuly');
    }

}
