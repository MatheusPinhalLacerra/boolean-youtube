<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Course_area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateCourseController extends Controller
{
    function __construct()
    {
        $this -> middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $area_curso= Course_area::get();
        // dd($area_curso);
        return view('course-create', ['area_course' => $area_curso]);
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
    {   $user_id = Auth::id();
        
        
        $course = new Course;
        $course->user_id = $user_id;    
        $course->name = $request->name;
        $course->description = $request->description;
        $course->instructor_name = $request->instructor_name;
        $course->course_areas_id = $request->course_areas_id;

        //Upload de Imagem
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/cursos'), $imageName);

            $course->image = $imageName;
        }

        $course->save();

        return redirect('/registered-courses');
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
