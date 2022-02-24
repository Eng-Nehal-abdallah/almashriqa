<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    use HasFactory;
    protected  $table='pdf';
    public $timestamps= false;
        /*
      * The attributes that are mass assignable.
      *
      * @var array

      */
      protected $fillable = [

    'name_ar' ,
    'name_en' ,
    'pdf',
    ];
}
