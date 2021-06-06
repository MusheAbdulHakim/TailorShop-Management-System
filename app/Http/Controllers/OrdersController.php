<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Customer;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Orders";
        $orders = Orders::get();
        $customers = Customer::get();
        return view('orders',compact('title','customers','orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'customer'=>'required',
            'description'=>'max:200',
            'recieved_on'=>'required',
            'receiver'=>'string|max:100',
            'amount_charged'=>'required',
            'amount_paid'=>'required',
            'collecting_on'=>'required',
        ]);
        Orders::create([
            'customer_id'=>$request->customer,
            'description'=>$request->description,
            'recieved_on'=>$request->recieved_on,
            'recieved_by'=>$request->receiver,
            'amount_charged'=>$request->amount_charged,
            'amount_paid'=>$request->amount_paid,
            'collecting_on'=>$request->collecting_on,
        ]);
        $notification =array(
            'message'=>"Customer order has been added",
            'alert-type'=>"success"
        );
        return back()->with($notification);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $order =Orders::find($request->id);
        $order->delete();
        $notification = array(
            'message'=>"Customer order deleted successfully!!",
            'alert-type'=>'success'
        );
        return back()->with($notification);
    }
}
