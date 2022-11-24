<?php
    $auteurs=[
        ["id"=>1,"nom"=>"GUEDON","prenom"=> "DESIRE","profession"=>"DIRECTEUR"],
        ["id"=>2,"nom"=>"MASSARD","prenom"=> "ANDRE","profession"=>"directeur"],
        ["id"=>3,"nom"=>"toto","prenom"=> "tata","profession"=>"Ecrivain"],
        ["id"=>4,"nom"=>"Dubosc","prenom"=> "Alain","profession"=>"Entrepreneur"],
        ["id"=>5,"nom"=>"ARON","prenom"=> "Pedri","profession"=>"footbaleur"],           
    ];
    $ouvrages=[
        ["code"=>1,"titre"=>"l amour d une femme","date_edition"=>"2005","id_auteurs"=>1,"id_rayons"=>1],
        ["code"=>2,"titre"=>"ange et demon","date_edition"=>"1977","id_auteurs"=>2,"id_rayons"=>2], 
        ["code"=>3,"titre"=>"le cyclope","date_edition"=>"1980","id_auteurs"=>3,"id_rayons"=>1],
        ["code"=>4,"titre"=>"soy luna","date_edition"=>"2004","id_auteurs"=>4,"id_rayons"=>2],    
        ["code"=>5,"titre"=>"ZARA","date_edition"=>"1992","id_auteurs"=>5,"id_rayons"=>2], 
    ];
    $exemplaires=[
        ["code"=>1,"date_enregistrement"=>"7/06/2001","code_ouvrages"=>1,"nbre_exemplaires"=>4],
    ];
    $adhrent=[
        ["id"=>1,"nom"=>"BOLO","prenom"=>"Patrick"],
        ["id"=>2,"nom"=>"NDONG","prenom"=>"Charles"],
    ];
    $rayons=[
        ["id"=>1,"type"=>"histoire"],
        ["id"=>2,"type"=>"geographie"],
        ["id"=>3,"type"=>"litterature"],
        ["id"=>4,"type"=>"sciences humaines"],

    ];
    $prets=[
        ["id"=>1,"date_pret"=>"18/06/1980","date_retourP"=>"25/06/1980","date_retourR"=>"24/06/1980","id_adherent"=>1,"code_exmplaires"=>1],    
    ];
 
?>