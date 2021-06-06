<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\CustomerMeasurement;

class CustomerMeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Customer Measurement";
        $measurements = CustomerMeasurement::get();
        $customers = Customer::get();
        return view('customer_measurement',compact('title','customers','measurements'));
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
        CustomerMeasurement::create([
            'customer_id'=>$request->customer,
            'description'=>$request->description,
            'recieved_on'=>$request->recieved_on,
            'recieved_by'=>$request->receiver,
            'amount_charged'=>$request->amount_charged,
            'amount_paid'=>$request->amount_paid,
            'collecting_on'=>$request->collecting_on,
        ]);
        $notification =array(
            'message'=>"Customer measurement has been added",
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
        $measurement = CustomerMeasurement::find($request->id);
        $measurement->delete();
        $notification = array(
            'message'=>"Customer Measurement deleted successfully!!",
            'alert-type'=>'success'
        );
        return back()->with($notification);
    }
}
