<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{


    use HasFactory;
    protected  $table='doctors';
    public $timestamps= false;
    /*
    * The attributes that are mass assignable.
    *
    * @var array

    */
   protected $fillable = [
       'id','name_ar','name_en','details_ar','details_en','notes_en' ,'id_department','mother_name_en','darcode','local' ,
       'mother_name_ar', 'comrades','country_en','country_en','country_ar','Nationality_en','Nationality_ar','shift_en','shift_ar',
       'type_hirement_en','type_hirement_ar','private_specific_en','private_specific_ar','public_specific_en','public_specific_ar',
       'country_certified_en','bac_certified_ar','bac_certified_en','mag_certified_ar','mag_certified_en','date_certified','country_certified_ar',
       'notes_ar','details_en','email','posiotion_en','position_ar','gender_ar','gender_en','certified_ar','certified_en','facutly_certified_en',
       'facutly_certified_ar','university_certified_ar','birthday','university_certified_en','details_en','id_facutly','details_ar','date_hirement','grade_en'
   ];
}
