<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flower;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliderFlowers = Flower::where('slider', '=', 1)->get();
        return view('home', compact('sliderFlowers')); // ['sliderFlowers']=>$$sliderFlowers
    }
    public function search(Request $request){
        $s = $request->s;
        $flowers=Flower::where('name','LIKE', '%'.$s.'%')->paginate(12);

       // dd($flowers);
        return view('search',compact('flowers', 's'));
    }
}
