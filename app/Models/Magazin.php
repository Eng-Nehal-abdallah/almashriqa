<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magazin extends Model
{
    use HasFactory;
    protected  $table='magazin';
    public $timestamps= false;
        /*
      * The attributes that are mass assignable.
      *
      * @var array

      */
      protected $fillable = [ 'details_en' ,'details_ar','tablecode',
    ];
}
