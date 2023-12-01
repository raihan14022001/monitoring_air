<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelKontrol extends Model
{
    use HasFactory;
    protected $table = 'kontrol';
    protected $primaryKey = 'id';
    protected $fillable = ['status'];
}
