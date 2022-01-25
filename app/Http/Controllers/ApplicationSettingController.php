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
        return response()->json($request);
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
