<?php
require_once("./données/data.php");

/**var_dump($_POST["niveau"], $_POST["filiere"]);

/**
 * Requete POST ou FET
 */
$niveaux=init_niveaux();
$filieres=init_filieres();
$classes=show_classe($_POST["niveau"], $_POST["filiere"]);

require_once('./base/classe.html.php');
/**
 * fonctionnalités
 */
function show_classe(string $niveau=null, string $filiere=null):array{
    if ($niveau!=null && !is_null($filiere)){
        return filter_classe($niveau,$filiere);
    }
    return init_classes();
} 

function filter_classe(string $niveau, string $filiere):array{
    $classes=init_classes();
    $classes_filter=[];
    foreach($classes as $classe){
        if ($classe["niveau"]==$niveau && $classe["filiere"]==$filiere){
            $classes_filter[]=$classe;
        }
    }
    return $classes_filter;
}

function show_etudiant_by_classe(){

}