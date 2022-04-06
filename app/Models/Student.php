<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "email",
        "course_id"
    ];
    
    public $timestamps = false;

    // public function courses() {

    //     return $this->hasMany(Course::class);
    // }
}
