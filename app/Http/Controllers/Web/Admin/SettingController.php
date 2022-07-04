<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view('admin.setting.index',compact('settings'));
    }

    public function store(SettingRequest $request)
    {
        // find and update all settings.
        foreach ($request->key as $key => $settingKey) {
            Setting::where('key',$settingKey)->update([
                'value' => $request->value[$key]
            ]);
        }

        return back();
    }
}
