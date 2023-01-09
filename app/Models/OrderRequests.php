<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderRequests extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['driver_id', 'order_id', 'price', 'tax'];
    protected $hidden = ['created_at', 'updated_at'];


    public function driver()
    {
        return $this->belongsTo(Customer::class, 'driver_id');
    }


    public function drivers_data()
    {

        $taxs = json_decode($this->tax, true);
        $price_with_tax = 0;
        if ($taxs)
            foreach ($taxs as $tax)
                $price_with_tax += cal_percentage($this->price, $tax['value']);

        $data = [
            'id' => $this->id,
            'price' => $this->price,
            'price_with_tax' => $price_with_tax+$this->price,
            'driver' => [
                "id" => $this->driver->id,
                "name" => $this->driver->name,
                "email" => $this->driver->email,
                "phone_number" => $this->driver->phone_number,
                "fcm" => $this->driver->fcm,
                "image" => $this->driver->image != null ? url('storage/' . $this->driver->image) : null,
                "status" => $this->driver->status,
                "rating" => $this->driver->avgRating() ?? 0,
                'city'=>[
                    'id' => $this->driver->city->id,
                    'name' => $this->driver->city->name,
                ]
            ]
        ];
        return $data;
    }
}
