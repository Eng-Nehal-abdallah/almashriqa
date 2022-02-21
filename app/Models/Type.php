<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected  $table='type';
    public $timestamps= false;
    	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array

	 */
	protected $fillable = [
		'name_en','name_ar'
	];
}
