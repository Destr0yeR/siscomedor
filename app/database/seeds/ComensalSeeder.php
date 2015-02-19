<?php

class ComensalSeeder extends Seeder {

	public function run()
	{
		//Comensal::create(array('id'=> ,'codigo' => '', 'eap_id' =>));
		Comensal::create(array('id'=> 1,'codigo' => '12200062', 'eap_id' =>1));
		Comensal::create(array('id'=> 2,'codigo' => '12200059', 'eap_id' =>1));
		Comensal::create(array('id'=> 3,'codigo' => '12200193', 'eap_id' =>1));
		Comensal::create(array('id'=> 4,'codigo' => '12200190', 'eap_id' =>1));
		Comensal::create(array('id'=> 5,'codigo' => '12200048', 'eap_id' =>1));
		Comensal::create(array('id'=> 6,'codigo' => '12200191', 'eap_id' =>1));
	}
}