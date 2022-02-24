<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected  $table='video';
    public $timestamps= false;
    	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array

	 */
	protected $fillable = ['id','video','id_image',
];
}

