<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class promotores extends Model
{
    
	public $table = "promotores";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "nome",
		"apelido",
		"telf"
	];

	public static $rules = [
	    "nome" => "required",
		"apelido" => "required",
		"telf" => "required"
	];

}
