<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Order extends Model
{
    //
    public function getCreatedAtAttribute($value){
        return Carbon::create($value)->format('d.m.Y H:i');
    }
}
