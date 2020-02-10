@extends('adminlte::page')

@section('title', 'Order')

@section('content_header')
    <h1>Детали заказа {{$order->id}}</h1>
@stop

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<table class="table">
        <thead>
            <tr>
        <th>#</th>
        <th>Img</th>
        <th>Name</th>
        <th>Price</th>
        <th>Q-ty</th>
        <th>Sum</th>
        <th></th>
        </tr>
        </thead>

        <tbody>
        @foreach($orderItems as $flower)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td><img src="{{$flower->flower->path}}" alt="" style="width: 100px"/></td>
        <td>{{$flower->flower_name}}</td>
        <td>{{$flower->flower_price}}</td>
        <td>{{$flower->flower_qty}}</td>
        <td>{{$flower->flower_price * $flower->flower_qty}}</td>
        <td>
        <a class="btn btn-warning" href="/admin/order-item/{{$flower->id}}/edit"> <i class="fa fa-edit"></i></a>
        <form action="/admin/flower/{{$flower->id}}" method="POST" class="inline">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" > <i class="fa fa-trash"></i></button>
        </form>
        </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
        <td colspan="5" class="text-right">Tot</td>
        <td colspan="2">{{$order->total_sum}}</td>
        </tr>
        </tfoot>
        </table>
        </table>

    <form action="/admin/order/{{$order->id}}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$order->name}}">
        </div>
        <div class="form-group">
            <label for="price">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{$order->phone}}">
        </div>
         <div class="form-group">
            <label for="staticEmail">Email</label>
            <input type="text" class="form-control" id="staticEmail" name="email"value="{{$order->email}}">
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
        <button class="btn btn-primary">Сохранить</button>
    </form>
@stop

@section('js')
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
  CKEDITOR.replace('description', options);
   $('#lfm').filemanager('image');
</script>
@endsection