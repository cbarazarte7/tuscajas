<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kits extends Model {

    //
    
    protected $guarded = [];

    public function orders() {
        return $this->hasMany(Orders::class);
    }

}
