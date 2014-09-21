<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorEnemyTable extends Migration {

	public function up()
	{
		Schema::create('doctor_enemy', function($table) {
			$table->increments('id');
			$table->integer('doctor_id');
			$table->integer('enemy_id');
		});
	}

	public function down()
	{
		Schema::drop('doctor_enemy');
	}

}
