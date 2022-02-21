<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentfirst extends Model
{
    use HasFactory;
    protected  $table='studentfirst';
    public $timestamps= false;
    /*
    * The attributes that are mass assignable.
    *
    * @var array

    */
   protected $fillable = [
       'name_ar','name_en','level_ar','level_en','grade_en','grade_ar','image','id_facutly','id_department',
   ];
}
