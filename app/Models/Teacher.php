<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
     use softDeletes;

     protected $table = 'teachers';

     protected $guarder = ['id'];
     
}
