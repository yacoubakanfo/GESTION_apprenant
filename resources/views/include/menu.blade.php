<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gestion des Apprenants</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('asset/bootstrap/js/bootstrap.min.js')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('asset/css/style.css')}}"/>
        <link rel="icons" href="{{asset('asset/images/logosimplon.png')}}">
        <link rel="stylesheet" href="{{asset('asset/font/css/font-awesome.min.css')}}"/>
    </head>
    <body>
<nav class="navbar  navbar-expand-lg navbar-light bg-light menu">
    <a class="navbar-brand navb" href="accueill" title="Bienvenu sur Simplon app"><img class="logo"src="{{asset('asset/images/logosimplon.png')}}" alt="Logo de simplon"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link navl" href="{{route('nouveau')}}" title="Enregistrer un apprenant"><img class="image"src="{{asset('asset/images/etudiant1.png')}}" alt="enregistrer"><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link navl" href="{{route('form.liste')}}" title="Afficher la liste des apprenants"><img  class="image"src="{{asset('asset/images/liste.png')}}" alt="lister"></a>
        </li>
            <li class="nav-item navd">
            <a class="nav-link navl" href="imprimer.php" title="Imprimer la liste des apprenants"><img class="image"src="{{asset('asset/images/imprimer.png')}}" alt="imprimer"></a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2 inputr" type="search" placeholder="Rechercher..." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 boutonr" type="submit"><img src="{{asset('asset/images/recherche.png')}}" alt="recherche"></button>
        </form>
    </div>
</nav>
</body>
</html>