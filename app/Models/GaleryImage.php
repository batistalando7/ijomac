<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GaleryImage extends Model
{
    protected $table = 'galery_images';

    protected $guarded = ['id'];

    //relacionamento com a tabela galeries
    public function galery(){
        return $this->belongsTo(Galery::class, 'gallery_id', 'id');
    }
}
