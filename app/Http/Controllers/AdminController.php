<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\joblist;

use App\Models\Appoinment;

class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_job');
    }

    public function upload(Request $request){
      $data =new joblist;
      $data->name=$request->name;
      $data->company=$request->company;
      $data->location=$request->location;
      $data->type=$request->type;
      $data->save();
      return redirect()->back();

    }

    public function showapp(){
        $data=appoinment::all();
        return view('admin.showapp',compact('data'));
    }

    public function approve($id){
        $data=appoinment::find($id);
        $data->status='approved';
        $data->save();
        return redirect()->back();
    }

    public function canceled($id){
        $data=appoinment::find($id);
        $data->status='cancel';
        $data->save();
        return redirect()->back();
    }

    public function showjob(){
        $data=joblist::all();
        return view('admin.showjob',compact('data'));
    }

    public function deletejob($id){
        $data=joblist::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function updatejob($id){
        $data=joblist::find($id);
        return view('admin.updatejob',compact('data'));
    }

    public function editjob(Request $request, $id){
        $data=joblist::find($id);

        $data->name=$request->name;
        $data->company=$request->company;
        $data->location=$request->location;
        $data->type=$request->type;

        $data->save();

        return redirect()->back();
        
    }
}
