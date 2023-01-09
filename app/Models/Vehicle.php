<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $table = 'vehicles';

    protected $fillable = ['name','vehicles_driving_license_image','technical_inspection_image','customer_id'];

    protected $hidden = ['created_at','updated_at','deleted_at'];
}
