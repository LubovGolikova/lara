<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flower;
use App\Box;
class BoxController extends Controller
{
    function addFlower(Request $request){
        $flower = Flower::find($request->id);
        Box::addFlower($flower, $request->qty);
        return view('shop.box');
    }

    function removeFlower(Request $request){
        Box::removeFlower($request->id);
        return view('shop.box');
    }
    function removeAll(){
        Box::removeAll();
        return view('shop.box');
    }
    function getCountProducts(){
        return \Session::get('count') ? \Session::get('count') : 0;
    }
}
