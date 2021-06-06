<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="staff designations";
        $designations = Designation::get();
        return view('designations',compact('title','designations'));
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
            'title'=>'required|max:100'
        ]);
        Designation::create($request->all());
        $notification = array(
            'message'=>"Staff Designation has been added",
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
        $this->validate($request,['title'=>'required|max:100']);
        $designation =Designation::find($request->id);
        $designation->update($request->all());
        $notification = array(
            'message'=>"Staff Designation has been updated",
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
        $designation =Designation::find($request->id);
        $designation->delete();
        $notification = array(
            'message'=>"Staff Designation has been deleted",
            'alert-type'=>'success',
        );
        return back()->with($notification);
    }
}
