<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyUsersTable extends Migration {

	public function up()
	{
		Schema::table('users', function($table) {
			$table->string('website');
		});
	}

	public function down()
	{
		Schema::table('users', function($table) {
			$table->dropColumn('website');
		});
	}

}
