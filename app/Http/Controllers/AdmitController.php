<?php

namespace App\Http\Controllers;
use App\Models\Announcement;
use App\Models\Admission;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use DB;
use Illuminate\Http\Request;



class AdmitController extends Controller
{
    public function display(){
        $latestEntry = Announcement::latest()->first();
        return view('students', compact('latestEntry'));
        }
        public function apply(){
            return view('admisionform');
        }
        public function applyadmission(Request $request)
{
      $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'father_name' => 'required|string|max:255',
        'gender' => 'required|in:M,F',
        'dob' => 'nullable|date',
        'address' => 'nullable|string',
        'phone_no' => 'nullable|string',
        'cnic_no' => 'nullable|string',
        'degree' => 'nullable|string',
        'passing_year' => 'nullable|integer',
        'obtained_marks' => 'required|numeric',
        'total_marks' => 'nullable|numeric',
        'school_name' => 'nullable|string',
        'board' => 'nullable|string',
        'cv_file' => 'nullable|file|mimes:pdf,doc,docx',
        'result_file' => 'nullable|file|mimes:pdf,doc,docx',
    ]);

    $data = new Admission();
    $data->name = $validatedData['name'];
    $data->father_name = $validatedData['father_name'];
    $data->gender = $validatedData['gender'];
    $data->dob = $validatedData['dob'];
    $data->address = $validatedData['address'];
    $data->phone_no = $validatedData['phone_no'];
    $data->cnic_no = $validatedData['cnic_no'];
    $data->degree = $validatedData['degree'];
    $data->passing_year = $validatedData['passing_year'];
    $data->obtained_marks = $validatedData['obtained_marks'];
    $data->total_marks = $validatedData['total_marks'];
    $data->school_name = $validatedData['school_name'];

    // Check if 'board' field exists in the request
    $data->board = $validatedData['board'] ?? 'default_board'; // Set a default value if not provided

    // Uploading CV file
    if ($request->hasFile('cv_file')) {
        $cv_file = $request->file('cv_file');
        $cv_filename = time() . '.' . $cv_file->getClientOriginalExtension();
        $cv_file->move('assets', $cv_filename);
        $data->cv_file = $cv_filename;
    }

    // Uploading result file
    if ($request->hasFile('result_file')) {
        $result_file = $request->file('result_file');
        $result_filename = time() . '.' . $result_file->getClientOriginalExtension();
        $result_file->move('assets', $result_filename);
        $data->result_file = $result_filename;
    }

    $data->save();

    return redirect()->back()->with('success', 'Admission application submitted successfully');
}
public function download(Request $request,$cv_file)
{

   
   return response()->download(public_path('assets/'.$cv_file));
}
public function downloadfile(Request $request,$result_file)
{

   
   return response()->download(public_path('assets/'.$result_file));
}
   public function view($id)
{
   $data=Admission::find($id);

   return view('viewfile',compact('data'));
}
public function viewfile($id)
{
   $data=Admission::find($id);

   return view('viewfileresult',compact('data'));
}
    }
