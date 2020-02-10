<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    function getThumb(){
        $path = $this->path; //photos/shares/photo1.jpg
        $arr = explode('/', $path);
        return $arr[1].'/'. $arr[2].'/thumbs/'. $arr[3];
    }
}
