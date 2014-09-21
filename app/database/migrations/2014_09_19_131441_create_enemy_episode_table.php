<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnemyEpisodeTable extends Migration {

	public function up()
	{
		Schema::create('enemy_episode', function($table) {
			$table->increments('id');
			$table->integer('enemy_id');
			$table->integer('episode_id');
		});
	}

	public function down()
	{
		Schema::drop('enemy_episode');
	}

}
