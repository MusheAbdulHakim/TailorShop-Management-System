<?php

namespace App\Http\Controllers;

use App\Models\ClothType;
use Illuminate\Http\Request;

class ClothTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="cloth Types";
        $cloth_types=ClothType::get();
        return view('cloth-types',compact('title','cloth_types'));
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
            'name'=>'required|max:100',
            'gender'=>'required',
        ]);
        ClothType::create($request->all());
        $notification = array(
            'message'=>"Cloth Type added successfully!!!",
            'alert-type'=>'success',
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
            'name'=>'required|max:100',
            'gender'=>'required',
        ]);
        $type = ClothType::find($request->id);
        $type->update(
            [
                'name'=>$request->name,
                'gender'=>$request->gender,
            ]
        );
        $notification = array(
            'message'=>"Cloth Type had been updated successfully!!!",
            'alert-type'=>'success',
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
        $type = ClothType::find($request->id);
        $type->delete();
        $notification = array(
            'message'=>"Cloth Type had been deleted successfully!!!",
            'alert-type'=>'success',
        );
        return back()->with($notification);
    }
}
