@extends('adminlte::page')

@section('title', 'Order')

@section('content_header')
    <h1>Детали заказа {{$orderItem->id}}</h1>
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

    <form action="/admin/order-item/{{$orderItem->id}}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$orderItem->flower_name}}">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control" value="{{$orderItem->flower_price}}">
        </div>
        <div class="form-group">
            <label for="qty">Q-ty</label>
            <input type="text" name="qty" id="qty" class="form-control" value="{{$orderItem->flower_qty}}">
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