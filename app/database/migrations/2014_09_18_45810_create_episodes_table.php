<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpisodesTable extends Migration {

	public function up()
	{
		Schema::create('episodes', function($table) {
			$table->increments('id');
			$table->integer('season');
			$table->integer('episode');
			$table->string('name');
			$table->string('image');
			$table->text('description');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('episodes');
	}

}
