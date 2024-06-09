<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Device; 
use App\Models\ConfigHeater;
use App\Models\ConfigLamp;
use App\Models\DataSensor;

class MainController extends Controller 
{
    public function get_config($deviceId) 
    {
        $device = Device::find($deviceId);
        $configHeater = ConfigHeater::where('device_id', $deviceId)->first();
        $configLamp = ConfigLamp::where('device_id', $deviceId)->first();
        return response()->json([
            "status" => "sukses",
            "message" => "config fetch sukses",
            "data" => [
                "device"=> $device,
                "heater" => $configHeater,
                "lamp" => $configLamp
            ]
        ],200);
    }

    public function post_data(Request $request, $deviceId) 
    {   
        try {
            $validated = $request->validate([
                'temperature' ,
                'humidity' ,
                'lux' 
            ]);
            $dataSensor = DataSensor::create([
                'device_id' => $deviceId,
                'temperature' => $request->temperature,
                'humidity' => $request->humidity,
                'lux' => $request->lux,
            ]);
            return response()->json([
                "status"=>"sukses",
                "message"=>"pos data sukses",
            ], 201);   
        } catch (\Exception $e){
            return response()->json([
                "status"=>"Error",
                "message"=>"Validation error",
                "error"=>$e->getMessage(),
            ], 400);
        }

    }
 
    public function index()
    {
        
        $dataSen = DataSensor::orderByDesc('created_at')->get();
        return view('dashboard.dashboard', compact('dataSen'));
        
    }
    
    
}
