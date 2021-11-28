<?php
function init_filieres(){
    $niveaux=["L1","L2","L3","M1","M2"];
    return $niveaux;
}

function init_niveaux(){
    $filieres=["GLRS","MAE","ETSE","MOSIEF","NOTORIAT","ACTUARIAT"];
    return $filieres;
}

function init_classes(){
    $niveaux=init_niveaux();
    $filieres=init_filieres();
    $classes= [
        0 => [
             'id'==1,
             "niveau"=>$niveaux[0],
             "filiere"=>$filieres[0],
             "etudiants"=>[
                 ["nom"=>"Diop","prenom"=>"Mahmoud","date_naiss"=>"18/10/2001","sexe"=>"M"],
                 ["nom"=>"Ndiaye","prenom"=>"Bamba","date_naiss"=>"12/04/2000","sexe"=>"M"],
                 ["nom"=>"Fall","prenom"=>"Astou","date_naiss"=>"09/12/1999","sexe"=>"F"],
                 ["nom"=>"Ba","prenom"=>"Maimouna","date_naiss"=>"17/11/2001","sexe"=>"F"],
             ]
             ],
        1 => [
             'id'==2,
             "niveau"=>$niveaux[1],
             "filiere"=>$filieres[0],
             "etudiants"=>[
                 ["nom"=>"Wade","prenom"=>"Ahmadou","date_naiss"=>"25/07/2001","sexe"=>"M"],
                 ["nom"=>"Ndiaye","prenom"=>"Mariama","date_naiss"=>"12/02/2000","sexe"=>"F"],
                 ["nom"=>"Sow","prenom"=>"Atou","date_naiss"=>"24/12/1998","sexe"=>"F"],
                 ["nom"=>"Ndiaye","prenom"=>"Ndeye","date_naiss"=>"17/10/2001","sexe"=>"F"],
             ]
             ],
        2 => [
             "niveau"=>$niveaux[2],
             "filiere"=>$filieres[0],
             "etudiants"=>[
                 ["nom"=>"Diop","prenom"=>"Mahmoud","date_naiss"=>"18/10/2001","sexe"=>"M"],
                 ["nom"=>"Ndiaye","prenom"=>"Bamba","date_naiss"=>"12/04/2000","sexe"=>"M"],
                 ["nom"=>"Fall","prenom"=>"Astou","date_naiss"=>"09/12/1999","sexe"=>"F"],
                 ["nom"=>"Ba","prenom"=>"Maimouna","date_naiss"=>"17/11/2001","sexe"=>"F"],
             ]        
             ],
        3 => [
             "niveau"=>$niveaux[3],
             "filiere"=>$filieres[0],
             "etudiants"=>[
                 ["nom"=>"Diop","prenom"=>"Mahmoud","date_naiss"=>"18/10/2001","sexe"=>"M"],
                 ["nom"=>"Ndiaye","prenom"=>"Bamba","date_naiss"=>"12/04/2000","sexe"=>"M"],
                 ["nom"=>"Fall","prenom"=>"Astou","date_naiss"=>"09/12/1999","sexe"=>"F"],
                 ["nom"=>"Ba","prenom"=>"Maimouna","date_naiss"=>"17/11/2001","sexe"=>"F"],
             ]
             ],
        4 => [
             "niveau"=>$niveaux[4],
             "filiere"=>$filieres[0],
             "etudiants"=>[
                 ["nom"=>"Diop","prenom"=>"Mahmoud","date_naiss"=>"18/10/2001","sexe"=>"M"],
                 ["nom"=>"Ndiaye","prenom"=>"Bamba","date_naiss"=>"12/04/2000","sexe"=>"M"],
                 ["nom"=>"Fall","prenom"=>"Astou","date_naiss"=>"09/12/1999","sexe"=>"F"],
                 ["nom"=>"Ba","prenom"=>"Maimouna","date_naiss"=>"17/11/2001","sexe"=>"F"],
             ]
             ],
        5 =>[
            "niveau"=>$niveaux[0],
            "filiere"=>$filieres[1],
            "etudiants"=>[
                 ["nom"=>"Diop","prenom"=>"Mahmoud","date_naiss"=>"18/10/2001","sexe"=>"M"],
                 ["nom"=>"Ndiaye","prenom"=>"Bamba","date_naiss"=>"12/04/2000","sexe"=>"M"],
                 ["nom"=>"Fall","prenom"=>"Astou","date_naiss"=>"09/12/1999","sexe"=>"F"],
                 ["nom"=>"Ba","prenom"=>"Maimouna","date_naiss"=>"17/11/2001","sexe"=>"F"],
            ]
            ],
        6 =>[
            "niveau"=>$niveaux[1],
            "filiere"=>$filieres[1],
            "etudiants"=>[
                ["nom"=>"Diop","prenom"=>"Mahmoud","date_naiss"=>"18/10/2001","sexe"=>"M"],
                ["nom"=>"Ndiaye","prenom"=>"Bamba","date_naiss"=>"12/04/2000","sexe"=>"M"],
                ["nom"=>"Fall","prenom"=>"Astou","date_naiss"=>"09/12/1999","sexe"=>"F"],
                ["nom"=>"Ba","prenom"=>"Maimouna","date_naiss"=>"17/11/2001","sexe"=>"F"],
               ]
            ],
        7 =>[
            "niveau"=>$niveaux[2],
            "filiere"=>$filieres[1],
                "etudiants"=>[
                    ["nom"=>"Diop","prenom"=>"Mahmoud","date_naiss"=>"18/10/2001","sexe"=>"M"],
                    ["nom"=>"Ndiaye","prenom"=>"Bamba","date_naiss"=>"12/04/2000","sexe"=>"M"],
                    ["nom"=>"Fall","prenom"=>"Astou","date_naiss"=>"09/12/1999","sexe"=>"F"],
                    ["nom"=>"Ba","prenom"=>"Maimouna","date_naiss"=>"17/11/2001","sexe"=>"F"],
                ]
            ],
        8 =>[
            "niveau"=>$niveaux[3],
            "filiere"=>$filieres[1],
            "etudiants"=>[
                    ["nom"=>"Diop","prenom"=>"Mahmoud","date_naiss"=>"18/10/2001","sexe"=>"M"],
                    ["nom"=>"Ndiaye","prenom"=>"Bamba","date_naiss"=>"12/04/2000","sexe"=>"M"],
                    ["nom"=>"Fall","prenom"=>"Astou","date_naiss"=>"09/12/1999","sexe"=>"F"],
                    ["nom"=>"Ba","prenom"=>"Maimouna","date_naiss"=>"17/11/2001","sexe"=>"F"],
                    ]
           ],
        9 =>[
            "niveau"=>$niveaux[4],
            "filiere"=>$filieres[1],
            "etudiants"=>[
                    ["nom"=>"Diop","prenom"=>"Mahmoud","date_naiss"=>"18/10/2001","sexe"=>"M"],
                    ["nom"=>"Ndiaye","prenom"=>"Bamba","date_naiss"=>"12/04/2000","sexe"=>"M"],
                    ["nom"=>"Fall","prenom"=>"Astou","date_naiss"=>"09/12/1999","sexe"=>"F"],
                    ["nom"=>"Ba","prenom"=>"Maimouna","date_naiss"=>"17/11/2001","sexe"=>"F"],
                        ]
            ],
        10 =>[
            "niveau"=>$niveaux[0],
            "filiere"=>$filieres[2],
            "etudiants"=>[
                    ["nom"=>"Diop","prenom"=>"Mahmoud","date_naiss"=>"18/10/2001","sexe"=>"M"],
                    ["nom"=>"Ndiaye","prenom"=>"Bamba","date_naiss"=>"12/04/2000","sexe"=>"M"],
                    ["nom"=>"Fall","prenom"=>"Astou","date_naiss"=>"09/12/1999","sexe"=>"F"],
                    ["nom"=>"Ba","prenom"=>"Maimouna","date_naiss"=>"17/11/2001","sexe"=>"F"],
                        ]
            ],
        11 =>[
            "niveau"=>$niveaux[1],
            "filiere"=>$filieres[2],
            "etudiants"=>[
                    ["nom"=>"Diop","prenom"=>"Mahmoud","date_naiss"=>"18/10/2001","sexe"=>"M"],
                    ["nom"=>"Ndiaye","prenom"=>"Bamba","date_naiss"=>"12/04/2000","sexe"=>"M"],
                    ["nom"=>"Fall","prenom"=>"Astou","date_naiss"=>"09/12/1999","sexe"=>"F"],
                    ["nom"=>"Ba","prenom"=>"Maimouna","date_naiss"=>"17/11/2001","sexe"=>"F"],
                        ]
            ],
        12 =>[
            "niveau"=>$niveaux[2],
            "filiere"=>$filieres[2],
            "etudiants"=>[
                    ["nom"=>"Diop","prenom"=>"Mahmoud","date_naiss"=>"18/10/2001","sexe"=>"M"],
                    ["nom"=>"Ndiaye","prenom"=>"Bamba","date_naiss"=>"12/04/2000","sexe"=>"M"],
                    ["nom"=>"Fall","prenom"=>"Astou","date_naiss"=>"09/12/1999","sexe"=>"F"],
                    ["nom"=>"Ba","prenom"=>"Maimouna","date_naiss"=>"17/11/2001","sexe"=>"F"],
                        ]
            ],
        13 =>[
            "niveau"=>$niveaux[3],
            "filiere"=>$filieres[2],
            "etudiants"=>[
                    ["nom"=>"Diop","prenom"=>"Mahmoud","date_naiss"=>"18/10/2001","sexe"=>"M"],
                    ["nom"=>"Ndiaye","prenom"=>"Bamba","date_naiss"=>"12/04/2000","sexe"=>"M"],
                    ["nom"=>"Fall","prenom"=>"Astou","date_naiss"=>"09/12/1999","sexe"=>"F"],
                    ["nom"=>"Ba","prenom"=>"Maimouna","date_naiss"=>"17/11/2001","sexe"=>"F"],
                        ]
            ],
        14 =>[
            "niveau"=>$niveaux[4],
            "filiere"=>$filieres[2],
            "etudiants"=>[
                    ["nom"=>"Diop","prenom"=>"Mahmoud","date_naiss"=>"18/10/2001","sexe"=>"M"],
                    ["nom"=>"Ndiaye","prenom"=>"Bamba","date_naiss"=>"12/04/2000","sexe"=>"M"],
                    ["nom"=>"Fall","prenom"=>"Astou","date_naiss"=>"09/12/1999","sexe"=>"F"],
                    ["nom"=>"Ba","prenom"=>"Maimouna","date_naiss"=>"17/11/2001","sexe"=>"F"],
                        ]
            ],
        15 =>[
            "niveau"=>$niveaux[0],
            "filiere"=>$filieres[3],
            "etudiants"=>[
                    ["nom"=>"Diop","prenom"=>"Mahmoud","date_naiss"=>"18/10/2001","sexe"=>"M"],
                    ["nom"=>"Ndiaye","prenom"=>"Bamba","date_naiss"=>"12/04/2000","sexe"=>"M"],
                    ["nom"=>"Fall","prenom"=>"Astou","date_naiss"=>"09/12/1999","sexe"=>"F"],
                    ["nom"=>"Ba","prenom"=>"Maimouna","date_naiss"=>"17/11/2001","sexe"=>"F"],
                        ]
            ],                                
     ]; 
     
    return $classes;   
}
