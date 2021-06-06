<?php

namespace App\Http\Controllers;

use App\Models\ClothType;
use Illuminate\Http\Request;
use App\Models\MeasurementPart;

class MeasurementPartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="measurement Parts";
        $parts=MeasurementPart::get();
        $categories = ClothType::get();
        return view('measurement-parts',compact('title','parts','categories'));
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
            'cloth_type'=>'required',
            'name'=>'required|max:200',
            'description'=>'max:200',
            'image'=>'file|image|mimes:jpg,jpeg,png,gif',
        ]);
        $imageName = null;
        if($request->image != null){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('storage/parts'), $imageName);
        } 
        MeasurementPart::create([
            'cloth_type_id'=>$request->cloth_type,
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$imageName,
        ]);
        $notification = array(
            'message'=>"Measurement part added successfully!!",
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
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'cloth_type'=>'required',
            'name'=>'required|max:200',
            'description'=>'max:200',
            'image'=>'file|image|mimes:jpg,jpeg,png,gif',
        ]);
        $imageName = null;
        if($request->image != null){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('storage/parts'), $imageName);
        } 
        $part = MeasurementPart::find($request->id);
        $part->update([
            'cloth_type_id'=>$request->cloth_type,
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$imageName,
        ]);
        $notification=array(
            'message'=>"Measurement part has been updated !!!",
            'alert-type'=>'success'
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
        $part = MeasurementPart::find($request->id);
        $part->delete();
        $notification=array(
            'message'=>"Measurement part has been deleted !!!",
            'alert-type'=>'success'
        );
        return back()->with($notification);
    }
}
