<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title ="Customers";
        $customers =Customer::get();
        return view('customers',compact('title','customers'));
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
            'fullname'=>'required|max:100',
            'address'=>'required|max:200',
            'phone'=>'required|max:15',
            'city'=>'required|max:200',
            'email'=>'required|email',
            'comment'=>'max:200',
            'gender'=>'required'
        ]);
        Customer::create($request->all());
        $notification = array(
            'message'=>"Customer has beed added successfully!!",
            'alert-type'=>'success'
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
        $customer = Customer::find($request->id);
        $customer->delete();
        $notification = array(
            'message'=>"Customer deleted successfully!!!",
            'alert-type'=>'success',
        );
        return back()->with($notification);
    }
}
