<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;
    protected  $table='lecture';
    public $timestamps= false;
    	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array

	 */
	protected $fillable = ['id','table','day','id_department','id_facutly',
];
}
