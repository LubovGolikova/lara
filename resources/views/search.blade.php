@extends('layouts.app')

@section('content')
    <h1>Результаты поиска</h1>
    <div class="row flowers">
    @if($flowers->count()==0):
        <p>vdgf</p>
    @endif
    @foreach($flowers as $flower)
        <div class="col-md-3">
            <a href="/flower/{{$flower->id}}"> <img src="{{$flower->getThumb()}}" class="img-fluid"></a>
            <div>
                 <a href="/flower/{{$flower->id}}">{{$flower->name}}</a><br>
                {{$flower->stock?'в наличии':'нет в наличии'}}<br>
                {{$flower->price}}<br>
               <a href="/flower/{{$flower->id}}"> <button class="btn btn-success my-2 my-sm-0">Купить</button></a>
            </div>
            <br>
        </div>
     @endforeach
    </div>
    {{$flowers->appends(['s' => $s])->links()}}
@endsection
