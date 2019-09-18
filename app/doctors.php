<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctors extends Model
{
    public $fillable = [
        'name','specialization','age','created_at'
    ];

    public $hidden = [
        'id'
    ];
    public function specialization()
    {
        return $this->hasMany('App\Speciality');
    }
}
