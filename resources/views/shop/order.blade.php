@extends('layouts.app')

@section('content')
<div class="box-main pb-3">
    <div class="container main-bg pb-4">
        <h1>Оформление заказа</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
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
                        <input class="form-check-input" type="radio" name="delivery" id="nova-post-1" value="1" checked>
                            <label class="form-check-label" for="nova-post-1">
                              Новая почта
                            </label>

                        <div class="nova-post">
                            <div class="form-group">
                                <select name="nova-post-city" class="nova-post-city form-control">
                                    <option>Выберите город*</option>
                                        @foreach($cities as $city)
                                            <option value="{{$city['Ref']}}">{{$city['DescriptionRu']}}</option>
                                        @endforeach
                                 </select>
                            </div>
                            <div class="form-group">
                                 <select name="nova-post-warehouses" class="nova-post-warehouses form-control">
                                    <option>Выберите отделение*</option>
                                 </select>
                            </div>
                        </div>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="delivery" id="nova-post-2" value="2">
                        <label class="form-check-label" for="nova-post-2">
                          Новая почта (курьер)
                        </label>

                        <div class="nova-post">
                            <div class="form-group">
                                <select name="nova-post-courier-city" class="nova-post-courier-city form-control">
                                    <option>Выберите город*</option>
                                        @foreach($cities as $city)
                                            <option value="{{$city['Ref']}}">{{$city['DescriptionRu']}}</option>
                                        @endforeach
                                 </select>
                            </div>
                            <div class="form-group">
                                 <select name="nova-post-street" class="nova-post-street form-control">
                                    <option>Выберите улицу*</option>
                                 </select>
                            </div>
                            <div class="row  ml-1">
                                 <div class="form-group ">
                                     <input type="text" placeholder="Номер дома*" class="number-house form-control">
                                 </div>
                                 <div class="form-group offset-1 ">
                                     <input type="text" placeholder="Квартира" class="number-flat form-control">
                                 </div>
                            </div>

                        </div>
                      </div>

                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="delivery" id="ukr-post" value="3">
                            <label class="form-check-label" for="ukr-post">
                              Укрпочта
                            </label>

                        <div class="ukr-post">
                            <div class="form-group">
                                <select name="ukr-post-city" class="ukr-post-city form-control">
                                    <option>Выберите город*</option>
                                        @foreach($cities as $city)
                                            <option value="{{$city['Ref']}}">{{$city['DescriptionRu']}}</option>
                                        @endforeach
                                 </select>
                            </div>
                            <div class="form-group ">
                                 <input type="text" placeholder="Почтовый индекс*" class="post-index form-control">
                            </div>
                        </div>
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
                        <button class="btn btn-buy my-2">Оформить заказ</button>

                    </form>
                    <br>
                </div>
                <div class="col-md-5 offset-1 order-box py-3">
                    @include('shop.box-mini')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
