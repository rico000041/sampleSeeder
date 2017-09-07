<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionaire extends Model {

	protected $table = "questionaires";

	protected $fillable = [
		"name","field_type", "value","answers"
	];

    
}
