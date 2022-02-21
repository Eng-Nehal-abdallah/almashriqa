<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    use HasFactory;
    protected  $table='fees';
    public $timestamps= false;
        /*
      * The attributes that are mass assignable.
      *
      * @var array

      */
      protected $fillable = ['tablecode','tablecode_ar'
    ];
}
