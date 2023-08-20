<?php

namespace App\Http\Controllers;
use App\Models\Announcement;
use DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        
        return view('blog');
    }
        
}
