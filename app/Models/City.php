<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class City extends Model
{
    use HasFactory, HasTranslations, SoftDeletes;

    public $translatable = ['name'];

    protected $fillable = ['name'];
    protected $hidden = ['created_at','updated_at','deleted_at'];
}
