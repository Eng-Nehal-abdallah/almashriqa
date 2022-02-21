<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facutly extends Model
{
    use HasFactory;
    protected  $table='facutly';
  public $timestamps= false;
  	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array

	 */
	protected $fillable = [
		'name_ar','name_en','about_facutly_ar','about_facutly_en','message_ar' ,'message_en','image','goal_ar','message_dean_ar' ,'goal_en', 'message_dean_en','color',
	];
}
