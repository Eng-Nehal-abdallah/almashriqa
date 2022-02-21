<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected  $table='subject';
    public $timestamps= false;
    /*
    * The attributes that are mass assignable.
    *
    * @var array

    */
   protected $fillable = [
       'name_ar','name_en','level_ar','level_en','pdf','link','code','id_facutly','id_department','id_doctor','type',
   ];
}
