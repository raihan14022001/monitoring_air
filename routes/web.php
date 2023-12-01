<?php

use App\Http\Controllers\Sensor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;
use App\Http\Controllers\SensorLaravel;


Route::get('/', [SensorLaravel::class, 'detail']);
Route::get('/default', [SensorLaravel::class, 'detail']);

Route::get('/ketinggian', [SensorLaravel::class, 'bacaSensor']);
Route::get('/nodemcu/datasensor', [SensorLaravel::class, 'bacaKontrol']);
Route::get('/kontrol', [SensorLaravel::class, 'update']);

//Route di node MCU
Route::get('/simpan/{nilaiTinggi}', [SensorLaravel::class, 'simpan']);

//Route api sensor ke mobile
Route::get('/api/data', [apiController::class, 'sensorApi']);
Route::get('/api/kontrol', [apiController::class, 'update']);






// Route::get()