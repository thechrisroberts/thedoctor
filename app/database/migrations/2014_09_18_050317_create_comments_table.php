<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('comments', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('item_id');
			$table->enum('item_type', array('episode', 'doctor', 'companion', 'enemy'));
			$table->string('title');
			$table->text('content');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('comments');
	}

}
