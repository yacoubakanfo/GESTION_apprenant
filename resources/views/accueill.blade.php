<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gestion des Apprenants</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('asset/bootstrap/js/bootstrap.min.js')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('asset/css/style.css')}}/>
        <link rel="icon" href="{{asset('asset/images/logosimplon.png')}}">
        <link rel="stylesheet" href="{{asset('asset/font/css/font-awesome.min.css')}}"/>
    </head>
    <body>
           @include('include.menu')
        <div class="row corps">
            <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12 bodybg">              
            </div>
        </div>
        <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12 bodytext">
            <span class="text1">Bienvenue dans l'application de gestion des apprenants de Simplon.</span><br>
            <span class="text1">PROMO 2020</span><br><br><br><br>
            <span class="text2">GESTION DES APPRENANTS, TUTEURS</span><br><br>
            <span class="text3">V1.0</span>
        </div>
            @include ('include.footer')
        <script src="scripts.js"></script>        
    </body>
</html>