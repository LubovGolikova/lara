@extends('layouts.app')

@section('content')
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/photo5.jpg" class="d-block w-100"  alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Украсьте свою жизнь цветами!!!</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/photo6.jpg" class="d-block w-100"   alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Украсьте свою жизнь цветами!!!</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets\photo7.jpg" class="d-block w-100"   alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Украсьте свою жизнь цветами!!!</h5>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-8 order-2">
            <div class="flowers px-5">
                <div class="slider">
                    @foreach($sliderFlowers as $flower)
                    <div>
                     <a href="/flower/{{$flower->id}}"><img src="{{$flower->getThumb()}}" class="img-fluid"></a>
                    <div>
                         <a href="/flower/{{$flower->id}}">{{$flower->name}}</a><br>
                        {{$flower->stock?'в наличии':'нет в наличии'}}<br>
                        {{$flower->price}}<br>
                       <a href="/flower/{{$flower->id}}"> <button class="btn btn-success my-2 my-sm-0">Купить</button></a>
                    </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-4 order-1">
            <div class="about">
                <h3> О нас </h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aspernatur at beatae commodi debitis eligendi ex exercitationem expedita fugiat illo ipsam, possimus provident qui recusandae sequi sit voluptatibus. Consequuntur, deserunt.
            </div>
        </div>
    </div>
@endsection
