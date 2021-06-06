<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use App\Models\ExpenseCategory;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="expenses";
        $categories=ExpenseCategory::get();
        $expenses=Expense::get();
        return view('expenses',compact('title','expenses','categories'));
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
            'purchase_date'=>'required',
            'price'=>'required',
        ]);
        Expense::create([
            'expense_category_id'=>$request->category,
            'description'=>$request->description,
            'purchase_date'=>$request->purchase_date,
            'price'=>$request->price,
        ]);
        $notification=array(
            'message'=>"Expense has been added !!!",
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
            'purchase_date'=>'required',
            'price'=>'required',
        ]);
        $expense=Expense::find($request->id);
        $expense->update([
            'expense_category_id'=>$request->category,
            'description'=>$request->description,
            'purchase_date'=>$request->purchase_date,
            'price'=>$request->price,
        ]);
        $notification=array(
            'message'=>"Expense has been updated !!!",
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
        $expense = Expense::find($request->id);
        $expense->delete();
        $notification=array(
            'message'=>"Expense has been deleted !!!",
            'alert-type'=>"success",
        );
        return back()->with($notification);
    }
}
