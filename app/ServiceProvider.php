<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    protected $table='service_providers';
    protected $fillable = [
        'user_id','provider_id','provider',
    ];

   

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
