<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class ServiceRequest extends Model
{
    use softDeletes;

    protected $table = 'service_requests';

    protected $guarded = ['id'];

     /* Função de Slug */
    /* protected static function boot()
    {
        parent::boot();

        static::creating(function ($serviceRequest) {
            $serviceRequest->slug = Str::slug($serviceRequest->name);
        });

        static::updating(function ($serviceRequest) {
            $serviceRequest->slug = Str::slug($serviceRequest->name);
        });
    }
 */
    //relacionamento
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
