<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Appoinment;
use App\Models\joblist;


class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->Usertype=="0"){
                $job= joblist::all();
                return view('user.home',compact('job'));
                
            }
            else{
                return view('admin.home');
            }
        }
        else{
            return redirect()->back();
        }
    }
    
    public function index(){

        $job= joblist::all();
        return view('user.home',compact('job'));
    }

    public function appoinment(Request $request){
        $data= new appoinment;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->sub=$request->sub;
        $data->msg=$request->msg;
        $data->status="In Progress";
        if(Auth::id()){
            $data->user_id=Auth::user()->id;
        }

        

        $data->save();
        return redirect()->back();
        print_r($request->all);
    }

    public function myappoinment(){
        if(Auth::id()){
            $userid=Auth::user()->id;

            $appoint=appoinment::where('user_id',$userid)->get();


            return view('user.myappoinment',compact('appoint'));
        }
        else{
            return redirect()->back();
        }
       
    }

    public function cancel_appoint($id){
        $data=appoinment::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function search(Request $request){
        if($request->isMethod('post')){
            $name=$request->get('name');
            $data=joblist::where('name', 'LIKE', '%'. $name . '%')->paginate(5);

            return view('user.search',compact('data'));
        }
    }

    public function browse(){

        $job= joblist::all();
        //dd($job);
        return view('user.browse',compact('job'));
    }

}