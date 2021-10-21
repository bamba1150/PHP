<?php
/**ecrire un script qui genère un jour, un mois et une année
 * puis vérifie si la date générée est valide
 */
define('MIN',1900);
define('MAX',2050);
$jour=rand(1,50);
$mois=rand(1,20);
$annee=rand(MIN,MAX);
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
else {
    echo("Ce mois n'existe pas");
}
if($mois<=12){
    if($mois==4 || $mois==6 || $mois==9 || $mois==11){
        if(1<=$jour && $jour<=30){
            echo("$jour/$mois/$annee ou $jour $lettre $annee est la date genérée <br>");
        }
        else {
            echo("La date genérée n'est pas valide <br>");
        }
    }elseif($mois==2){
        if($annee%100==0 && $annee%400==0){
            if(1<=$jour && $jour<=29){
                echo("$jour/$mois/$annee ou $jour $lettre $annee est la date genérée <br>");
            }
            else {
                echo("La date genérée n'est pas valide <br>");
            }
        }elseif($annee%100!==0 && $annee%4==0){
            if(1<=$jour && $jour<=29){
                echo("$jour/$mois/$annee ou $jour $lettre $annee est la date genérée <br>");
            }
            else {
                echo("La date genérée n'est pas valide <br>");
            }
        }
    }else {
        if(1<=$jour && $jour<=31){
            echo("$jour/$mois/$annee ou $jour $lettre $annee est la date genérée <br>");
        }
        else {
            echo("La date genérée n'est pas valide");
        }
    }
}