<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use App\Models\User_courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyCoursesController extends Controller
{
    
    function __construct()
    {
        $this -> middleware('auth');
    }


    public function index()
    {
        $user_id = Auth::id();
        
      $my_courses = User::where('id',$user_id)->with('courses')->first(); 
      //dd($my_courses->courses);

      return view('my-courses',['my_courses' => $my_courses->courses]);


       // return view('registered-courses',['registered_courses' => $registered_courses]);

        // $registered_courses = Course::where('user_id', $id_user)->get();
        // return view('registered-courses',['registered_courses' => $registered_courses]);
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
