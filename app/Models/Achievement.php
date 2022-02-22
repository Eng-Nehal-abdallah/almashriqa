<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class achievement extends Model
{
    use HasFactory;
    protected  $table='achievement';
    public $timestamps= false;
              /*
    * The attributes that are mass assignable.
    *
    * @var array

    */
    protected $fillable = [
        'name_ar' ,
        'name_en' ,

        'details_en' ,
        'details_ar',
        'type',
        'pdf',
        'image',
        'id_types',

    'id_doctor',
    'id_leader',
    'id_leaderuni'
  ];
}
