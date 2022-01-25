<?php

namespace App\Http\Controllers;

use App\ApplicationSetting;
use Illuminate\Http\Request;

class ApplicationSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $appSetting = ApplicationSetting::first();
    
       return view('backend.setting.index', compact('appSetting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveSetting(Request $request)
    {
        $appSetting = ApplicationSetting::first();
        if($appSetting == null)
            $appSetting = new ApplicationSetting();

        $appSetting->address = $request->address;
        $appSetting->primary_phone = $request->primary_phone;
        $appSetting->telegram_link = $request->telegram_link;
        $appSetting->secondary_phone = $request->secondary_phone;
        $appSetting->sales_email = $request->sales_email;
        $appSetting->customer_service_email = $request->customer_service_email;
        $appSetting->whatsapp_number = $request->whatsapp_number;
        $appSetting->support_email = $request->support_email;
        $appSetting->save();

        return view('backend.setting.index', compact('appSetting'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ApplicationSetting  $applicationSetting
     * @return \Illuminate\Http\Response
     */
    public function show(ApplicationSetting $applicationSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ApplicationSetting  $applicationSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(ApplicationSetting $applicationSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ApplicationSetting  $applicationSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApplicationSetting $applicationSetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ApplicationSetting  $applicationSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplicationSetting $applicationSetting)
    {
        //
    }
}
