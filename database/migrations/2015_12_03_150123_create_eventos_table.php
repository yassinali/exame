<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('eventos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('titulo');
			$table->string('tipo');
			$table->text('descricao');
			$table->string('local');
			$table->text('agenda');
			$table->integer('idpromotor_fk');
			$table->integer('status');
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
		Schema::drop('eventos');
	}

}
