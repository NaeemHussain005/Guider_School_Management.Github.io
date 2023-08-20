<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Admission;
class ApplicantController extends Controller
{
    //
    public function display(){
        return view('applicants');
    }

    public function show()
            {

               $data=admission::all();
               return view('applicants',compact('data'));
            }
               public function download(Request $request,$file)
            {
               return response()->download(public_path('assets/'.$file));
            }
          
               public function view($id)
            {
               $data=admission::find($id);

               return view('viewapplicant',compact('data'));
            }
        }