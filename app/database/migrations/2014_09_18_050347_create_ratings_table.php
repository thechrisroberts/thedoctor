<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration {

	public function up()
	{
		Schema::create('ratings', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('item_id');
			$table->enum('item_type', array('episode', 'doctor', 'companion', 'enemy'));
			$table->integer('rating');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('ratings');
	}

}
