<?php

class RatingSeeder extends Seeder {

	public function run()
	{
		DB::table('ratings')->delete();

		// Going to randomize all our ratings for our users, so throw everything in
		// an array.
		$toRate = array(
			array('item' => Doctor::where('number', 9)->first(), 'type' => 'doctor'),
			array('item' => Doctor::where('number', 10)->first(), 'type' => 'doctor'),
			array('item' => Doctor::where('number', 11)->first(), 'type' => 'doctor'),
			array('item' => Doctor::where('number', 12)->first(), 'type' => 'doctor'),
			array('item' => Enemy::where('name', 'Cybermen')->first(), 'type' => 'enemy'),
			array('item' => Enemy::where('name', 'Daleks')->first(), 'type' => 'enemy'),
			array('item' => Enemy::where('name', 'Sontarans')->first(), 'type' => 'enemy'),
			array('item' => Enemy::where('name', 'The Silence')->first(), 'type' => 'enemy'),
			array('item' => Enemy::where('name', 'Weeping Angels')->first(), 'type' => 'enemy'),
			array('item' => Companion::where('name', 'Amy Pond')->first(), 'type' => 'companion'),
			array('item' => Companion::where('name', 'Captain Jack')->first(), 'type' => 'companion'),
			array('item' => Companion::where('name', 'Clara Oswald')->first(), 'type' => 'companion'),
			array('item' => Companion::where('name', 'Donna Noble')->first(), 'type' => 'companion'),
			array('item' => Companion::where('name', 'Martha Jones')->first(), 'type' => 'companion'),
			array('item' => Companion::where('name', 'Mickey Smith')->first(), 'type' => 'companion'),
			array('item' => Companion::where('name', 'River Song')->first(), 'type' => 'companion'),
			array('item' => Companion::where('name', 'Rory Williams')->first(), 'type' => 'companion'),
			array('item' => Companion::where('name', 'Rose Tyler')->first(), 'type' => 'companion'),
			array('item' => Companion::where('name', 'Wilfred Mott')->first(), 'type' => 'companion'),
			array('item' => Episode::where('season', 1)->where('episode', 1)->first(), 'type' => 'episode'),
			array('item' => Episode::where('season', 1)->where('episode', 6)->first(), 'type' => 'episode'),
			array('item' => Episode::where('season', 1)->where('episode', 10)->first(), 'type' => 'episode'),
			array('item' => Episode::where('season', 1)->where('episode', 12)->first(), 'type' => 'episode'),
			array('item' => Episode::where('season', 2)->where('episode', 5)->first(), 'type' => 'episode'),
			array('item' => Episode::where('season', 2)->where('episode', 12)->first(), 'type' => 'episode'),
			array('item' => Episode::where('season', 3)->where('episode', 9)->first(), 'type' => 'episode'),
			array('item' => Episode::where('season', 3)->where('episode', 10)->first(), 'type' => 'episode'),
			array('item' => Episode::where('season', 4)->where('episode', 4)->first(), 'type' => 'episode'),
			array('item' => Episode::where('season', 4)->where('episode', 13)->first(), 'type' => 'episode'),
			array('item' => Episode::where('season', 5)->where('episode', 3)->first(), 'type' => 'episode'),
			array('item' => Episode::where('season', 5)->where('episode', 4)->first(), 'type' => 'episode'),
			array('item' => Episode::where('season', 5)->where('episode', 12)->first(), 'type' => 'episode'),
			array('item' => Episode::where('season', 6)->where('episode', 1)->first(), 'type' => 'episode'),
			array('item' => Episode::where('season', 6)->where('episode', 10)->first(), 'type' => 'episode'),
			array('item' => Episode::where('season', 6)->where('episode', 13)->first(), 'type' => 'episode'),
			array('item' => Episode::where('season', 7)->where('episode', 5)->first(), 'type' => 'episode'),
			array('item' => Episode::where('season', 7)->where('episode', 12)->first(), 'type' => 'episode'),
			array('item' => Episode::where('season', 8)->where('episode', 2)->first(), 'type' => 'episode'),
		);

		$users = User::get();

		// Loop through our users
		foreach ($users as $user) {
			// Loop through things to be rated
			foreach ($toRate as $item) {
				$rating = rand(1, 5);

				Rating::create(array(
								   'user_id'   => $user->id,
								   'item_id'   => $item['item']->id,
								   'item_type' => $item['type'],
								   'rating'    => $rating
							   ));
			}
		}
	}
}