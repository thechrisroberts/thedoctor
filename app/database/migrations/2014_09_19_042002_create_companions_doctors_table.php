<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanionsDoctorsTable extends Migration {

	public function up()
	{
		Schema::create('companion_doctor', function($table) {
			$table->increments('id');
			$table->integer('companion_id');
			$table->integer('doctor_id');
		});
	}

	public function down()
	{
		Schema::drop('companion_doctor');
	}

}
