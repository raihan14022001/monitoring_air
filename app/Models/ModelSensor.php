<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSensor extends Model
{
    use HasFactory;

    protected $table = 'sensor';
    protected $primaryKey = 'id';
    protected $filable = 'tinggi';

}
