<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apprenants extends Model
{
    protected $fillable = ['id','tuteurs_id',
        'nom','prenom',
        'ville','age','genre',
        'etablissement','formation',
        'telephone','email','photo'
     ];

     public function tuteurs(){
        return $this->belongsTo('App\tuteurs');
    }


}
