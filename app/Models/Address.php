<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['latitude','longitude','region','city_id'];
    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

}
