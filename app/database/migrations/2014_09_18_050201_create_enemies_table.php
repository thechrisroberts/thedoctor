<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnemiesTable extends Migration {

	public function up()
	{
		Schema::create('enemies', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('image');
			$table->text('description');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('enemies');
	}

}
