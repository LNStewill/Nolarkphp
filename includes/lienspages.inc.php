<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

    $pages = array("route.php", "cross.php", "piste.php", "enfants.php", "LaTeam.php", "simulateur.php", "nous-contacter.php" );
    $noms = array("Route", "Cross", "Piste", "Enfants", "La team", "Simulateur", "Nous contacter");
    $nbLiens = count($pages);
    for ($i=0; $i < $nbLiens; $i++) {
    echo '<li><a href="pages/', $pages[$i], '">', $noms[$i], '</a></li>';
    }
    
    /*'<br>'.
            '<br>'.
    $var1 = "bonjour";
    $var2 = "au revoir";
    
    function test() {
        global $var1;
        echo $var1 ;
        
    }
    '<br/>'.
    
    test()*/
?>
<br><br>

<!--
/*
    $url = array("route.php", "cross.php", "piste.php", "enfants.php", "LaTeam.php", "nous-contacter.php" );
        $tabVide = array();
        $tabAssociatif = array("noms" => "url");

        $tabVide[0] = "route.php";
        echo $tabAssociatif["noms"];

        foreach ($tabAssociatif as $noms => $url) {
            echo "la case d'indice". $noms. "contient". $url;
    }-->