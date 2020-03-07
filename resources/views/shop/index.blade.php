@extends('layouts.app')

@section('content')
<div class="box-main pb-3">
<div class="container">
    <div class="search-line py-3 fluid container d-flex flex-row justify-content-center align-items-center">
    <form class="my-2 my-lg-0 col-lg-6  search form-inline" method="get" action="/search">
        <input class="form-control mr-sm-2" name="s"  autocomplete="off" contenteditable="true" spellcheck="false" type="search" placeholder="Поиск" aria-label="Search">
        <button class="btn btn-outline-green my-2 my-sm-0" type="submit">Найти</button>
    </form>
    </div>
<div class="container main-bg">
        <h1>Магазин</h1>
        <div class="row flowers ">
        @foreach($flowers as $flower)
            <div class="col-md-3">
                <a href="/flower/{{$flower->id}}" class="border-circle">
                    <img src="{{$flower->getThumb()}}" class="img-fluid">
                </a>
                <div>
                    <div class="title"><a href="/flower/{{$flower->id}}">{{$flower->name}}</a></div>
                    <div class="{{$flower->stock?'in':'out'}}-stock">{{$flower->stock?'в наличии':'нет в наличии'}}</div>
                    <div class="price"> <span>{{$flower->price}}</span> грн</div>
                    <a href="/flower/{{$flower->id}}"> <button class="btn btn-buy my-2">Купить</button></a>
                </div>
                <br>
            </div>
         @endforeach

        </div>

        {{$flowers->links()}}
  <br>
</div>
</div>
</div>



@endsection
