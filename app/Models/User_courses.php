<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_courses extends Model
{
    public function course(){
        return $this ->belongsTo('App\Course', 'courses_id','id'); 
    }

    use HasFactory;
}
