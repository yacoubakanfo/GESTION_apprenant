<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Tuteurs extends Model
{
    protected $fillable= ['id',
        'nom','prenom',
        'profession','telephone',
     ];

     public function apprenants(){
         return $this->hasMany('App\apprenants');
     }
}
