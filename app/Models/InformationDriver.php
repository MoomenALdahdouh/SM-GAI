<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationDriver extends Model
{
    use HasFactory;
    protected $table = 'information_drivers';

    protected $fillable = [
        'certificate_precedents_Image',
        'license_type',
        'license_number',
        'driving_license_image',
        'driver_id_image',
        'is_commissioner',
        'commissioner_image',
        'insurance_image',
        'card_employment_image',
        'customer_id',
        'card_number'];

    protected $hidden = ['created_at','updated_at','deleted_at'];
}
