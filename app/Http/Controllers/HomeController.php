<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    public function index()
    {
        // $courses = new Course;
        
        
        // dd($user);

        $courses = Course::whereDoesntHave('users', function ($query) {
            $user_id = Auth ::id();
            $query->where('user_id', $user_id);
        })->get();
        return view('home', ['courses' => $courses]);
    }
}
