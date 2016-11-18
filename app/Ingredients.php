<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    //
	protected $table = 'ingredients';
	
	public function checklist()
    {
        return $this->belongsTo('App\Checklist');
    }
}
