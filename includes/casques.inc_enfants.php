<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$cnx = new PDO('mysql:host=127.0.0.1;dbname=nolark', 'nolarkuser', 'nolarkpwd');
$req = 'SELECT casque.id, nom, modele, libelle, prix, classement, image, stock';
$req.=' FROM casque INNER JOIN type ON casque.type=type.id';
$req.=           ' INNER JOIN marque ON casque.marque=marque.id';
$req.=           ' WHERE type.libelle = "enfants"';
//requête au serveur
$res = $cnx -> query($req);

// Affichage des articles
while ($article = $res->fetch()) {
    echo '<article>';
    echo '<img src="../images/casques/enfants/' . $article['image'] . '" alt="' . $article['nom'] . '"/>';
    echo '<p class="stockok"><abbr data-tip="' . $article['stock'] . '">stock</abbr></p>';
    echo '<p class="prix">' . $article['prix'] . '</p>';
    echo '<p class="marque">' . $article['nom'] . '</p>';
    echo '<p class="modele">' . $article['modele'] . '</p>';
    echo '<div class="classement classement' . $article['classement'] . '"></div>';
    echo '</article>';
}

// Fermeture de la connexion à la base de données
$res->closeCursor();