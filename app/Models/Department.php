<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
  protected  $table='department';
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
  'color',
  'image',  ];
}
