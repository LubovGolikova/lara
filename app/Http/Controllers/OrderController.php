<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderItems;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use App\Box;
class OrderController extends Controller
{
    //
    public function index(){
        return view("shop.order");
    }

    public function add(Request $request){
        $order = new Order();
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->delivery = $request->delivery;
        $order->payment = $request->payment;
        $order->total_sum = session("sum");
        $order->save();
        foreach(session('box') as $flower):
            $orderItem = new OrderItems();
            $orderItem->order_id = $order->id;
            $orderItem->flower_id = $flower['id'];
            $orderItem->flower_name = $flower['name'];
            $orderItem->flower_price = $flower['price'];
            $orderItem->flower_qty = $flower['qty'];
            $orderItem->save();
        endforeach;
        Mail::to('lubovgolikova@gmail.com')->send(new OrderShipped($order));
        Box::removeAll();
        return redirect()->back();
    }
}
