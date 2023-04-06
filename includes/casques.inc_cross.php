<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$cnx = new PDO('mysql:host=127.0.0.1;dbname=nolark', 'nolarkuser', 'nolarkpwd');
/*$req = 'SELECT casque.id, nom, modele, libelle, prix, classement, image, stock';
$req.=' FROM casque INNER JOIN type ON casque.type=type.id';
$req.=           ' INNER JOIN marque ON casque.marque=marque.id';
//requête au serveur
$res = $cnx -> query($req);
// parcourir le résultat retourné pour afficher les images
while ($ligne = $res->fetch(PDO::FETCH_OBJ)) {
    echo '<article>';
    echo '<img src="../images/casques/', $ligne->libelle, '/', $ligne->image,
            '"alt="', $ligne->modele, '" />';
    echo '</article>';
}*/

/*$req = 'SELECT casque.id, nom, modele, libelle, prix, classement, image, stock';
$req.=' FROM casque INNER JOIN type ON casque.type=type.id';
$req.=           ' INNER JOIN marque ON casque.marque=marque.id';
$req.=           ' WHERE type.libelle = "cross"';
//requête au serveur
$res = $cnx -> query($req);
// parcourir le résultat retourné pour afficher les images
while ($ligne = $res->fetch(PDO::FETCH_OBJ)) {
    echo '<article>';
    echo '<img src="../images/casques/', $ligne->libelle, '/', $ligne->image,
            '"alt="', $ligne->modele, '" />';
    echo '</article>';
}*/$req = 'SELECT casque.id, nom, modele, libelle, prix, classement, image, stock';
$req.=' FROM casque INNER JOIN type ON casque.type=type.id';
$req.=           ' INNER JOIN marque ON casque.marque=marque.id';
$req.=           ' WHERE type.libelle = "cross"';
//requête au serveur
$res = $cnx -> query($req);

/*$req = 'SELECT casque.id, nom, modele, libelle, prix, classement, image, stock';
$req.=' FROM casque INNER JOIN type ON casque.type=type.id';
$req.=           ' INNER JOIN marque ON casque.marque=marque.id';
$req.=           ' WHERE type.libelle = "cross"';
//requête au serveur
$res = $cnx -> query($req);*/

// Affichage des articles
while ($article = $res->fetch()) {
    echo '<article>';
    echo '<img src="../images/casques/cross/' . $article['image'] . '" alt="' . $article['nom'] . '"/>';
    echo '<p class="stockok"><abbr data-tip="' . $article['stock'] . '">stock</abbr></p>';
    echo '<p class="prix">' . $article['prix'] . '</p>';
    echo '<p class="marque">' . $article['nom'] . '</p>';
    echo '<p class="modele">' . $article['modele'] . '</p>';
    echo '<div class="classement classement' . $article['classement'] . '"></div>';
    echo '</article>';
}

// Fermeture de la connexion à la base de données
$res->closeCursor();

/*// parcourir le résultat retourné pour afficher les images
while ($ligne = $res->fetch(PDO::FETCH_OBJ)) {
    echo '<article>';
    echo '<img src="../images/casques/', $ligne->libelle, '/', $ligne->image,
            '"alt="', $ligne->modele, '" />';
    echo '<p>Nom: ', $ligne->nom, '</p>';
    echo '<p>Modèle: ', $ligne->modele, '</p>';
    echo '<p>Prix: ', $ligne->prix, '</p>';
    echo '<p>Classement: ', $ligne->classement, '</p>';
    echo '</article>';
}*/

    /*// Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=nom_de_la_base_de_donnees;charset=utf8', 'nom_utilisateur', 'mot_de_passe');

    // Récupération des articles
    $articles = $bdd->query('SELECT * FROM nom_de_la_table');

    // Affichage des articles
    while ($article = $articles->fetch()) {
        echo '<article>';
        echo '<img src="' . $article['chemin_vers_image'] . '" alt="' . $article['description_image'] . '"/>';
        echo '<p class="stockok"><abbr data-tip="' . $article['stock'] . '">stock</abbr></p>';
        echo '<p class="prix">' . $article['prix'] . '</p>';
        echo '<p class="marque">' . $article['marque'] . '</p>';
        echo '<p class="modele">' . $article['modele'] . '</p>';
        echo '<div class="classement classement' . $article['classement'] . '"></div>';
        echo '</article>';
    }

    // Fermeture de la connexion à la base de données
    $articles->closeCursor();
    */
