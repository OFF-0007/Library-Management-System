<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\Http\Requests\StoresettingsRequest;
use App\Http\Requests\UpdatesettingsRequest;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('settings',['data' => Settings::latest()->first()]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesettingsRequest  $request
     * @param  \App\Models\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesettingsRequest $request)
    {
        $setting = Settings::latest()->first();
        $setting->return_days = $request->return_days;
        $setting->fine = $request->fine;
        $setting->save();
        return redirect()->route('settings');
    }
}
