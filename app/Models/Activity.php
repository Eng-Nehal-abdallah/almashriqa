<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected  $table='activities';
    public $timestamps= false;
          /*
    * The attributes that are mass assignable.
    *
    * @var array

    */
    protected $fillable = [
        'name_ar' ,
        'name_en' ,
        'id_facutly',
        'details_en' ,
        'details_ar',
        'video',
        'image',
    'id_department',
  ];
}
