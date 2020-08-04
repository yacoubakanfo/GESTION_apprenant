<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tuteurs;

class TuteurController extends Controller
{
    public function new(){
    return view('form.enregistrer');

    }
    
        public function store(Request $request){
            $tuteurs=Tuteurs::create([
                'nom'=>$request->nom,
                'prenom'=>$request->prenom,
                'profession'=>$request->profession,
                'telephone'=>$request->telephone,
                
            ]);
       
//                    return redirect ('nouveau-enregistrement')
   }
}