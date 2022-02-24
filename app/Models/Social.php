<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{    use HasFactory;
    protected  $table='socialmedia';
    public $timestamps= false;
    /*
    * The attributes that are mass assignable.
    *
    * @var array

    */
   protected $fillable = [
       'name_ar','name_en','link','id_doctor','id_leader','id_leaderuni'
   ];
}
