@extends('layouts.app')

@section('content')
<div class="box-main pb-3">
    <div class="container main-bg">
        <h1>Результаты поиска</h1>
        <div class="row flowers">
        @if($flowers->count()==0):
            <p>vdgf</p>
        @endif
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
        {{$flowers->appends(['s' => $s])->links()}}
         <br>
    </div>
</div>
@endsection
