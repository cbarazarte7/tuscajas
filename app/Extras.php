<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extras extends Model {

    //
    
    protected $guarded = [];

    public function extras() {
        return $this->hasMany(Extras::class);
    }

}
