<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration {

	public function up()
	{
		Schema::create('doctors', function($table) {
			$table->increments('id');
			$table->integer('number');
			$table->string('name');
			$table->string('image');
			$table->text('description');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('doctors');
	}

}
