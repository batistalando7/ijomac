<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
     use softDeletes;

     protected $table = 'teachers';

     protected $guarder = ['id'];
     
     //relacionamento com os cursos
     public function courses()
     {
         return $this->hasMany(Course::class);
     }
}
