<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected  $table='images';
    public $timestamps= false;
    	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array

	 */
	protected $fillable = ['id','image','id_image','id_achievement','id_activity',
];
}

