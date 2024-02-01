<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\rms;
use App\Imports\RmsImport;
use Excel;
use App\Models\Upload;
use Session;

class Maincontroller extends Controller
{
    public function overview(Request $request)
    {
        $loginId = $request->session()->get('loginId');
        $data = DB::table('rms')->where('id', $loginId)->get();
        $graph = DB::table('uploads')
        ->where('loginid', $loginId)
        ->select('graph')
        ->orderBy('upload_count', 'desc')
        ->get();
        return view('pages.overview', compact('data','graph'));
    }
    public function plantdetail(Request $request)
    {
        $id = $request->session()->get('loginId');
        $data = DB::table('rms')->where('id', $id)->get();
        return view('pages.plantdetail', compact('data'));
    }
    public function device(Request $request)
    {
        $id = $request->session()->get('loginId');
        $data = DB::table('rms')->where('id', $id)->get();
        return view('pages.device', compact('data'));
    }
    public function popup(Request $request)
    {
        $id = $request->session()->get('loginId');
        $data = DB::table('rms')->where('id', $id)->get();
        return view('pages.popup', compact('data'));
    }
    

    public function edit(Request $request)
    {
        
        $id = $request->session()->get('loginId');
        $data = DB::table('rms')->where('id', $id)->get();
        return view('pages.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $rms = rms::find($id);
        $rms->district = $request->district;
        $rms->site_name = $request->site_name;
        $rms->user_name  = $request->user_name;
        $rms->created_date = $request->created_date;
        $rms->time_zone = $request->time_zone;
        $rms->admin_area = $request->admin_area;
        $rms->address  = $request->address;
        $rms->longitude  = $request->longitude;
        $rms->latitude  = $request->latitude;
        $rms->plant_name  = $request->plant_name;
        $rms->plant_type = $request->plant_type;
        $rms->system_type  = $request->system_type;
        $rms->operating_date  = $request->operating_date;
        $rms->installed_capacity  = $request->installed_capacity;
        $rms->azimuth  = $request->azimuth;
        $rms->angle_of_tilt  = $request->angle_of_tilt;
        $rms->currency  = $request->currency;
        $rms->unit_price  = $request->unit_price;
        $rms->total_cost = $request->total_cost;
        $rms->inverter_device_name  = $request->inverter_device_name;
        $rms->logger_device_name  = $request->logger_device_name;
        $rms->inverter_device_status = $request->inverter_device_status;
        $rms->inverter_production_power  = $request->inverter_production_power;
        $rms->inverter_production_today  = $request->inverter_production_today;
        $rms->update_time = $request->update_time;
        $rms->logger_device_status = $request->logger_device_status;
        $rms->total_production  = $request->total_production;
        $rms->running_days  = $request->running_days;
        $rms->co2_prevention = $request->co2_prevention;
        $rms->anticipated_yield = $request->anticipated_yield;
        $rms->phase = $request->phase;
        $rms->save();
        return back()->with('status', 'Details Updated Successfully');
    }
    public function importFile(Request $request){
        return view('pages.import-view');
    }
       public function import(Request $request)
    {
        set_time_limit(0);
        $loginID = $request->session()->get('loginId');
        $currentCount = Upload::where('loginid', $loginID)->max('upload_count');
    if ($currentCount != null) {
        $currentCount++;
       
    } else {
        $currentCount = 1;
    }
        $filePath = $request->file('upload');
        $import = new RmsImport($loginID, $currentCount);
        Excel::import($import, $filePath);
        $savedCount = $import->getSavedCount();
        return back()->with('status', $savedCount . ' Rows Imported Successfully');
    }
    

    
    public function import_view(Request $request)
    {
        $id = $request->session()->get('loginId');
        $data = DB::table('upload')->where('id', $id)->get();
        return view('pages.plantdetail', compact('data'));
    }


}
