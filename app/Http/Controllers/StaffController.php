<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Designation;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "staff";
        $designations=Designation::get();
        $staff = Staff::get();
        return view('staff',compact('title','designations','staff'));
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
            'designation'=>'required',
            'fullname'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'phone'=>'required',
            'salary'=>'required',
            'avatar'=>'file|image|mimes:jpg,jpeg,png,gif',
        ]);   
        $imageName = null;
        if($request->avatar != null){
            $imageName = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path('storage/avatars'), $imageName);
        }  

        Staff::create([
            'designation_id'=>$request->designation,
            'fullname'=>$request->fullname,
            'address'=>$request->address,
            'gender'=>$request->gender,
            'phone'=>$request->phone,
            'salary'=>$request->salary,
            'avatar'=>$imageName,
        ]);
        $notification = array(
            'message'=>"Staff added successfully!!",
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
        $staff = Staff::find($request->id);
        $staff->delete();
        $notification=array(
            'message'=>"Staff has been deleted!!!",
            'alert-type'=>'success',
        );
        return back()->with($notification);
    }
}
