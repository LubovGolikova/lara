@extends('adminlte::page')

@section('title', 'Order')

@section('content_header')
    <h1>Orders</h1>
@stop

@section('content')
    <table class="table">
        <thead>
            <tr>
        <th>#</th>
        <th>Order Id</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Delivery</th>
        <th>Payment</th>
        <th>Total Sum</th>
        <th></th>
        </tr>
        </thead>

        <tbody>
        @foreach($orders as $order)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td><{{$order->id}}></td>
        <td>{{$order->name}}</td>
        <td>{{$order->phone}}</td>
        <td>{{$order->email}}</td>
        <td>{{$order->delivery==1?'Новая почта':'Новая почта (курьер)'}}</td>
        <td>{{$order->payment==1?'На карточку':'При получении'}}</td>
        <td>{{$order->total_sum}}</td>
        <td>{{ $order->created_at }}</td>
        <td>
        <a class="btn btn-warning" href="/admin/order/{{$order->id}}/edit"> <i class="fa fa-edit"></i></a>
        <form action="/admin/flower/{{$order->id}}" method="POST" class="inline">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" > <i class="fa fa-trash"></i></button>
        </form>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
@stop
