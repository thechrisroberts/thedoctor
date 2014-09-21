<?php

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('DoctorTableSeeder');
		$this->call('CompanionTableSeeder');
		$this->call('EnemyTableSeeder');
		$this->call('EpisodeSeeder');
		$this->call('RatingSeeder');
		$this->call('CommentSeeder');

	}

}
