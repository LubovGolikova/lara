@extends('layouts.app')

@section('content')
    <h1>{{$flower->name}}</h1>
    <div class="row">
        <div class="col-md-4">
            <img src="{{$flower->path}}" class="img-fluid">
        </div>
        <div class="col-md-8">
            {{$flower->stock?'в наличии':'нет в наличии'}}
            {{$flower->price}}
            <form action="/" method="POST" class="form-add-box">
                <div class="form-group">
                    <label for="qty">Количество: </label>
                    <input type="number" name="qty"  id="gty" value="1" min="1" class="form-control">
                </div>
                <input type="hidden" name="id"  value="{{$flower->id}}">
                <button class="btn btn-success my-2 my-sm-0">Купить</button>

            </form>

            {!!$flower->description!!}
        </div>

    {{--@foreach($flowers as $flower)--}}
        {{--<div class="col-md-3">--}}
            {{--<img src="{{$flower->getThumb()}}" class="img-fluid">--}}
            {{--<div>--}}
                {{--{{$flower->name}}<br>--}}
                {{--{{$flower->stock?'в наличии':'нет в наличии'}}<br>--}}
                {{--{{$flower->price}}<br>--}}
                {{--<button class="btn btn-primary">Купить</button>--}}
            {{--</div>--}}
        {{--</div>--}}
     {{--@endforeach--}}
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
