<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorEpisodeTable extends Migration {

	public function up()
	{
		Schema::create('doctor_episode', function($table) {
			$table->increments('id');
			$table->integer('doctor_id');
			$table->integer('episode_id');
		});
	}

	public function down()
	{
		Schema::drop('doctor_episode');
	}

}
