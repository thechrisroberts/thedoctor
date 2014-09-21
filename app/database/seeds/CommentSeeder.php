<?php

class CommentSeeder extends Seeder {

	public function run()
	{
		DB::table('comments')->delete();

		// Going to randomize all our ratings for our users, so throw everything in
		// an array.
		$toComment = array(
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

		$titles = array(
			'Fabulous!',
			'My favorite!',
			'This stank more than anything has stunk before',
			'This one put me to sleep',
			'Stay away',
			'Not impressed',
			'Vote for Pedro',
			'Cheap Wristwatch',
			'I hope to see this again',
			'Blew my mind',
			'Ripoff',
			'The old one was better',
			'Better than ever',
		);

		$comments = array(
			"It's time to play the music. It's time to light the lights. It's time to meet the Muppets on the Muppet Show tonight. Movin' on up to the east side. We finally got a piece of the pie. Doin' it our way. There's nothing we wont try. Never heard the word impossible. This time there's no stopping us. The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. I have always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you. Straightnin' the curves. Flatnin' the hills Someday the mountain might get ‘em but the law never will. Well the first thing you know ol' Jeds a millionaire. Kinfolk said Jed move away from there. black gold.\" Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill.",
			"But they got diff'rent strokes. It takes diff'rent strokes - it takes diff'rent strokes to move the world. You wanna be where you can see our troubles are all the same. You wanna be where everybody knows Your name. Then one day he was shootin' at some food and up through the ground came a bubblin' crude. Oil that is It's time to put on makeup. It's time to dress up right. It's time to raise the curtain on the Muppet Show tonight. They were four men living all together yet they were all alone. Come and listen to a story about a man named Jed - a poor mountaineer barely kept his family fed. The year is 1987 and NASA launches the last of Americas deep space probes. The Brady Bunch the Brady Bunch that's the way we all became the Brady Bunch? It's time to put on makeup. It's time to dress up right. It's time to raise the curtain on the Muppet Show tonight. Here's the story of a lovely lady who was bringing up three very lovely girls. Here he comes Here comes Speed Racer. He's a demon on wheels!",
			"Fleeing from the Cylon tyranny the last Battlestar – Galactica - leads a rag-tag fugitive fleet on a lonely quest - a shining planet known as Earth. So lets make the most of this beautiful day. Since we're together The movie star the professor and Mary Ann here on Gilligans Isle. Wouldn't you like to get away? Sometimes you want to go where everybody knows your name. And they're always glad you came. We're gonna do it. On your mark get set and go now. Got a dream and we just know now we're gonna make our dream come true. Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong. Rockin' and rollin' all week long. Sunny Days sweepin' the clouds away. On my way to where the air is sweet. Can you tell me how to get how to get to Sesame Street? And if you threw a party - invited everyone you knew. You would see the biggest gift would be from me and the card attached would say thank you for being a friend. Well we're movin' on up to the east side. To a deluxe apartment in the sky. Knight Rider: A shadowy flight into the dangerous world of a man who does not exist. Believe it or not I'm walking on air. I never thought I could feel so free.",
			"Baby if you've ever wondered - wondered whatever became of me. I'm living on the air in Cincinnati. Cincinnati WKRP. Didn't need no welfare states. Everybody pulled his weight. Gee our old Lasalle ran great. Those were the days. And if you threw a party - invited everyone you knew. You would see the biggest gift would be from me and the card attached would say thank you for being a friend. Come and listen to a story about a man named Jed - a poor mountaineer barely kept his family fed! One two three four five six seven eight Sclemeel schlemazel hasenfeffer incorporated. black gold But they got diff'rent strokes. It takes diff'rent strokes - it takes diff'rent strokes to move the world.",
			"All of them had hair of gold like their mother the youngest one in curls! All of them had hair of gold like their mother the youngest one in curls. Believe it or not I'm walking on air. I never thought I could feel so free. Just two good ol' boys Never meanin' no harm. Beats all you've ever saw been in trouble with the law since the day they was born. The ship set ground on the shore of this uncharted desert isle with Gilligan the Skipper too the millionaire and his wife. Doin' it our way. Nothin's gonna turn us back now. Straight ahead and on the track now. We're gonna make our dreams come true. If you have a problem if no one else can help and if you can find them maybe you can hire The A-Team!",
			"If you have a problem if no one else can help and if you can find them maybe you can hire The A-Team. But they got diff'rent strokes. It takes diff'rent strokes - it takes diff'rent strokes to move the world. Now the world don't move to the beat of just one drum. What might be right for you may not be right for some.",
			"Were gonna do it. Give us any chance well take it. Give us any rule we'll break it. We're gonna make our dreams come true. Why do we always come here? I guess well never know. Its like a kind of torture to have to watch the show.",
			"black gold Why do we always come here? I guess well never know. Its like a kind of torture to have to watch the show. Here's the story of a lovely lady who was bringing up three very lovely girls. They were four men living all together yet they were all alone. Maybe you and me were never meant to be. But baby think of me once in awhile. I'm at WKRP in Cincinnati. The Brady Bunch the Brady Bunch that's the way we all became the Brady Bunch. Believe it or not I'm walking on air. I never thought I could feel so free. And we'll do it our way yes our way. Make all our dreams come true for me and you. Come and knock on our door. We've been waiting for you. Where the kisses are hers and hers and his. Three's company too? Texas tea., Till the one day when the lady met this fellow and they knew it was much more than a hunch. It's a beautiful day in this neighborhood a beautiful day for a neighbor. Would you be mine? Could you be mine? Its a neighborly day in this beautywood a neighborly day for a beauty. Would you be mine? Could you be mine. On the most sensational inspirational celebrational Muppetational… This is what we call the Muppet Show.",
			"The movie star the professor and Mary Ann here on Gilligans Isle. They're creepy and they're kooky mysterious and spooky. They're all together ooky the Addams Family. They call him Flipper Flipper faster than lightning. No one you see is smarter than he. The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. So get a witch's shawl on a broomstick you can crawl on. Were gonna pay a call on the Addams Family. Now the world don't move to the beat of just one drum. What might be right for you may not be right for some. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Doin' it our way. There's nothing we wont try. Never heard the word impossible. This time there's no stopping us.",
			"Movin' on up to the east side. We finally got a piece of the pie. Come and knock on our door. We've been waiting for you. Where the kisses are hers and hers and his. Three's company too. Just two good ol' boys Wouldn't change if they could. Fightin' the system like a true modern day Robin Hood. Space. The final frontier. These are the voyages of the Starship Enterprise. Doin' it our way. Nothin's gonna turn us back now. Straight ahead and on the track now. We're gonna make our dreams come true. Michael Knight a young loner on a crusade to champion the cause of the innocent. The helpless. The powerless in a world of criminals who operate above the law.",
			"Texas tea. I have always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you? No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. black gold. And when the odds are against him and their dangers work to do. You bet your life Speed Racer he will see it through. we might as well say... Would you be mine? Could you be mine? Won't you be my neighbor. One two three four five six seven eight Sclemeel schlemazel hasenfeffer incorporated., It's time to put on makeup. It's time to dress up right. It's time to raise the curtain on the Muppet Show tonight!",
			"Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong. Rockin' and rollin' all week long. The mate was a mighty sailin' man the Skipper brave and sure. Five passengers set sail that day for a three hour tour a three hour tour.",
			"Knight Rider: A shadowy flight into the dangerous world of a man who does not exist. It's time to put on makeup. It's time to dress up right. It's time to raise the curtain on the Muppet Show tonight. The Brady Bunch the Brady Bunch that's the way we all became the Brady Bunch. Just two good ol' boys Wouldn't change if they could. Fightin' the system like a true modern day Robin Hood.",
			"So this is the tale of our castaways they're here for a long long time. They'll have to make the best of things its an uphill climb. It's time to play the music. It's time to light the lights. It's time to meet the Muppets on the Muppet Show tonight. It's time to put on makeup. It's time to dress up right. It's time to raise the curtain on the Muppet Show tonight. Here's the story of a lovely lady who was bringing up three very lovely girls. Baby if you've ever wondered - wondered whatever became of me. I'm living on the air in Cincinnati. Cincinnati WKRP.",
			"These days are all Happy and Free. These days are all share them with me oh baby. The ship set ground on the shore of this uncharted desert isle with Gilligan the Skipper too the millionaire and his wife. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Their house is a museum where people come to see ‘em. They really are a scream the Addams Family. And if you threw a party - invited everyone you knew. You would see the biggest gift would be from me and the card attached would say thank you for being a friend?\" Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong. Rockin' and rollin' all week long.",
		);

		$users = User::get();

		// Loop through our users
		foreach ($users as $user) {
			// Loop through things to be rated
			foreach ($toComment as $item) {
				$title   = $titles[rand(0, (sizeof($titles) - 1))];
				$comment = $comments[rand(0, (sizeof($comments) - 1))];

				Comment::create(array(
									'user_id'   => $user->id,
									'item_id'   => $item['item']->id,
									'item_type' => $item['type'],
									'title'     => $title,
									'content'   => $comment
								));
			}
		}
	}
}