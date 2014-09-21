<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanionsTable extends Migration {

	public function up()
	{
		Schema::create('companions', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('image');
			$table->text('description');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('companions');
	}

}
