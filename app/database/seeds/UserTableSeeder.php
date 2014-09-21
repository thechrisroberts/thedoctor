<?php

class UserTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->delete();

		User::create(array('email'    => 'chris@caddis.co',
						   'name'     => 'Chris Roberts',
						   'password' => Hash::make('SuperSecret')
					 ));

		User::create(array('email'    => 'john@thedoctor.is.in',
						   'name'     => 'John Smith',
						   'password' => Hash::make('SuperSecret')
					 ));

		User::create(array('email'    => 'jane@thedoctor.is.in',
						   'name'     => 'Jane Doe',
						   'password' => Hash::make('SuperSecret')
					 ));

		User::create(array('email'    => 'june@thedoctor.is.in',
						   'name'     => 'June July',
						   'password' => Hash::make('SuperSecret')
					 ));

		User::create(array('email'    => 'jimmy@thedoctor.is.in',
						   'name'     => 'Jimmy James',
						   'password' => Hash::make('SuperSecret')
					 ));

		User::create(array('email'    => 'jerry@thedoctor.is.in',
						   'name'     => 'Jerry James',
						   'password' => Hash::make('SuperSecret')
					 ));

		User::create(array('email'    => 'jessy@thedoctor.is.in',
						   'name'     => 'Jessy James',
						   'password' => Hash::make('SuperSecret')
					 ));

		User::create(array('email'    => 'coy@thedoctor.is.in',
						   'name'     => 'Coy James',
						   'password' => Hash::make('SuperSecret')
					 ));

		User::create(array('email'    => 'tj@thedoctor.is.in',
						   'name'     => 'T.J. James',
						   'password' => Hash::make('SuperSecret')
					 ));

		User::create(array('email'    => 'kevin@thedoctor.is.in',
						   'name'     => 'Kevin James',
						   'password' => Hash::make('SuperSecret')
					 ));
	}
}