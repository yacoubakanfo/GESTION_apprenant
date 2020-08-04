<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apprenants;
use App\Tuteurs;

class ApprenantController extends Controller
{
    public function new(){
        $tuteurs=Tuteurs::all();

    return view('form.enregistrer', compact('tuteurs'));

    }

    public function store(Request $request){
        $imagePath=request('photo')->store('uploads','public');
        Apprenants::create([
            'tuteurs_id'=>$request->tuteurs_id,
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'ville'=>$request->ville,
            'age'=>$request->age,
            'genre'=>$request->genre,
            'etablissement'=>$request->etablissement,
            'formation'=>$request->formation,
            'telephone'=>$request->telephone,
            'email'=>$request->email,
            'photo'=>$imagePath
            
        ]);

        // Tuteurs::create([
        //     'nom'=>$request->nom,
        //     'prenom'=>$request->prenom,
        //     'profession'=>$request->profession,
        //     'telephone'=>$request->telephone,
        //     ]);
   
        // return redirect ('nouveau-enregistrement'); 
     }
     public function list(Apprenants $apprenants){
         $apprenants=Apprenants::get();
         return view('form.liste',compact('apprenants'));
     }
    
     public function destroy(int $id){
         $apprenant=Apprenants::find($id);
         $id=$apprenant->id;
         $apprenant->delete();
        //  return redirect()->route('form.liste',['id'=>$id]);

     }
     public function details(string $apprenant, int $id){
        $apprenant=Apprenants::find($id);
        return view('detail',compact('apprenant' ));
    }
    public function update( int $id){
        $apprenant=Apprenants::find($id);
        $id=$apprenant->id;
        $apprenant->update();
    }
}
