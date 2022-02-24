<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mash extends Model
{
    use HasFactory;
    protected  $table='mash';
    public $timestamps= false;
    	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
     *  'title_image2_ar' => request('title_image2_ar'),


	 */
	protected $fillable = [
		'abstract_title_ar','abstract_title_en','class','abstract_small_ar','abstract_small_en',
        'abstract_details_ar','abstract_details_en','title_image2_en','small_image2_ar','small_image2_en' ,
        'details_image2_ar' ,'details_image2_en',
        'title_image1_en','small_image1_ar','small_image1_en' ,'details_image1_ar' ,'details_image1_en',
        'strategy_en','strategy_ar','fees_ar','fees_en' ,
        'room','students','leaderimage','pdf',
	];
}
