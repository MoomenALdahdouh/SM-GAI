<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    protected $fillable = ['complaint_details','is_reply','reply_details','customer_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
