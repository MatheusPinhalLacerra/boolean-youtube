<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

public function users (){

    return $this->belongsToMany(User::class, "user_courses","course_id","user_id");
}

public function course_area(){
return $this->belongsTo(Course_area::class,'course_areas_id','id');
}

protected $guarded = [];



}
