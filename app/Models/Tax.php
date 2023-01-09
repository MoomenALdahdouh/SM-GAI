<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Tax extends Model
{
    use HasFactory, HasTranslations, SoftDeletes;

    public $translatable = ['title', 'details'];

    protected $fillable = ['title','details','type','value'];
}
