<?php

class DoctorTableSeeder extends Seeder {

	public function run()
	{
		DB::table('doctors')->delete();

		Doctor::create(array('name'        => 'Christopher Eccleston',
							 'number'      => '9',
							 'description' => 'The sole survivor of the Last Great Time War, scarred by the terrible things he’d seen and done, the Ninth Doctor was an intense and emotional incarnation. Hiding his psychological trauma behind madcap wit and frivolity, he took Rose Tyler to see the end of the world, inspired Charles Dickens and showed that for once, everybody could live. He was still capable of great cruelty and anger though, killing Cassandra and torturing a lone Dalek into submission. After Rose defeated the Daleks using the power of the time vortex, the Doctor saved her by transferring that dangerous power into his own body. The strain destroyed his every cell and as Rose watched, his body exploded with raging energy...',
							 'image'       => 'http://thedoctor.coderfaire/assets/img/doctors/9.png'
					   ));

		Doctor::create(array('name'        => 'David Tennant',
							 'number'      => '10',
							 'description' => 'Waking on Christmas Day in his new form, the Doctor fought the Sycorax high above London, where he lost a hand but grew a new one with remnant regenerative power. Travelling with Rose and Mickey he battled Cybermen, werewolves and possibly, the Devil itself. Losing Rose in a parallel universe – but later leaving her with a half-human clone of himself – the Doctor travelled on. He hid as a human schoolmaster to spare the Family of Blood his wrath, he defeated his nemesis the Master once more and met River Song for the first time. Told that he would die when someone knocked four times, the Doctor remained defiant, but to no avail. Reeling from his confrontation with the Time Lords and fatally dosed with radiation, the Tenth Doctor’s song ended, as his violent regeneration burned the TARDIS and sent it crashing through space...',
							 'image'       => 'http://thedoctor.coderfaire/assets/img/doctors/10.png'
					   ));

		Doctor::create(array('name'        => 'Matt Smith',
							 'number'      => '11',
							 'description' => 'Hugely energetic, occasionally flirtatious, and by his own admission, "a mad man", the Eleventh Doctor combined youthful looks with an old soul. Crashing into the lives of Amy Pond, and her boyfriend (later, husband) Rory, he solved the mystery of the time-erasing cracks in the universe, escaped his own death, restarted reality and even found time to marry River Song. A broken man after Amy and Rory were sent back in time by a Weeping Angel, and a Victorian-era Clara fell to her death, he decided to disappear. But it wasn\'t long before the lure of "the woman twice dead" brought the Doctor out of retirement. Finding his own tomb on the embattled Trenzalore and meeting a shameful, hidden past incarnation, started him on a path of redemption, teaming up with the Tenth Doctor to save Gallifrey rather than burn it. After sacrificing his life to defend Trenzalore, and granted a whole new cycle of incarnations by the Time Lords, the Doctor regenerated once more...',
							 'image'       => 'http://thedoctor.coderfaire/assets/img/doctors/11.png'
					   ));

		Doctor::create(array('name'        => 'Peter Capaldi',
							 'number'      => '12',
							 'description' => 'Granted a whole new regenerative cycle by the Time Lords, the Doctor experienced an explosive and unprecedented thirteenth regeneration, ending the Siege of Trenzalore. A new Doctor - with a sharp face, bushy brows and boggle eyes - faced a bewildered Clara, across the console. A Doctor who has seemingly forgotten how to fly the TARDIS… Though little is yet known of this Doctor’s journeys, at some point in his future, he helped his previous incarnations freeze Gallifrey in a pocket universe.',
							 'image'       => 'http://thedoctor.coderfaire/assets/img/doctors/12.png'
					   ));
	}
}