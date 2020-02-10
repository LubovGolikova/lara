@extends('layouts.app')

@section('content')
    <h1>Оформление заказа</h1>
<div class="container">
    <div class="row">
        <div class="col">
            <form method="POST" action="/order/add">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Имя фамилия</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
             <div class="form-group row">
                 <label for="phone" class="col-sm-2 col-form-label">Телефон</label>
                 <div class="col-sm-10">
                   <input type="text" class="form-control" id="phone" name="phone">
                 </div>
            </div>
             <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="staticEmail" name="email">
                </div>
              </div>
              <h2>Доставка</h2>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="delivery" id="exampleRadios1" value="1" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Новая почта
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="delivery" id="exampleRadios1" value="2" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Новая почта (курьер)
                </label>
              </div>
               <h2>Оплата</h2>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    На карточку
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="2" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    При получении
                  </label>
                </div>
                <br>
                <button class="btn btn-success my-2 my-sm-0">Оформить заказ</button>

            </form>
            <br>
        </div>
        <div class="col">
        @include('shop.box')
        </div>
    </div>
</div>
@endsection
