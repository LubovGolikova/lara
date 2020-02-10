<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Flower;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flowers = Flower::all();
        return view('admin.flower.index', compact('flowers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.flower.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required|digits_between:1,10000',
            'filepath'=>'required'
        ]);
        $flower = new Flower();
        $flower->name =  $request->name;
        $flower->price =  $request->price;
        $flower->path =  $request->filepath;
        $flower->slider =  $request->slider ? 1 : 0;
        $flower->stock =  $request->stock ? 1 : 0;
        $flower->description =  $request->description;
        $flower->save();
        return redirect('/admin/flower');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flower = Flower::find($id);
        return view('admin.flower.edit', compact('flower'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required|digits_between:1,10000',
            'filepath'=>'required'
        ]);
        $flower = Flower::find($id);
        $flower->name =  $request->name;
        $flower->price =  $request->price;
        $flower->path =  $request->filepath;
        $flower->slider =  $request->slider ? 1 : 0;
        $flower->stock =  $request->stock ? 1 : 0;
        $flower->description =  $request->description;
        $flower->save();
        return redirect('/admin/flower');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Flower::find($id)->delete();
        return redirect('/admin/flower');
    }
}
