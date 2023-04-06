<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>
<header>
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <?php /*$pages = array("route.php", "cross.php", "piste.php", "enfants.php", "LaTeam.php", "simulateur.php", "nous-contacter.php" );
                    $noms = array("Route", "Cross", "Piste", "Enfants", "La team", "Simulateur", "Nous contacter");
                    $nbLiens = count($pages);
                    for ($i=0; $i < $nbLiens; $i++) {
                    echo '<li><a href="pages/', $pages[$i], '">', $noms[$i], '</a></li>';
                    } */
                    
                  include ('lienspages.inc.php');
                    ?>
                </ul>

            </nav>
        </header> 