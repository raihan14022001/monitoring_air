<?php

namespace App\Http\Controllers;

use App\Models\ModelSensor;
use App\Models\ModelKontrol;
use Illuminate\Http\Request;
use App\Http\Controllers\apiController;

class apiController extends Controller
{
    public function  sensorApi()
    {
        $data = ModelKontrol::find(1);
        $StatusKontrol = $data->status; 
        $dataSensor = ModelSensor::find(1);
        $Tinggi = $dataSensor->tinggi;

        return response()->json([
            "status" => "success",
            "message" => "Data  sensor ultrasonik",
            "data"      => compact("StatusKontrol", "Tinggi"),
        ]);
    }

    public function update()
    {
     $data = ModelKontrol::find(1);
     $Status = $data->status; 
     
     if($Status == 0){
       $data->status = 1;
 
     } else{
       $data->status = 0;
     }
     $data->save();
    }
 
}
