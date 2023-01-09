<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['date','time','estimated_price','details','status','type_id','customer_id','from_id','to_id','driver_id','order_request_id'];
    protected $hidden = ['updated_at','deleted_at'];

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }

    public function order_request_accept()
    {
        return $this->belongsTo(OrderRequests::class,'order_request_id');
    }

    public function driver()
    {
        return $this->belongsTo(Customer::class,'driver_id');
    }

    public function order_request()
    {
        return $this->hasMany(OrderRequests::class,'order_id');
    }

    public function type()
    {
        return $this->belongsTo(Types::class);
    }

    public function from_address()
    {
        return $this->belongsTo(Address::class,'from_id');
    }
    public function to_address()
    {
        return $this->belongsTo(Address::class,'to_id');
    }
}
