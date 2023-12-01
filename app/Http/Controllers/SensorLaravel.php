<?php

namespace App\Http\Controllers;


use App\Models\ModelSensor;

use App\Models\ModelKontrol;
use Illuminate\Http\Request;

class SensorLaravel extends Controller
{
  public  function bacaSensor()
    {
     
      // dd(data);
        $SENSOR = ModelSensor::select('tinggi')->get();
        return view( 'ketinggian',['baca' =>$SENSOR]);
   }

   public function bacaKontrol()
   {
    $data = ModelKontrol::select('status')->get();
    return view('kontrolMCU',['DATA' =>$data]);
   }




   public function update()
   {
    $data = ModelKontrol::find(1);
    $Status = $data->status; 
    
    if($Status == 0){
      $data->status = 1;

    } elseif($Status == 1){
      $data->status = 0;
    }
    $data->save();
    return null;
   }




   public function simpan()
   {
    $data = ModelSensor::where('id', '1')->update(['tinggi'=>request()->nilaiTinggi]);
   }


   public function detail()
   {
    $data = ModelKontrol::find(1);
    $Status = $data->status;
    return view('default.index', compact('Status'));
   }




    
}
