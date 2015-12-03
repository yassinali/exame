<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participantes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome');
			$table->string('apelido');
			$table->string('grauacademico',3);
			$table->string('empresa');
			$table->date('datanascimento');
			$table->string('sexo',2);
			$table->integer('tel');
			$table->string('email');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('participantes');
	}

}
