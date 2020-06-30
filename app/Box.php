<?php

namespace App;

use Session;

class Box
{
    static function addFlower($flower, $qty){
        if( Session::get("box.flower_{$flower->id}") ){
            $oldQty = Session::get("box.flower_{$flower->id}.qty");
            Session::put("box.flower_{$flower->id}.qty", $qty + $oldQty);
        }
        else{
        Session::put("box.flower_{$flower->id}.id", $flower->id);
        Session::put("box.flower_{$flower->id}.path", $flower->getThumb());
        Session::put("box.flower_{$flower->id}.name", $flower->name);
        Session::put("box.flower_{$flower->id}.price", $flower->price);
        Session::put("box.flower_{$flower->id}.qty", $qty);
        }
        self::sum();
    }
    static function removeFlower($id){
        Session::forget("box.flower_{$id}");
        self::sum();
    }
    static function removeAll(){
        Session::forget("box");
        Session::forget("sum");
        Session::forget("count");
    }
    static function changeQty($id, $qty){}
    static function sum(){
        $sum = 0;
        $count = 0;
        foreach(Session::get('box') as $flower){
            $sum+= $flower['qty'] * $flower['price'];
            $count+= $flower['qty'];
        }
        Session::put('sum', $sum);
        Session::put('count',$count);
    }
}
