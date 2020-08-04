 @include ('include.menu')
 <div class="  generale">
               <div class="  row ">
                        <div class="col-md-12">
                             <h4 class="pays">            <span class="titre-universite"></span></h4> 
                               <div class="row"> 
                                         <div class="col-md-4">
                                         <img src="{{asset('')}}" class="img-rounded" width="130px" height="150px" />
                                         {{-- Matricule:  <span class="mise-en-forme">{{$etudiant->matricule}}</span> --}}
                                         </div> 
                                         <div class="col-md-8 traitement-reference">
                                             <ul>
                        
                                                 <li class=" reference">Nom: <span class="mise-en-forme">{{$apprenant->nom}}</span></li>
                                                 <li  class=" reference">Prenom: <span class="mise-en-forme"> {{$apprenant->prenom}}</span></li>
                                                 <li  class=" reference">Date de naissance:<span class="mise-en-forme"> {{$apprenant->age}}</span></li>
                                                 <li  class=" reference">formation:<span class="mise-en-forme">{{$apprenant->formation}}</span></li>
                                                 <li  class=" reference">email:<span class="mise-en-forme">{{$apprenant->tuteur}}</span></li>
                                                 <li  class=" reference">ville:<span class="mise-en-forme">{{$apprenant->ville}}</span></li>
                                             </ul>
                                                          
                                        </div>    
                                </div>
                        </div>     

                </div> 
            
</div>
@include ('include.footer')