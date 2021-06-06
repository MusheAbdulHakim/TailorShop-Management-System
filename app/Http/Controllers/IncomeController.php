<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;
use App\Models\IncomeCategory;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="income";
        $categories=IncomeCategory::get();
        $incomes = Income::get();
        return view('income',compact('title','categories','incomes'));
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
            'category'=>'required',
            'description'=>'max:100',
            'income_date'=>'required',
            'amount'=>'required',
        ]);
        Income::create([
            'income_category_id'=>$request->category,
            'description'=>$request->description,
            'income_date'=>$request->income_date,
            'amount'=>$request->amount,
        ]);
        $notification=array(
            'message'=>"Income has been added !!!",
            'alert-type'=>"success",
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
    public function update(Request $request)
    {
        $this->validate($request,[
            'category'=>'required',
            'description'=>'max:100',
            'income_date'=>'required',
            'amount'=>'required',
        ]);
        $income= Income::find($request->id);
        $income->update([
            'income_category_id'=>$request->category,
            'description'=>$request->description,
            'income_date'=>$request->income_date,
            'amount'=>$request->amount,
        ]);
        $notification=array(
            'message'=>"Income has been updated !!!",
            'alert-type'=>"success",
        );
        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $income = Income::find($request->id);
        $income->delete();
        $notification=array(
            'message'=>"Income has been deleted !!!",
            'alert-type'=>"success",
        );
        return back()->with($notification);
    }
}
