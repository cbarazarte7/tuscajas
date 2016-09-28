<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    
    protected $guarded = [];
    
    
    public function kit() {
        return $this->belongsTo(Kits::class);
    }
     
}
