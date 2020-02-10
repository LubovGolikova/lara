
@extends('adminlte::page')

@section('title', 'Flowers')

@section('content_header')
    <h1>Цветы</h1>
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


    <form action="/admin/flower" method="POST">
    @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>

        <div class="input-group">
           <span class="input-group-btn">
             <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
               <i class="fa fa-picture-o"></i> Choose
             </a>
           </span>
           <input id="thumbnail" class="form-control" type="text" name="filepath">
         </div>
         <img id="holder" style="margin-top:15px;max-height:100px;">

        <div class="form-group">
            <label for="slider">In slider?</label>
            <input type="checkbox" name="slider" id="slider" value="1">
        </div>

        <div class="form-group">
                    <label for="stock">In stock?</label>
                    <input type="checkbox" name="stock" id="stock" value="1">
        </div>

         <div class="form-group">
            <label for="description">description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <button class="btn btn-primary">Добавить</button>
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