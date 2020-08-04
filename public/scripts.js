var fils= document.getElementsByClassName('fils');
fils[1].style.display="none";
function detail(){
    fils[1].style.display="flex";
}

var ligneTab=document.getElementsByClassName("lignetableau");


var id=document.getElementById("id");
var nom=document.getElementById("nom");
var prenom=document.getElementById("prenom");
var date_naiss=document.getElementById("date_naiss");
var ville=document.getElementById("ville");
var formation=document.getElementById("formation");
var etablissement=document.getElementById("etablissement");
var telephone=document.getElementById("telephone");
var email=document.getElementById("email");
var genre=document.getElementById("genre");
var tuteur=document.getElementById("tuteur");
var valeurs=[];


function detailApprenant(numb){
    var enfants=ligneTab[numb].childNodes;
    for (var i=0; i<enfants.length;i++){
       valeurs.push(enfants[0].innerHTML);
    }
    
    id.innerHTML=valeurs[0];
    nom.innerHTML=valeurs[1];
    prenom.innerHTML=valeurs[2];
    date_naiss.innerHTML=valeurs[3];
    ville.innerHTML=valeurs[4];
    formation.innerHTML=valeurs[5];
    etablissement.innerHTML=valeurs[6];
    telephone.innerHTML=valeurs[7];
    email.innerHTML=valeurs[8];
    genre.innerHTML=valeurs[9];
    tuteur.innerHTML=valeurs[10];
    detail();
}

for (var i=0; i<ligneTab.length;i++){
    ligneTab[0].onclick=function(){
        detailApprenant(0);
    }
}