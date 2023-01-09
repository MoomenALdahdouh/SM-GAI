<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ratings extends Model
{
    use HasFactory;

    protected $fillable = ['driver_id','customer_id','order_id','rating_value'];
    protected $hidden = ['created_at','updated_at'];



//    public function driver()
//    {
//        return $this->belongsTo(customer::class,'driver_id');
//    }


}
