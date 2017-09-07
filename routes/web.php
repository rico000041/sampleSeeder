<?php

use Faker\Factory;

Route::get('/', function () {

	$a = 0;
	$info = [
		'Do you have a Public or Profession Liability (to cover accidents and negligence) and is bonded (insured or theft)?',
		'Are you 18 years and Above?',
		'Have you completed any pet sitting training program or certification? (i.e. Pet First Aid Training Program)?',
		'Do you have experiences in animal care or other pet related services?',
		'Have you not been charged or convicted of any crime?',
		'Will you give authorisation to conduct a background check on you? Check if any criminal record exist?',
		'Do you have a procss to record notes about your pet--such as his likes, dislikes, fears, habits, medical conditions, medifications, and routines?',
		'Are you associated with a veterinarian who can provide emergency services?',
		'Are you willing to provide police clearance certificate or any character reference for verification purposes?',
		'Can you provide sufficient space for animals to stand, move around freely, stretch fully and rest?',
		'Can you drive or have a suitable vehicle to use in case of emergency?',
		'Can you protext the animal from any distress or injury?',
		'Are you comfortable handling ill pets? (i.e. Comfortable in administering medications?)',
		'Do you have an emergency plan as and when needed?',
		'If applicable, do you comply with the Australian Standard Code of Practice for pet grooming establishments?'
	];
	
	for($b=15;$b>$a;$a++){

		$model = App\Questionaire::create([
		"name" => $info[$a],
		"field_type" => "radio_button",
		"value" => "8.2",
		"answers" => "true"
		]);

	}
	

});
