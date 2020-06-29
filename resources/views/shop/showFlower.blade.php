@extends('layouts.app')

@section('content')

<div class="box-main pb-3">
<div class="container main-bg product pb-5">
    <h1>{{$flower->name}}</h1>
    <div class="{{$flower->stock?'in':'out'}}-stock text-center">{{$flower->stock?'в наличии':'нет в наличии'}}</div>

    <div class="price-flower"> <span>{{$flower->price}}</span> грн</div>

    <div class="col mt-5">
        <div class="row-md-4 text-center">
            <div class="img-popup">

                <div class="thumbnails mt-5 mr-5">
                    <a href="/photos/shares/photo2.jpg" class="d-inline-block">
                        <div class="border-circle">
                            <img src="/photos/shares/thumbs/photo2.jpg" class="img-fluid rounded-circle">
                         </div>
                    </a>
                    </div>
                       <a href="{{$flower->path}}" class="d-block">
                                     <div class="border-circle">
                                        <img src="{{$flower->getThumb()}}" class="img-fluid rounded-circle">
                                     </div>
                                    </a>
                     <div class="thumbnails mt-5 ml-5">
                    <a href="/photos/shares/photo2.jpg" class="d-inline-block">
                        <div class="border-circle">
                            <img src="/photos/shares/thumbs/photo2.jpg" class="img-fluid rounded-circle">
                         </div>
                    </a>

                </div>
            </div>
        </div>


        <div class="col-md-8 mt-3 offset-md-3">
            {!!$flower->description!!}
            <form action="/" method="POST" class="form-add-box row">
                    <input type="number" name="qty"  id="gty" min="1" class="form-control col-md-8" placeholder="Количество">
                    <button class="btn btn-buy my-2 my-sm-0 col-md-2 ml-3">Купить</button>
                <input type="hidden" name="id"  value="{{$flower->id}}">


            </form>


        </div>
    </div>
 </div>
</div>
@endsection
