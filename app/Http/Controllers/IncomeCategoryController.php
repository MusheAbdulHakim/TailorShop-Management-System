<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomeCategory;

class IncomeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="Income Categories";
        $categories = IncomeCategory::get();
        return view('income-categories',compact('title','categories'));
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
            'name'=>'required|max:200',
        ]);
        IncomeCategory::create($request->all());
        $notification=array(
            'message'=>"Income Category has been added !!!",
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
    public function update(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:200',
        ]);
        $category = IncomeCategory::find($request->id);
        $category->update([
            'name'=>$request->name,
        ]);
        $notification=array(
            'message'=>"Income Category has been updated !!!",
            'alert-type'=>'success'
        );
        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $category = IncomeCategory::find($request->id);
        $category->delete();
        $notification=array(
            'message'=>"Income Category has been deleted !!!",
            'alert-type'=>'success'
        );
        return back()->with($notification);
    }
}
