<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
   use HasFactory, HasTranslations;

    public $translatable = ['details'];

    protected $fillable = ['details','type'];
}
