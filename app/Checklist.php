<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    //
	protected $table = 'checklist';
	
	public function ingredients(){
		
		return $this->hasMany('App\Ingredients','checklistid','id');
	}
}
