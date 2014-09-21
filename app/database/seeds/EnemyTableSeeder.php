<?php

class EnemyTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('enemies')
		  ->delete();

		DB::table('doctor_enemy')
		  ->delete();

		// Pull up the doctors to attach to companions
		$doctorNine   = Doctor::where('number', 9)
							  ->first();
		$doctorTen    = Doctor::where('number', 10)
							  ->first();
		$doctorEleven = Doctor::where('number', 11)
							  ->first();
		$doctorTwelve = Doctor::where('number', 12)
							  ->first();

		Enemy::create(array('name'        => 'Cybermen',
							'description' => 'Originally born on Earth’s twin planet Mondas, the Cybermen were created as the Mondasians replaced parts of their dying bodies with plastic and steel. Eventually they added emotional inhibitors, supressing all feelings – love, hate, even fear. Cybermen can convert humans wherever they go, and take orders from a Cyberleader, whose data can be downloaded to a drone if the leader is destroyed. Like the Daleks, the Cybermen have dogged the Doctor through space and time. He has prevented them destroying Earth’s weather system, getting their hands on the Nemesis statue and taking over Victorian London with their Cyber-King. The Tenth Doctor visited a parallel universe, where Cybus Industries had developed Cybermen to prolong John Lumic’s dwindling life.',
							'image'       => 'http://thedoctor.coderfaire/assets/img/enemies/cybermen.png'
					  ))
			 ->doctors()
			 ->attach([$doctorTen->id, $doctorEleven->id]);

		Enemy::create(array('name'        => 'Daleks',
							'description' => 'The Doctor first encountered the Daleks on the radiation-soaked planet of Skaro, waging war with the peaceful Thals. The Daleks were the mangled and mutated remains of the Kaled people, placed in metal war machines by the Kaled’s chief scientist Davros. Pursuing the Doctor across space and time, the Daleks invaded the Earth, developed the Reality Bomb and tried to imprison the Doctor in the Pandorica. They fought the Time Lords in The Last Great Time War – a conflict so powerful and destructive that the universe was said to convulse. In an effort to save reality, the Doctor used ‘the Moment’ to annihilate both races. But that wasn’t the end of the Daleks...',
							'image'       => 'http://thedoctor.coderfaire/assets/img/enemies/daleks.png'
					  ))
			 ->doctors()
			 ->attach([$doctorNine->id, $doctorTen->id, $doctorEleven->id, $doctorTwelve->id]);

		Enemy::create(array('name'        => 'Sontarans',
							'description' => 'An aggressive clone-warrior race from Sontar, who travel in spherical ships, the Sontarans were engaged in a war lasting many thousands of years with the Rutans. In pursuit of the advantage, Commander Linx of the Fifth Sontaran Battle Group tried to invade 13th century Earth, until repelled by the Third Doctor. Later meetings with the Doctor saw the Sontarans invading the Time Lord home planet of Gallifrey, forcing the Sixth Doctor to build them a time travel machine, and trying to covert Earth’s atmosphere into one suitable for warrior cloning using the ATMOS machines. Sarah Jane Smith later encountered – and defeated – the last survivor of that invasion, Commander Kaagh.',
							'image'       => 'http://thedoctor.coderfaire/assets/img/enemies/sontarans.png'
					  ))
			 ->doctors()
			 ->attach([$doctorTen->id, $doctorEleven->id]);

		Enemy::create(array('name'        => 'The Silence',
							'description' => 'Rather than a specific race, The Silence are a religious order. Their agents on Earth have been there since before the dawn of mankind, directing human evolution. They use post-hypnotic suggestion to make people who see them instantly forget their existence. They believe that silence must fall when the oldest Question in the universe is asked. It will be asked at “the fall of the Eleventh” on the Fields of Trenzalore, and is hidden in plain sight. As a result, the Silence have tried to stop the Doctor reaching Trenzalore. They used their agent Madame Kovarian to kidnap Melody Pond, and raised her as the Doctor’s perfect assassin. Despite the failure of this plan, the Silence remain at large, determined to stop the Question ever being asked.',
							'image'       => 'http://thedoctor.coderfaire/assets/img/enemies/the-silence.png'
					  ))
			 ->doctors()
			 ->attach([$doctorEleven->id]);

		Enemy::create(array('name'        => 'Weeping Angels',
							'description' => 'Known as “The Lonely Assassins”, the Weeping Angels are quantum-locked alien killers, as old as the universe itself. Little is known of their origins or culture. When observed, they freeze like stone, but in the blink of an eye they can move vast distances. The touch of an Angel hurls their victim back in time – allowing the Angel to feast on the energy of their unlived days. Initially, the Tenth Doctor encountered four Angels, who sent him back to 1969. He left clues for Sally Sparrow to find and help trap them – releasing him and the TARDIS. Later encounters have seen a whole mausoleum of statues, tiny cherubs and even the Statue of Liberty transformed into Weeping Angels. Both Amy and Rory were trapped by a Weeping Angel, when it sent them back to 1938 to live out their lives together. In the 51st Century, the Doctor trapped the Angels in a crack in time, erasing them from history.',
							'image'       => 'http://thedoctor.coderfaire/assets/img/enemies/weeping-angels.png'
					  ))
			 ->doctors()
			 ->attach([$doctorTen->id, $doctorEleven->id]);
	}
}