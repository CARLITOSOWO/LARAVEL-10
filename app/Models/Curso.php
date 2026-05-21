<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;



    //protected $guarded = [];

    protected $fillable = [
        'name',
        'descripcion',
        'categoria'
    ];


}


