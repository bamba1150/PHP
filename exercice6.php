<?php
/**ecrire un script qui genère un jour, un mois et une année 
 * puis détermine et affiche la date suivante et la date précédente
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
    echo("Ce mois n'existe pas <br>");
}
if($mois<=12){
    if($mois==4 || $mois==6 || $mois==9 || $mois==11){
        if(1<=$jour && $jour<=30){
            echo("$jour/$mois/$annee ou $jour $lettre $annee est la date genérée <br>");
            if($jour>1 && $jour<=29){
                $jour_s=$jour+1;
                $jour_p=$jour-1;
                echo("$jour_s/$mois/$annee ou $jour_s $lettre $annee est la date suivante <br>");
                echo("$jour_p/$mois/$annee ou $jour_p $lettre $annee est la date précédente <br>");
            }
            else{
                if ($jour==1){
                    $jour_s=$jour+1;
                    $jour_p=31;
                    $mois_p=$mois-1;
                    echo("$jour_s/$mois/$annee ou $jour_s $lettre $annee est la date suivante <br>");
                    echo("$jour_p/$mois_p/$annee ou $jour_p $lettre $annee est la date précédente <br>");
                }
                elseif($jour==30){
                    $jour_s=1;
                    $jour_p=29;
                    $mois_s=$mois+1;
                    echo("$jour_s/$mois_s/$annee ou $mois_s $lettre $annee est la date suivante <br>");
                    echo("$jour_p/$mois/$annee ou $jour_p $lettre $annee est la date précédente <br>");
                }
            }
        }
        else {
            echo("La date genérée n'est pas valide <br>");
        }
    }elseif($mois==2){
        if($annee%100==0 && $annee%400==0){
            if(1<=$jour && $jour<=29){
                echo("$jour/$mois/$annee ou $jour $lettre $annee est la date genérée <br>");
                if($jour>1 && $jour<=28){
                    $jour_s=$jour+1;
                    $jour_p=$jour-1;
                    echo("$jour_s/$mois/$annee ou $jour_s $lettre $annee est la date suivante <br>");
                    echo("$jour_p/$mois/$annee ou $jour_p $lettre $annee est la date précédente <br>");
                }
                else{
                    if ($jour==1){
                        $jour_s=$jour+1;
                        $jour_p=31;
                        $mois_p=$mois-1;
                        echo("$jour_s/$mois/$annee ou $jour_s $lettre $annee est la date suivante <br>");
                        echo("$jour_p/$mois_p/$annee ou $jour_p $lettre $annee est la date précédente <br>");
                    }
                    elseif($jour==29){
                        $jour_s=1;
                        $jour_p=28;
                        $mois_s=$mois+1;
                        echo("$jour_s/$mois_s/$annee ou $mois_s $lettre $annee est la date suivante <br>");
                        echo("$jour_p/$mois/$annee ou $jour_p $lettre $annee est la date précédente <br>");
                    }
            }
            else {
                echo("La date genérée n'est pas valide <br>");
            }
        }elseif($annee%100!==0 && $annee%4==0){
            if(1<=$jour && $jour<=29){
                echo("$jour/$mois/$annee ou $jour $lettre $annee est la date genérée <br>");
                if($jour>1 && $jour<=28){
                    $jour_s=$jour+1;
                    $jour_p=$jour-1;
                    echo("$jour_s/$mois/$annee ou $jour_s $lettre $annee est la date suivante <br>");
                    echo("$jour_p/$mois/$annee ou $jour_p $lettre $annee est la date précédente <br>");
                }
                else{
                    if ($jour==1){
                        $jour_s=$jour+1;
                        $jour_p=31;
                        $mois_p=$mois-1;
                        echo("$jour_s/$mois/$annee ou $jour_s $lettre $annee est la date suivante <br>");
                        echo("$jour_p/$mois_p/$annee ou $jour_p $lettre $annee est la date précédente <br>");
                    }
                    elseif($jour==29){
                        $jour_s=1;
                        $jour_p=28;
                        $mois_s=$mois+1;
                        echo("$jour_s/$mois_s/$annee ou $mois_s $lettre $annee est la date suivante <br>");
                        echo("$jour_p/$mois/$annee ou $jour_p $lettre $annee est la date précédente <br>");
                    }
            }
            else {
                echo("La date genérée n'est pas valide <br>");
            }
        }
    }else {
        if(1<=$jour && $jour<=31){
            echo("$jour/$mois/$annee ou $jour $lettre $annee est la date genérée <br>");
            if($mois==3 or $mois==5 or $mois==7 or $mois==8 or $mois==10){
                if($jour>1 && $jour<=30){
                    $jour_s=$jour+1;
                    $jour_p=$jour-1;
                    echo("$jour_s/$mois/$annee ou $jour_s $lettre $annee est la date suivante <br>");
                    echo("$jour_p/$mois/$annee ou $jour_p $lettre $annee est la date précédente <br>");
                }
                else{
                    if($jour==1){
                       if($mois==3 && (($annee%100==0 && $annee%400==0)or($annee%100!=0 && $annee%4==0))){
                           $jour_s=$jour+1;
                           $jour_p=28;
                           $mois_p=2;
                           echo("$jour_s/$mois/$annee ou $jour_s $lettre $annee est la date suivante <br>");
                           echo("$jour_p/$mois_p/$annee ou $jour_p $letrre $annee est la date précédente <br>");
                       } 
                       else{
                           $jour_s=$jour+1;
                           $jour_p=27;
                           $mois_p=2;
                           echo("$jour_s/$mois/$annee ou $jour_s $lettre $annee est la date suivante <br>");
                           echo("$jour_p/$mois_p/$annee ou $jour_p $lettre $annee est la date précédente <br>");
                       }
                    elseif($jour==31){
                        $jour_s=1;
                        $jour_p=30;
                        $mois_s=$mois+1;
                        echo("$jour_s/$mois_s/$annee ou $jour_s $lettre $annee est la date suivante <br>");
                        echo("$jour_p/$mois/$annee ou $jour_p $lettre $annee est la date précédente <br>");
                    }
                }
            }else(){
                if($mois==1){
                    
                }
            }
        }
        else {
            echo("La date genérée n'est pas valide <br>");
        }
    }
}