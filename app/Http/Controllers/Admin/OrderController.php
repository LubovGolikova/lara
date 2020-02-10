<?php

namespace App\Http\Controllers\Admin;
use App\Order;
use App\OrderItems;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin.order.index',compact('orders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        $orderItems = OrderItems::where('order_id', '=', $id)->get();
        return view('admin.order.edit',compact('order', 'orderItems'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->delivery = $request->delivery;
        $order->payment = $request->payment;
        $order->save();
        return redirect('/admin/order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function editOrderItem($id)
    {
        $orderItem = OrderItems::find($id);
        return view('admin.order.editItem',compact('orderItem'));
    }
    public function saveOrderItem(Request $request, $id)
    {
        $orderItem = OrderItems::find($id);
        $orderItem->flower_name = $request->name;
        $orderItem->flower_price = $request->price;
        $orderItem->flower_qty = $request->qty;
        $orderItem->save();
        $totalSum = 0;
        $orderItems = OrderItems::where('order_id', '=', $orderItem->order_id)->get();
        foreach ( $orderItems as $item) {
            $totalSum+=$item->flower_qty * $item->flower_price;
        }
        $order = Order::find($orderItem->order_id);
        $order->total_sum = $totalSum;
        $order->save();

        return redirect('admin/order/'.$orderItem->order_id.'/edit');
    }
}
