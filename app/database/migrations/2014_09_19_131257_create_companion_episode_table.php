<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanionEpisodeTable extends Migration {

	public function up()
	{
		Schema::create('companion_episode', function($table) {
			$table->increments('id');
			$table->integer('companion_id');
			$table->integer('episode_id');
		});
	}

	public function down()
	{
		Schema::drop('companion_episode');
	}

}
