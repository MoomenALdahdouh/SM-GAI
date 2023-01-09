<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Customer extends Model
{
    use HasFactory, SoftDeletes,HasApiTokens;

    protected $table = 'customers';

    protected $fillable = ['name','email','phone_number','fcm','status','city_id','image','password','type','verify_code','updated_at'];
    protected $hidden = ['created_at','deleted_at','password'];

    public function information_driver()
    {
        return $this->hasOne(InformationDriver::class,'customer_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function vehicle()
    {
        return $this->hasOne(Vehicle::class,'customer_id');
    }

    public function ratting()
    {
        return $this->hasMany(Ratings::class,'driver_id');
    }

    public function avgRating()
    {
        return $this->ratting->avg('rating_value');
    }

}
