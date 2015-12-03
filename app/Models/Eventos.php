<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    
	public $table = "eventos";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "titulo",
		"tipo",
		"descricao",
		"local",
		"agenda",
		"idpromotor_fk",
		"status"
	];

	public static $rules = [
	    "titulo" => "required",
		"tipo" => "required",
		"descricao" => "required",
		"local" => "required",
		"agenda" => "required",
		"idpromotor_fk" => "required",
		"status" => "required"
	];

}
