@extends('adminlte::page')

@section('title', 'Flowers')

@section('content_header')
    <h1>Flowers</h1>
@stop

@section('content')
    <table class="table">
        <thead>
            <tr>
        <th>#</th>
        <th>Img</th>
        <th>Name</th>
        <th>Price</th>
        <th>Slider</th>
        <th>Stock</th>
        <th></th>
        </tr>
        </thead>

        <tbody>
        @foreach($flowers as $flower)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td><img src="{{$flower->path}}" alt="" style="width: 100px"/></td>
        <td>{{$flower->name}}</td>
        <td>{{$flower->price}}</td>
        <td>{!!$flower->slider?'<i class="fa fa-chevron-down text-primary"></i>':''!!}</td>
        <td>{!!$flower->stock?'<i class="fa fa-chevron-down text-primary"></i>':''!!}</td>
        <td>
        <a class="btn btn-warning" href="/admin/flower/{{$flower->id}}/edit"> <i class="fa fa-edit"></i></a>
        <form action="/admin/flower/{{$flower->id}}" method="POST" class="inline">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" > <i class="fa fa-trash"></i></button>
        </form>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
@stop
