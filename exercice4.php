<?php
/**ecrire un script qui genère une année et un mois 
 * puis détermine et affiche le nombre de jours de ce mois dans cette année
 */
define('MIN',1800);
define('MAX',2050);
$annee=rand(MIN,MAX);
$mois=rand(1,12);
$lettre="";
if($mois==1){
    $lettre="Janvier";
}
elseif($mois==2){
    $lettre="Février";
}
elseif($mois==3){
    $lettre="Mars";
}
elseif($mois==4){
    $lettre="Avril";
}
elseif($mois==5){
    $lettre="Mai";
}
elseif($mois==6){
    $lettre="Juin";
}
elseif($mois==7){
    $lettre="Juillet";
}
elseif($mois==8){
    $lettre="Aout";
}
elseif($mois==9){
    $lettre="Septembre";
}
elseif($mois==10){
    $lettre="Octobre";
}
elseif($mois==11){
    $lettre="Novembre";
}
elseif($mois==12){
    $lettre="Décembre";
}
$nbre_jour=31;
if($mois==4 or $mois==6 or $mois==9 or $mois==11){
    $nbre_jour=30;
}
elseif($mois==2){
    if($annee%100==0 && $annee%400==0){
        $nbre_jour=29;
    }
    if($annee%100!=0 && $annee%4==0){
        $nbre_jour=29;
    }
    else{
        $nbre_jour==28;
    }
}    
echo("Le mois $lettre de l'année $annee compte $nbre_jour jours <br>");

