<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected  $table='exam';
    public $timestamps= false;
    	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array

	 */
	protected $fillable = ['lecture','day','id_faulty','id_department'
];
}
