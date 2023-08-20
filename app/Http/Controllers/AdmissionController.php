<?php

namespace App\Http\Controllers;
use App\Models\Announcement;
use DB;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    //
    public function display(){

        $latestEntry = Announcement::latest()->first();
        return view('students', compact('latestEntry'));
        }
        public function apply(){
            return view('admisionform');
        }
        function announcement(Request $request){
            $data = new Announcement();
             $data->announcement = $request['announcement'];
             $data->save();
             return redirect()->back()->with('success'.'job added SuccessFully');
         }
    
    
}
