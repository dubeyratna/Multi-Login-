<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddImage extends Model
{
    protected $table = "addimages";
    
    public $fillable = [
        'picture',
        
    ];
}
