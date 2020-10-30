<?php

namespace CalendarPlus;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
     public function users()
	{
	    return $this
	        ->belongsToMany('CalendarPlus\User')
	        ->withTimestamps();
	}
}
