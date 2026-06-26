<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class Student extends Model
{
    use SoftDeletes;

    protected $table = 'students';

    protected $guarded = ['id'];

    public function course() {
     return $this->belongsTo(Course::class);
     }
    
    /* Função de Slug */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($student) {
            $student->slug = Str::slug($student->name);
        });

        static::updating(function ($student) {
            $student->slug = Str::slug($student->name);
        });
    }
}
