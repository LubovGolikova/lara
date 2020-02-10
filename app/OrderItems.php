<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    //
    public function flower(){
        return $this->belongsTo('App\Flower');
    }

}
