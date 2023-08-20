<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('home');
        
    }
    public function show(Request $request)
    {
        $users = DB::select('select * from users');
        return view('users',['users'=>$users]);
        }
    
    
    public function display(){
        $users = DB::select('select * from postjob');
        return view('jobs',['users'=>$users]);
        }
    public function admissions(Request $request)
    {
        return view('admissions');
    }
    
    public function postJob(Request $request)
    {
        return view('postJob');
    }
    public function showcareers(Request $request)
        {
            $users = DB::select('select * from postjob');
            return view('careers',['users'=>$users]);
            }
        
         
         
    public function finish(){
        $users = DB::select('select * from postjob');
        return view('jobs',['users'=>$users]);
        }
        public function destroy($id) {
        DB::delete('delete from postjob where id = ?',[$id]);
        
        return back()
        ->with('success','Record Deleted Successfully')
        ->with('file');
        return redirect()->route('/jobs');
        }

        public function end(){
            $users = DB::select('select * from users');
            return view('users',['users'=>$users]);
            }
            public function des($id) {
            DB::delete('delete from users where id = ?',[$id]);
            
            return back()
            ->with('success','Record Deleted Successfully')
            ->with('file');
            return redirect()->route('/users');
            }
        
    
}
