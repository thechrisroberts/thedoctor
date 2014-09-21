<?php

class CompanionTableSeeder extends Seeder {

	public function run()
	{
		DB::table('companions')->delete();

		DB::table('companion_doctor')->delete();

		// Pull up the doctors to attach to companions
		$doctorNine   = Doctor::where('number', 9)->first();
		$doctorTen    = Doctor::where('number', 10)->first();
		$doctorEleven = Doctor::where('number', 11)->first();
		$doctorTwelve = Doctor::where('number', 12)->first();

		Companion::create(array('name'        => 'Amy Pond',
								'description' => 'Seven-year old Amelia Pond is visited one night by a mad man in box who eats fish fingers and custard, and who examines the frightening crack in her wall. She waits for him to return. For twelve years. When the “raggedy man” came back, Amy embarked on series of adventures with him, on the eve of her wedding to Rory Williams. The couple later travelled together, got married – an event the Doctor attended only after Amy remembered him back into existence – and had a daughter, Melody. In Amy’s own words, she went to sea and fought pirates, fell in love with a man who waited 2000 years to keep her safe, gave hope to Vincent van Gogh, and saved a whale in outer space. Touched by a Weeping Angel, Amy was catapulted back to 1938, where she lived a happy life with Rory and adopted a son.',
								'image'       => 'http://thedoctor.coderfaire/assets/img/companions/amy-pond.png'
						  ))
				 ->doctors()
				 ->attach([$doctorEleven->id]);

		Companion::create(array('name'        => 'Captain Jack',
								'description' => 'Time Agent. Torchwood Leader. Poster Boy for the Boeshane Peninsula. Over his (very) long life, Captain Jack Harkness has been many things. First meeting the Doctor and Rose in 1940s London, he helped defeat the reanimated “Empty Child” and the Slitheen, before being exterminated by the Daleks on the Game Station. Revived and made immortal by Rose Tyler after she’d absorbed the power of the Time Vortex, Jack travelled back to 1869, where his vortex manipulator burned out. Forced to live through the twentieth century, he joined Torchwood in Cardiff, knowing the Doctor would return one day to refuel on the rift. Following the TARDIS to the end of universe, Jack faced the Master, and then Davros and his Dalek crucible, as well as battling many evils on Earth with Torchwood.',
								'image'       => 'http://thedoctor.coderfaire/assets/img/companions/captain-jack.png'
						  ))
				 ->doctors()
				 ->attach([$doctorNine->id, $doctorTen->id]);

		Companion::create(array('name'        => 'Clara Oswald',
								'description' => 'That impossible girl. In Victorian London, there’s “sweet little Clara” from the Rose & Crown, who’s also an upright children’s governess. In the far-flung future, Oswin Oswald, the shipwrecked Junior Entertainments Manager from Starship Alaska, in reality a human-Dalek conversion refusing to accept her fate. Identical women, worlds and times apart, impossibly giving the Doctor the same message.',
								'image'       => 'http://thedoctor.coderfaire/assets/img/companions/clara-oswald.png'
						  ))
				 ->doctors()
				 ->attach([$doctorEleven->id, $doctorTwelve->id]);

		Companion::create(array('name'        => 'Donna Noble',
								'description' => 'A temp from West London, Donna found herself transported aboard the TARDIS as she was walking down the aisle on her wedding day. Fortunately, the Doctor saved her from marrying Lance – who’d made a deal with the Empress of the Racnoss. Despite turning down the Doctor’s offer to travel with him, she began investigating possible alien incursions, in the hope she’d meet him again. When they were reunited at Adipose Industries, she took up the offer to travel in the TARDIS - visiting Pompeii, meeting Agatha Christie and helping thwart the Sontarans. When the Doctor was exterminated by a Dalek and began regenerating he funneled the energy into his spare hand. When Donna touched this, it provoked a ‘metacrisis’, where she acquired all of the Doctor’s knowledge. Although this was essential in stopping Davros, it started to destroy Donna’s body. The Doctor was forced to wipe her mind and return her to Sylvia and Wilf. He later bought Donna and new husband Shaun a winning lottery ticket.',
								'image'       => 'http://thedoctor.coderfaire/assets/img/companions/donna-noble.png'
						  ))
				 ->doctors()
				 ->attach([$doctorTen->id]);

		Companion::create(array('name'        => 'Martha Jones',
								'description' => 'Studying for her doctorate in medicine, Martha Jones was inside Royal Hope Hospital when it was transported to the moon. Showing great bravery in the face of the Plasmavore, the Doctor invited her for travel with him. She was wooed by William Shakespeare, fought Daleks in New York and looked after the Doctor when disguised as a human school teacher in 1913. When the Doctor was captured by the Master, Martha travelled the world telling his story of resistance. The psychic energy this gathered helped release the Time Lord. After activating Project Indigo in the face of Davros\' Reality Bomb, Martha married Mickey Smith and together they hunted alien threats to Earth.',
								'image'       => 'http://thedoctor.coderfaire/assets/img/companions/martha-jones.png'
						  ))
				 ->doctors()
				 ->attach([$doctorTen->id]);

		Companion::create(array('name'        => 'Mickey Smith',
								'description' => 'On-off boyfriend of Rose Tyler, Mickey Smith was drawn into the Doctor’s world when he was captured and replicated by the Nestene Consciousness. When Rose vanished for a year with the Doctor, Mickey was questioned over her disappearance. Despite this, and getting called “Mickey the Idiot”, he helped the Doctor and Rose defeat the Slitheen, Sycorax and Krillitanes. He opted to remain in the parallel “Pete’s World” when he discovered that the parallel version of the Grandmother who raised him was a still alive. From there, he assisted Pete and Jake rid their world of Cybermen, before jumping realities and fighting the Battle of Canary Wharf. After a period of living in that world with the Tylers, he returned to his originalEarth, where he married Martha Jones.',
								'image'       => 'http://thedoctor.coderfaire/assets/img/companions/mickey-smith.png'
						  ))
				 ->doctors()
				 ->attach([$doctorNine->id, $doctorTen->id]);

		Companion::create(array('name'        => 'River Song',
								'description' => 'Born Melody Pond, to Amy Pond and Rory Williams during the Battle of Demon\'s Run, she was kidnapped by agents of The Silence and raised as the Doctor\'s perfect assassin. But in her pursuit of the Doctor, she fell in love with him, which broke her conditioning. Becoming a Doctor of Archaeology, she was again recruited by The Silence to kill the Doctor at a fixed point in time. However, the assassination was staged to allow the Doctor to disappear from view. Handed 12,000 life sentences for his murder, River spent her days at Stormcage Containment Facility, but her nights travelling with the Doctor. They investigated the wreck of the Byzantium, battled Weeping Angels in New York and visited the Singing Towers of Darillium. She died in The Library, saving the people trapped in its computer. The Doctor was able to upload her into the mainframe where her data ghost “lives” with three children to look after. (The Doctor and River have met each other, broadly speaking, in reverse order - the first time the Doctor meets River is the last time she sees him.)',
								'image'       => 'http://thedoctor.coderfaire/assets/img/companions/river-song.png'
						  ))
				 ->doctors()
				 ->attach([$doctorTen->id, $doctorEleven->id]);

		Companion::create(array('name'        => 'Rory Williams',
								'description' => 'In love with Amy Pond from his teens, Rory Williams became a nurse to try and compete with (what he thought was) her made-up friend, the Doctor. When the Doctor turned out to be real, there was initially some friction, but the two became good friends. Rory had a turbulent time in the TARDIS. He was killed by the Silurians and absorbed into a crack in time, before being resurrected as an Auton, who then killed Amy. After breaking his programming, he stood watch over her tomb in the Pandorica for 2000 years. When reality was restored, Rory ceased to be an Auton and returned to human form. While aboard the TARDIS, he and Amy became parents to Melody. Sent back in time to 1938 by a Weeping Angel, Rory lived a happy life with Amy. Their adopted son, Anthony Brian Williams, visited Rory’s father Brian in 2012, bringing a heart-breaking goodbye note from Rory.',
								'image'       => 'http://thedoctor.coderfaire/assets/img/companions/rory-williams.png'
						  ))
				 ->doctors()
				 ->attach([$doctorEleven->id]);

		Companion::create(array('name'        => 'Rose Tyler',
								'description' => 'Trapped by Autons in the basement of Henrik\'s department store, shop assistant Rose Tyler’s life is saved by a chance encounter with the Doctor. When her heroism leads to the defeat of the Nestene, he invites her to travel with him – taking her from Victorian Cardiff to the day the Earth died. And although travelling with the Doctor was often dangerous, she told him she’d stay with him forever. Witnessing the Ninth Doctor’s regeneration only made that bond stronger. However, during the Battle of Canary Wharf they were separated – trapped on parallel worlds. Using a Dimension Cannon she attempted to make contact with the Doctor (and new companion Donna) several times, eventually encountering him as he was exterminated by a Dalek. Once healed and the Daleks defeated, he returned Rose to the parallel world with her family and the half-human version of himself, to live the rest of their lives together.',
								'image'       => 'http://thedoctor.coderfaire/assets/img/companions/rose-tyler.png'
						  ))
				 ->doctors()
				 ->attach([$doctorNine->id, $doctorTen->id]);

		Companion::create(array('name'        => 'Wilfred Mott',
								'description' => 'Wilf first encountered the Doctor on Christmas Day 2007, when the Time Lord beamed down from the Titanic with Astrid Peth. A year later, during the Adipose affair, he was to see the Doctor again – this time through his telescope as the TARDIS, with Donna aboard, sped across the sky. A keen astronomer, Wilf readily accepted the Doctor\'s alien nature, along with his granddaughter\’s travelling in time and space. When Donna\'s mind had to be wiped of her travels with the Doctor, he was heartbroken but promised to keep watching the skies for the TARDIS. Extraordinarily loyal, he urged the Doctor to kill the Master and save the world when he opened the timelock on the Time War. It was Wilf who would eventually knock four times, and herald theTenth Doctor’s regeneration.',
								'image'       => 'http://thedoctor.coderfaire/assets/img/companions/wilfred-mott.png'
						  ))
				 ->doctors()
				 ->attach([$doctorTen->id]);
	}
}