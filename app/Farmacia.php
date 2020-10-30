<?php

namespace CalendarPlus;

use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
    //
    public $table = "farmacia";
    protected $primaryKey = "id_farmacia";
    
    public function scopeSearch($query, $palabra) {
        return $query
            ->where('nombre_far', 'like', "%" . $palabra . "%")
            ->orWhere('calle', 'like', "%" . $palabra . "%")
            ->orWhere('colonia', 'like', "%" . $palabra . "%")
            ->orWhere('cp', 'like', "%" . $palabra . "%")
            ->orWhere('ciudad', 'like', "%" . $palabra . "%")
            ->orWhere('municipio', 'like', "%" . $palabra . "%");
    }
}
