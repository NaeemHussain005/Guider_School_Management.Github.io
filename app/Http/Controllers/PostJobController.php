<?php

namespace App\Http\Controllers;
use App\Models\PostJob;
use App\Models\ApplyJob;
use Illuminate\Http\Request;
use DB;

class PostJobController extends Controller
{
    //
    public function index()
    {
        return view('applyJob');
           
    }

    function saveJob(Request $request){
       $data = new PostJob();
        $data->job_title = $request['job_title'];
        $data->lastdateofapply = $request['lastdateofapply'];
        $data->department = $request['department'];
        $data->job_description = $request['job_description'];
        $data->eligibility_criteria = $request['eligibility_criteria'];
        
        $data->save();
        return redirect()->back()->with('success'.'job added SuccessFully');
    }
    function applyJob(Request $request){
        $data = new ApplyJob();
         $data->name = $request['name'];
         $data->email_address= $request['email_address'];
         $data->dob = $request['dob'];
         $data->address = $request['address'];
         $data->phone_no = $request['phone_no'];
         $data->cnic_no = $request['cnic_no'];
         $data->job_applied_for = $request['job_applied_for'];
         $file = $request->file;
         $filename = time() . '.' . $file->getClientOriginalExtension();
         $request->file->move('assets', $filename);
         $data->file = $filename;
         $data->save();
         return redirect()->back()->with('success'.'job added SuccessFully');
     }

   
}
