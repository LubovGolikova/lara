@extends('layouts.app')

@section('content')
<section class="box-1 pb-3">
    <div class="container">
    <div class="search-line py-3 fluid container d-flex flex-row justify-content-center align-items-center">
    <form class="my-2 my-lg-0 col-12 col-lg-6  search form-inline  p-0" method="get" action="/search">
        <input class="form-control mr-sm-2" name="s"  autocomplete="off" contenteditable="true" spellcheck="false" type="search" placeholder="Поиск" aria-label="Search">
        <button class="btn btn-outline-green my-2 my-sm-0" type="submit">Найти</button>
    </form>
    </div>
    <div class="welcome">

        <div class="text"><span>Укрась</span> <span>свою</span> <span>жизнь</span> <span>цветами</span></div>
         <img src="{{asset('assets/pic-box-1.jpg')}}" alt=""/>
    </div>
    </div>
</section>

<section class="box-2">
    <div class="container">
        <div class="row py-5">
        <div class="col-md-4 offset-md-1">
             <img src="{{asset('assets/flowers-box-2.png')}}" alt=""/>
        </div>
        <div class="col-md-7 content">
            <h3 class="text-center mb-5 mt-3 mt-md-0"> О нас </h3>
            Рада приветствовать всех кто заглянул на наш сайт! Это небольшой магазин лилейников. Лилейник-это цветок, который цветет один день, но когда куст разростается этого недостаткам вы не заметите, ведь он весь будет покрыт бутонами и вы будете в течение долгого времени созерцать прекрасное цветение!
            Здесь вы найдете лилейник на любой вкус! У нас представлены как зарегестрированные сорта так и сеянцы, которые были выведены гибридизаторами-любителями, но не были зарегестрированы, такие лилейники стоят намного дешевле, однако это никак не умоляет их красоты!
            Покупая здесь лилейники вы получите хороший посадочный материал! Сортность и качество гарантирую! Желаю вам приятных покупок!
        </div>
        </div>
        </div>
</section>

<section class="box-3 my-5 py-5">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
        <h3 class="text-center mb-5">Сезонные цветы</h3>
        <p>Рада приветствовать всех кто заглянул на наш сайт! Это небольшой магазин лилейников. Лилейник-это цветок, который цветет один день, но когда куст разростается этого недостаткам вы не заметите, ведь он весь будет покрыт бутонами и вы будете в течение долгого времени созерцать прекрасное цветение!</p>
        <p>Здесь вы найдете лилейник на любой вкус! У нас представлены как зарегестрированные сорта так и сеянцы, которые были выведены гибридизаторами-любителями, но не были зарегестрированы, такие лилейники стоят намного дешевле, однако это никак не умоляет их красоты!
        Покупая здесь лилейники вы получите хороший посадочный материал! Сортность и качество гарантирую! Желаю вам приятных покупок!</p>
        </div>
        <div class="col-md-5 offset-md-1 d-flex flex-wrap">
            <a href="" class="category"><img src="{{asset('assets/category.jpg')}}" alt=""/></a>
            <a href="" class="category"><img src="{{asset('assets/category-2.jpg')}}" alt=""/></a>
            <a href="" class="category"><img src="{{asset('assets/category-4.jpg')}}" alt=""/></a>
            <a href="" class="category"><img src="{{asset('assets/category-3.jpg')}}" alt=""/></a>
        </div>
        </div>
        </div>
</section>

<div class="container base-color">
    @yield('content')
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Ваша корзина</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include('shop.box')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Продолжить покупки</button>
        <a href="/order" class="btn btn-primary">Оформить заказ</a>
      </div>
      <button type="button" class="btn btn-default remove-all">Очистить корзину</button>
    </div>
  </div>
</div>

</div>

@endsection




{{--
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
               Рада приветствовать всех кто заглянул на наш сайт! Это небольшой магазин лилейников. Лилейник-это цветок, который цветет один день, но когда куст разростается этого недостаткам вы не заметите, ведь он весь будет покрыт бутонами и вы будете в течение долгого времени созерцать прекрасное цветение!
                 Здесь вы найдете лилейник на любой вкус! У нас представлены как зарегестрированные сорта так и сеянцы, которые были выведены гибридизаторами-любителями, но не были зарегестрированы, такие лилейники стоят намного дешевле, однако это никак не умоляет их красоты!
                 Покупая здесь лилейники вы получите хороший посадочный материал! Сортность и качество гарантирую! Желаю вам приятных покупок!
            </div>
        </div>
    </div>
@endsection

--}}
