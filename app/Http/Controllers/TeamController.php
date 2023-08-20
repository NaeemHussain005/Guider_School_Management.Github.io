<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TeamController extends Controller
{
    //
    public function index()
    {
        return view('team');
           
    }

}