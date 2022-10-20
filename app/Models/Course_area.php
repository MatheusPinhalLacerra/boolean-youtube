<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_area extends Model
{
    use HasFactory;

    public function course(){
        return $this->hasMany(Course::class,'course_areas_id','id');
        }
}
