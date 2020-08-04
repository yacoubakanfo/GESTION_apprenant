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

<main id="main">
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container">
      
<br> <br><br>
       <div class="section-title" >
          <h2 ><strong> LISTE DES apprenants</strong></strong></h2> 
          <a class="btn btn-primary" href="{{route('nouveau')}}">Ajouter un apprenant</a>
        </div>
<div class="table responsive fcontainer">
<table class="table table-striped table-bordered table-over texte1" >
<thead>
<th>N°</th>
<th>Nom</th>
<th>Prenom</th>
<th>ville</th>
<th>Email</th>
<th>Tuteur</th>
<th>Details</th>
<th>Modifier</th>
<th>Suprimer</th>
</thead>
<tbody>
<?php $i=0; ?>
@foreach($apprenants as $apprenant)
<?php $i++; ?>
<tr>
<td>{{$i}}</td>
<td>{{$apprenant->nom}}</td>
<td>{{$apprenant->prenom}} </td>
<td>{{$apprenant->ville}}</td>
<td>{{$apprenant->email}}</td>
<td>{{$apprenant->tuteurs->nom}}</td>

<td><a class="btn btn-primary" href="{{route('details',['apprenant'=>$apprenant->nom,'id'=>$apprenant->id])}} ">Détail</a></td>
<td><a class="btn btn-dark" href="{{route('modifier',['id'=>$apprenant->id])}}">Modifier</a></td>
<td><a class="btn btn-danger" href="{{route('supprimer',['id'=>$apprenant->id])}}">Supprimer</a></td>
</tr>
@endforeach
</tbody>
</table>
</div>

</div>
  </section><!-- End Hero -->
  <hr>
     
    

  </main><!-- End #main -->

  
  @include ('include.footer')
