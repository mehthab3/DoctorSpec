<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    public $fillable = [
        'field','specialization','desciption','created_at'
    ];

    public $hidden = [
        'id'
    ];
    
}
