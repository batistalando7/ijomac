<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patners extends Model
{
    use SoftDeletes;

    protected $table = 'patners';

    protected $guarded = ['id'];
    
}
