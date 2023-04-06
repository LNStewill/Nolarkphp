<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$cnx = new PDO('mysql:host=127.0.0.1;dbname=nolark', 'nolarkuser', 'nolarkpwd');
$req = 'SELECT casque.id, nom, modele, libelle, prix, classement, image, stock';
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
}

?>

<?php
/*
$currentPage = basename($_SERVER['PHP_SELF']);
$images = array();

switch ($currentPage) {
    case 'route.php':
        $images = array('image1.jpg', 'image2.jpg', 'image3.jpg');
        break;
    case 'cross.php':
        $images = array('image4.jpg', 'image5.jpg', 'image6.jpg');
        break;
    case 'piste.php':
        $images = array('image7.jpg', 'image8.jpg', 'image9.jpg');
        break;
    case 'enfants.php':
        $images = array('image10.jpg', 'image11.jpg', 'image12.jpg');
        break;
}

foreach ($images as $image) {
    echo '<article>';
    echo '<img src="../images/casques/', $ligne->libelle, '/', $ligne->image,
            '"alt="', $ligne->modele, '" />';
    echo '</article>';
}
?>*/