<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use softDeletes;
    
    protected $table = 'courses';

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /* Função de Slug */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($course) {
            $course->slug = Str::slug($course->name);
        });

        static::updating(function ($course) {
            $course->slug = Str::slug($course->name);
        });
    }
}
