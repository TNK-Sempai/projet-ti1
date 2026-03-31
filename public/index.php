<?php
# Public/index.php 
require_once '../config.php';

// Routage entre les diverses vues 

//  Non existence de la variable 
// $_GET nommée 'p'
if(!isset($_GET['p'])){
    // nous sommes sur l'accueil
    // chargement de view/homepage.php 
    include ROOTH_PATH."/view/homepage.php";
}
elseif(in_array($_get['p'], ARRAY_VALID_PAGES)){
    // inclusion de la vue autorisée 
    include ROOTH_PATH."/view/".$_GET['p'].".php";
}
else{
    include ROOTH_PATH."/view/error404.php"; 
}

/* affichage des pages acceptées 
// Test de la const racine 
echo"Racine du projet : " . ROOTH_PATH . "<br>"; 
echo"<pre>";
print_r(ARRAY_VALID_PAGES);
echo"</pre>";
*/
