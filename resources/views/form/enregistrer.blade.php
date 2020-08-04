 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gestion des Apprenants</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('asset/bootstrap/js/bootstrap.min.js')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css')}}"/>
        <link rel="icon" href="{{asset('asset/images/logosimplon.png')}}">
        <link rel="stylesheet" href="{{asset('asset/font/css/font-awesome.min.css')}}"/>
    </head>
    <body>
         @include ('include.menu')
        <div class="container-fluid enregistrer"><fieldset class="feuillebox">            
        <form action="{{route('store')}}" enctype="multipart/form-data" method="POST">
            @csrf  
                <fieldset>
                    <legend>IDENTITE APPRENANT</legend>
                <div class="form-row">
                    <div class="col-md-6 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinput">                        
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Nom</span>
                                </div>
                                <input type="text" class="form-control inputborder" id="validationServerUsername" name="nom" placeholder="entrer nom..." aria-describedby="inputGroupPrepend3" >                        
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-6 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinput">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Prénom(s)</span>
                                </div>
                                <input type="text" class="form-control inputborder" id="validationServerUsername" name="prenom" placeholder="entrer prénom..." aria-describedby="inputGroupPrepend3" >
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinput">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Date de naissance</span>
                                </div>
                                <input type="date" class="form-control inputborder" id="validationServerUsername" name="age" placeholder="entrer date de naissance..." aria-describedby="inputGroupPrepend3" >
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-6 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinput">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Ville d'origine</span>
                                </div>
                                <input type="text" class="form-control inputborder" id="validationServerUsername" name="ville" placeholder="entrer ville d'origine..." aria-describedby="inputGroupPrepend3" >
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="form-row">            
                    <div class="col-md-6 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinput">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Formation</span>
                                </div>
                                <input type="text" class="form-control inputborder" id="validationServerUsername" name="formation" placeholder="entrer formation..." aria-describedby="inputGroupPrepend3" >
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-6 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinput">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Etablissement précédent</span>
                                </div>
                                <input type="text" class="form-control inputborder" id="validationServerUsername" name="etablissement" placeholder="entrer établissement précédent..." aria-describedby="inputGroupPrepend3" >
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinput">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Téléphone</span>
                                </div>
                                <input type="text" class="form-control inputborder" id="validationServerUsername" name="telephone" placeholder="entrer numéro de téléphone..." aria-describedby="inputGroupPrepend3" pattern="[0-9]{8,}" >
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-6 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinput">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Email</span>
                                </div>
                                <input type="email" class="form-control inputborder" id="validationServerUsername" name="email" placeholder="exemple@domaine.com..." aria-describedby="inputGroupPrepend3" >
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="form-row">
                <div class="col-md-6 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinput">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Genre</span>
                                </div>
                                <select class="form-control selectborder" id="validationServerUsername" name="genre"  aria-describedby="inputGroupPrepend3" pattern="[^\s]" >
                                    <option selected></option>
                                    <option value="homme">Homme</option>
                                    <option value="femme">Femme</option>
                                </select>
                            </div>
                        </fieldset>
                    </div>
                    <div class="form-group">
                        <label for="tuteurs_id">Tuteur:</label>
                        <select name="tuteurs_id" class="form-control">
                            <option value="0">choisir le tuteur</option>
                            <?php $i=0; ?>
                                @foreach($tuteurs as $tuteur)
                                <?php $i++; ?>
                                    <option value="{{$tuteur->id}}">{{$i}}. {{$tuteur->nom}} </option>
                                    @endforeach
                                </select>
                    <div class="col-md-6 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinput">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Photo</span>
                                </div>
                                <input type="file" class="form-control inputborder" id="validationServerUsername" name="photo" placeholder="ajouter photo..." aria-describedby="inputGroupPrepend3" >
                            </div>
                        </fieldset>
                    </div>
                </div>
                </fieldset>
                <div class="row boutons">        
                        <button class="btn btn-primary envoyer" type="submit">Enregistrer</button>
                        <button class="btn btn-primary annuler" type="reset">Annuler</button> 
                    </div>
                </form>
                <form action="{{route('tuteur.store')}}" method="post">
                @csrf
                <fieldset class="tuteur">
                  <legend>IDENTITE TUTEUR</legend>
                <div class="form-row">
                    <div class="col-md-12 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinputphoto">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Nom</span>
                                </div>
                                <input type="text" class="form-control inputborder" id="validationServerUsername" name="nom" placeholder="entrer nom..." aria-describedby="inputGroupPrepend3" >
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinputphoto">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Prénom(s)</span>
                                </div>
                                <input type="text" class="form-control inputborder" id="validationServerUsername" name="prenom" placeholder="entrer prénom..." aria-describedby="inputGroupPrepend3" >
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinputphoto">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Profession</span>
                                </div>
                                <input type="text" class="form-control inputborder" id="validationServerUsername" name="profession" placeholder="entrer profession..." aria-describedby="inputGroupPrepend3" >
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-4">
                        <fieldset class="fieldcadre">
                            <div class="input-group champinputphoto">
                                <div class="input-group-prepend">
                                    <span class="input-group-text inputlabel" id="inputGroupPrepend3">Téléphone</span>
                                </div>
                                <input type="text" class="form-control inputborder" id="validationServerUsername" name="telephone" placeholder="entrer numéro de téléphone..." pattern="[0-9]{8,}" aria-describedby="inputGroupPrepend3" >
                            </div>
                        </fieldset>
                    </div>
                </div>
                </fieldset> 
                <div class="row boutons">        
                <button class="btn btn-primary envoyer" type="submit">Enregistrer</button>
                <button class="btn btn-primary annuler" type="reset">Annuler</button> 
            </div>
         </form>
         </fieldset>              -
        </div>
         @include ('include.footer')
        <script src="scripts.js"></script>        
    </body>
</html> 