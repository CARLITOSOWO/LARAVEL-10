<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Override;

class Curso extends Model
{
    use HasFactory;



    //protected $guarded = [];

    protected $fillable = [
        'name',
        'slug',
        'descripcion',
        'categoria'
    ];

    
    public function getRouteKeyName()
    {
        return 'slug';
    }

}


