<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сад Лилейников</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="{{asset('/assets/css/font-awesome.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/slick/slick-theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/popup/magnific-popup.css')}}"/>
    <link rel="stylesheet" href="{{asset('styles/style.css')}}">
    <link rel="stylesheet" href="{{asset('styles/shop.css')}}">
    <link rel="stylesheet" href="{{asset('styles/flower.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
                <div class="navbar-brand"> <a href="/">
                    <img src="{{asset('assets/images/logo.png')}}" alt=""/></a>
                </div>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto align-md-items-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">О нас <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Услуги</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Контакты </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Растения </a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropbtn {!!Request::is('shop') ? 'active' : '' !!}"
                        id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" href="/shop">Магазин </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">До 100 грн.</a>
                                <a class="dropdown-item" href="#">От 100 грн. и более</a>
                                <a class="dropdown-item" href="#">Все</a>
                            </div>
                    </li>
                    <li class="nav-item">
                       <div class="box">
                           <a href="#" data-toggle="modal" data-target="#exampleModal">
                             <img src="{{asset('assets/images/shopping-cart.png')}}" alt=""/>
                              <span class="count-products"> {{session('count') ? session('count') : 0}}</span>
                           </a>
                       </div>
                    </li>
                </ul>
                <div class="social">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                </div>
             </div>
        </div>
     </nav>
     <div class="container">
        <div class="search-line py-3 fluid container d-flex flex-row justify-content-center align-items-center">
             <form class="search form-inline col-12 col-lg-6  my-2 my-lg-0 p-0 " method="get" action="/search">
                <input class="form-control mr-sm-2" name="s"  autocomplete="off" contenteditable="true" spellcheck="false"
                 type="search" placeholder="Поиск" aria-label="Search">
                <button class="btn btn-default my-2 my-sm-0" type="submit">Найти</button>
             </form>
        </div>
    </div>
<div class="container base-color mb-5">
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
        <button type="button" class="btn remove-all">Очистить корзину</button>
        <div>
            <a href="/shop"class="btn btn-pink mr-2">Продолжить покупки</a>
            <a href="/order" class="btn btn-buy">Оформить заказ</a>
        </div>
      </div>

    </div>
  </div>
</div>


<footer id="footerId" class="footer-color footer-light footer-nv d-flex flex-row justify-content-center align-items-center">
        <div class="container">
            <div class="d-flex row">
                 <div class="footer-link">
                    <a href="/" class="nav-link ">О нас</a>
                    <a href="" class="nav-link ">Растения</a>
                    <a href="" class="nav-link">Контакты</a>
                    <a href="" class="nav-link">Услуги</a>
                    <a href="/shop"  class="nav-link" {!!Request::is('shop') ? 'active' : ''!!}">Магазин</a>
                </div>
            </div>
        </div>
</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('assets/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/popup/jquery.magnific-popup.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>


</body>

</html>