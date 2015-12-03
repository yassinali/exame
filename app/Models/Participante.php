<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    
	public $table = "participantes";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "nome",
		"apelido",
		"grauacademico",
		"empresa",
		"datanascimento",
		"sexo",
		"tel",
		"email"
	];

	public static $rules = [
	    "nome" => "required",
		"apelido" => "required",
		"grauacademico" => "required",
		"empresa" => "required",
		"datanascimento" => "required",
		"sexo" => "required",
		"tel" => "required",
		"email" => "required"
	];

}
