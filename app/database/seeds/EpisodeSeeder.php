<?php

class EpisodeSeeder extends Seeder {

	public function run()
	{
		DB::table('episodes')->delete();
		DB::table('doctor_episode')->delete();
		DB::table('companion_episode')->delete();
		DB::table('enemy_episode')->delete();

		// Pull up doctors, companions, and enemies to attach to episodes
		$doctorNine   = Doctor::where('number', 9)->first();
		$doctorTen    = Doctor::where('number', 10)->first();
		$doctorEleven = Doctor::where('number', 11)->first();
		$doctorTwelve = Doctor::where('number', 12)->first();

		$cybermen  = Enemy::where('name', 'Cybermen')->first();
		$daleks    = Enemy::where('name', 'Daleks')->first();
		$sontarans = Enemy::where('name', 'Sontarans')->first();
		$silence   = Enemy::where('name', 'The Silence')->first();
		$angels    = Enemy::where('name', 'Weeping Angels')->first();

		$amy     = Companion::where('name', 'Amy Pond')->first();
		$jack    = Companion::where('name', 'Captain Jack')->first();
		$clara   = Companion::where('name', 'Clara Oswald')->first();
		$donna   = Companion::where('name', 'Donna Noble')->first();
		$martha  = Companion::where('name', 'Martha Jones')->first();
		$mickey  = Companion::where('name', 'Mickey Smith')->first();
		$river   = Companion::where('name', 'River Song')->first();
		$rory    = Companion::where('name', 'Rory Williams')->first();
		$rose    = Companion::where('name', 'Rose Tyler')->first();
		$wilfred = Companion::where('name', 'Wilfred Mott')->first();

		$episode = Episode::create(array('season'      => 1,
										 'episode'     => 1,
										 'name'        => 'Rose',
										 'image'       => 'http://thedoctor.coderfaire/assets/img/episodes/1.1.jpg',
										 'description' => 'Rose Tyler believes she is living another day of her "ordinary" life, but after being threatened by Autons (living plastic) controlled by the Nestene Consciousness, she meets the Ninth Doctor.'));

		$episode->doctors()->attach([$doctorNine->id]);
		$episode->companions()->attach([$rose->id, $mickey->id]);

		$episode = Episode::create(array('season'      => 1,
										 'episode'     => 6,
										 'name'        => 'Dalek',
										 'image'       => 'http://thedoctor.coderfaire/assets/img/episodes/1.6.jpg',
										 'description' => 'The Ninth Doctor and Rose Tyler arrive in 2012 to answer a distress signal and meet a collector of alien artefacts who has one living specimen. However, the Doctor is horrified to find out that the creature is a member of a race he thought was destroyed: a Dalek.'));

		$episode->doctors()->attach([$doctorNine->id]);
		$episode->companions()->attach([$rose->id]);
		$episode->enemies()->attach([$daleks->id]);

		$episode = Episode::create(array('season'      => 1,
										 'episode'     => 10,
										 'name'        => 'The Doctor Dances',
										 'image'       => 'http://thedoctor.coderfaire/assets/img/episodes/1.10.jpg',
										 'description' => 'The Child\'s plague is spreading throughout wartime London, and its zombie army is on the march. The Ninth Doctor and Rose form an alliance with intergalactic con man Captain Jack, but find themselves trapped in the abandoned hospital. They head to the crash site of Jack\'s supposed space junk and discover the ground zero for the mysterious plague.'));

		$episode->doctors()->attach([$doctorNine->id]);
		$episode->companions()->attach([$rose->id, $jack->id]);

		$episode = Episode::create(array('season'      => 1,
										 'episode'     => 12,
										 'name'        => 'Bad Wolf',
										 'image'       => 'http://thedoctor.coderfaire/assets/img/episodes/1.12.jpg',
										 'description' => 'Separated and with no TARDIS, the Ninth Doctor, Rose, and Jack have to fight for their lives on board the Game Station, but a far more dangerous threat is lurking, just out of sight. The Doctor realises that the entire human race has been blinded to the threat on its doorstep, and Armageddon is fast approaching.'));

		$episode->doctors()->attach([$doctorNine->id]);
		$episode->companions()->attach([$rose->id, $mickey->id, $jack->id]);
		$episode->enemies()->attach([$daleks->id]);

		$episode = Episode::create(array('season'      => 2,
										 'episode'     => 5,
										 'name'        => 'Rise of the Cybermen',
										 'image'       => 'http://thedoctor.coderfaire/assets/img/episodes/2.5.jpg',
										 'description' => 'On a parallel Earth, a deadly new version of the Doctor\'s old enemy is about to be reborn.'));

		$episode->doctors()->attach([$doctorTen->id]);
		$episode->companions()->attach([$rose->id, $mickey->id]);
		$episode->enemies()->attach([$cybermen->id]);

		$episode = Episode::create(array('season'      => 2,
										 'episode'     => 12,
										 'name'        => 'Army of Ghosts',
										 'image'       => 'http://thedoctor.coderfaire/assets/img/episodes/2.12.jpg',
										 'description' => 'Rose and the Tenth Doctor return to modern-day London to find a mysterious epidemic of ghosts all over the world. As the Doctor searches Torchwood Tower to find answers, something sinister lurks in the building.'));

		$episode->doctors()->attach([$doctorTen->id]);
		$episode->companions()->attach([$rose->id, $mickey->id]);
		$episode->enemies()->attach([$daleks->id, $cybermen->id]);

		$episode = Episode::create(array('season'      => 3,
										 'episode'     => 9,
										 'name'        => 'The Family of Blood',
										 'image'       => 'http://thedoctor.coderfaire/assets/img/episodes/3.9.jpg',
										 'description' => '1913, and war comes to England a year early as the terrifying Family hunt for the Tenth Doctor.'));

		$episode->doctors()->attach([$doctorTen->id]);
		$episode->companions()->attach([$martha->id]);

		$episode = Episode::create(array('season'      => 3,
										 'episode'     => 10,
										 'name'        => 'Blink',
										 'image'       => 'http://thedoctor.coderfaire/assets/img/episodes/3.10.jpg',
										 'description' => 'In an abandoned house, the Weeping Angels wait. The only hope to stop them is a young woman named Sally Sparrow and her friend Larry Nightingale. The only catch: The Weeping Angels can move in the blink of an eye. To defeat the ruthless enemy — with only a half of a conversation from the Tenth Doctor as help — the one rule is this: don\'t turn your back, don\'t look away and don\'t blink!'));

		$episode->doctors()->attach([$doctorTen->id]);
		$episode->companions()->attach([$martha->id]);
		$episode->enemies()->attach([$angels->id]);

		$episode = Episode::create(array('season'      => 4,
										 'episode'     => 4,
										 'name'        => 'The Sontaran Stratagem',
										 'image'       => 'http://thedoctor.coderfaire/assets/img/episodes/4.4.png',
										 'description' => 'Fifty-two people across the world in eleven different time zones die at the exact same time. The only connection: they all have ATMOS installed in their vehicles. Martha Jones, now a UNIT medic, summons the Tenth Doctor back to modern-day Earth to help figure out why, but an old enemy lies in wait...'));

		$episode->doctors()->attach([$doctorTen->id]);
		$episode->companions()->attach([$martha->id, $donna->id]);
		$episode->enemies()->attach([$sontarans->id]);

		$episode = Episode::create(array('season'      => 4,
										 'episode'     => 13,
										 'name'        => 'Journey\'s End',
										 'image'       => 'http://thedoctor.coderfaire/assets/img/episodes/4.13.jpg',
										 'description' => 'All hell has broken loose! Davros and the New Dalek Empire prepare to detonate a bomb that will wipe out all of existence. The Tenth Doctor is helpless, and the TARDIS faces destruction. The only hope lies with the Doctor\'s companions — the "Children of Time" — but Dalek Caan predicts that one will die...'));

		$episode->doctors()->attach([$doctorTen->id]);
		$episode->companions()->attach([$rose->id, $donna->id, $martha->id, $jack->id, $mickey->id, $wilfred->id]);
		$episode->enemies()->attach([$daleks->id]);

		$episode = Episode::create(array('season'      => 5,
										 'episode'     => 3,
										 'name'        => 'Victory of the Daleks',
										 'image'       => 'http://thedoctor.coderfaire/assets/img/episodes/5.3.jpg',
										 'description' => 'Receiving a call for help from his old friend Winston Churchill, the Eleventh Doctor and Amy Pond head for World War II to assist the Prime Minister. Once there, though, the Doctor reunites with his greatest enemies, the scum of the universe — the Daleks. But why are these survivors of the Medusa Cascade War passing themselves off as man-made weapons? And why don\'t they recognise the Doctor? What could these "Ironsides" have planned?'));

		$episode->doctors()->attach([$doctorEleven->id]);
		$episode->companions()->attach([$amy->id]);
		$episode->enemies()->attach([$daleks->id]);

		$episode = Episode::create(array('season'      => 5,
										 'episode'     => 4,
										 'name'        => 'The Time of Angels',
										 'image'       => 'http://thedoctor.coderfaire/assets/img/episodes/5.4.jpg',
										 'description' => 'The enigmatic River Song hurtles back into the Eleventh Doctor\'s life, but she\'s not the only familiar face returning — the Weeping Angels are back! Following River\'s calling card, the Doctor is recruited to help track down the last of the Angels, which has escaped from the Byzantium starliner and into the terrifying Maze of the Dead.'));

		$episode->doctors()->attach([$doctorEleven->id]);
		$episode->companions()->attach([$amy->id, $river->id]);
		$episode->enemies()->attach([$angels->id]);

		$episode = Episode::create(array('season'      => 5,
										 'episode'     => 12,
										 'name'        => 'The Pandorica Opens',
										 'image'       => 'http://thedoctor.coderfaire/assets/img/episodes/5.12.jpg',
										 'description' => 'A Van Gogh painting ferried across thousands of years offering a terrifying prophecy, a message on the oldest cliff-face in the universe and a love that lasts a thousand years: in 102 AD England, Romans receive a surprise visit from Cleopatra. Nearby, Stonehenge hides a legendary prison-box. As it slowly unlocks from the inside, terrible forces gather in the heavens. The fates are closing around the TARDIS. The Pandorica, which contains the most dangerous threat in the Universe, is opening. Only one thing is certain: "The Pandorica will open... Silence will fall".'));

		$episode->doctors()->attach([$doctorEleven->id]);
		$episode->companions()->attach([$amy->id, $rory->id, $river->id]);
		$episode->enemies()->attach([$silence->id]);

		$episode = Episode::create(array('season'      => 6,
										 'episode'     => 1,
										 'name'        => 'The Impossible Astronaut',
										 'image'       => 'http://thedoctor.coderfaire/assets/img/episodes/6.1.jpg',
										 'description' => 'Amy Pond, Rory Williams, River Song and the Eleventh Doctor receive a mysterious summons that takes them on an adventure to 21st century Utah and Florida in 1969. Along the way they meet Richard Nixon, president of the United States of America, and former FBI agent Canton Delaware.'));

		$episode->doctors()->attach([$doctorEleven->id]);
		$episode->companions()->attach([$amy->id, $rory->id, $river->id]);
		$episode->enemies()->attach([$silence->id]);

		$episode = Episode::create(array('season'      => 6,
										 'episode'     => 10,
										 'name'        => 'The Girl Who Waited',
										 'image'       => 'http://thedoctor.coderfaire/assets/img/episodes/6.10.jpg',
										 'description' => 'The Eleventh Doctor, Rory Williams and Amy Pond land on Apalapucia in the middle of a plague. Amy is left behind, and the Doctor and Rory must save her...but time for Amy is running at a different speed.'));

		$episode->doctors()->attach([$doctorEleven->id]);
		$episode->companions()->attach([$amy->id, $rory->id]);

		$episode = Episode::create(array('season'      => 6,
										 'episode'     => 13,
										 'name'        => 'The Wedding of River Song',
										 'image'       => 'http://thedoctor.coderfaire/assets/img/episodes/6.13.jpg',
										 'description' => 'The Eleventh Doctor is prepared to meet his death at Lake Silencio. However, all of history is happening at once. What is happening and who is responsible?'));

		$episode->doctors()->attach([$doctorEleven->id]);
		$episode->companions()->attach([$amy->id, $rory->id, $river->id]);
		$episode->enemies()->attach([$silence->id]);

		$episode = Episode::create(array('season'      => 7,
										 'episode'     => 5,
										 'name'        => 'The Angels Take Manhattan',
										 'image'       => 'http://thedoctor.coderfaire/assets/img/episodes/7.5.jpg',
										 'description' => 'A simple trip to 2012 New York goes horribly wrong when the Eleventh Doctor\'s companion, Rory Williams, is sent back to the 1930s by the Weeping Angels. There, he finds that his daughter, River Song, is investigating the Angels, as Manhattan has become their hunting grounds. The Doctor and Amy Pond must find Rory before it is too late, but they soon find that not every point in time can be changed. And here, the Doctor must face the one thing he has been dreading — a final farewell to the Ponds.'));

		$episode->doctors()->attach([$doctorEleven->id]);
		$episode->companions()->attach([$amy->id, $rory->id, $river->id]);
		$episode->enemies()->attach([$angels->id]);

		$episode = Episode::create(array('season'      => 7,
										 'episode'     => 12,
										 'name'        => 'Nightmare in Silver',
										 'image'       => 'http://thedoctor.coderfaire/assets/img/episodes/7.12.jpg',
										 'description' => 'The Eleventh Doctor takes his companion, Clara Oswald, and her wards, Angie and Artie, to the biggest amusement park, Hedgewick\'s World of Wonders. The theme park is empty, occupied by a "punishment platoon" and a lone impresario with empty Cyberman shells as exhibits. The Doctor decides to stay a while, however, to investigate strange insect creatures that are roaming the park. But these insects are really machines seeking to convert the life forms on Hedgewick\'s World into the newest generation of the ever-upgrading menace...'));

		$episode->doctors()->attach([$doctorEleven->id]);
		$episode->companions()->attach([$clara->id]);
		$episode->enemies()->attach([$cybermen->id]);

		$episode = Episode::create(array('season'      => 8,
										 'episode'     => 2,
										 'name'        => 'Into the Dalek',
										 'image'       => 'http://thedoctor.coderfaire/assets/img/episodes/8.2.jpg',
										 'description' => 'Surrounded by his greatest enemies, the newest Doctor will journey into the most dangerous place in all of the universe. With the limits of his compassion being tested, the Doctor will be forced to ask a question about himself that he doesn\'t know: "Am I a good man?"'));

		$episode->doctors()->attach([$doctorTwelve->id]);
		$episode->companions()->attach([$clara->id]);
		$episode->enemies()->attach([$daleks->id]);
	}
}