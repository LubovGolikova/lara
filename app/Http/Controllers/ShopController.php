<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flower;

class ShopController extends Controller
{
    function index(){
        $flowers = Flower::paginate(12);
        return view('shop.index', compact('flowers'));
    }
    function showProduct($id){
        $flower = Flower::find($id);
        return view('shop.showFlower', compact('flower'));
    }
}
