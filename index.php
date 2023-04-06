<!DOCTYPE html>
<!-- 
Page Web Créé dans le cadre du TP de web dev le 02/11/2022
Auteur : Nathan Stéwill L
Email  : 
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html lang="fr-FR">
    
    <head>
        <title>Casques Nolark : Sécurité et confort , nos priorités !</title>
        <link rel="icon" type="image/x-icon" href="images/favicon/favicon.ico">
        <meta charset="UTF-8">
        <meta name="author" content="Nathan Stéwill L">
        <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité.
              Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css"/>
        <script src="js/nolark.js"></script>
    </head>
    
    <body>
        <div>
            <h1>LNS'S WORK</h1>    
        </div>
        <?php
            include 'includes/header.html.inc.php';
        ?>
        
        <section id="principal">
            <article>
                <img src="images/post-it.png" alt="Post-it : Penser à rentrer en vie" />
                <p>
                    Au delà de l'obligation légale, le port d'un casque est le garant de votre sécurité. Le choix de votre 
                    casque doit se faire en fonction de vos besoins (route, cross, piste...).
                </p>
                <p>
                    Spécialiste reconnu dans l'univers de la sécurité du deux)roues, Nolark vous propose des milliers de modèles
                    de casques disponibles au travers plus de 50 marques. Vous trouverez ici tous les types de casques moto : jet, intégral, modulable,
                    transfrmable, piste, cross ou encore un large choix de casque moto enfant (taille et poids spécilement adaptés).
                </p>
                <p>
                    Nolark c'est également la disponibilité de toutes les couleurs et matières et ce, pour toutes les bourses.
                </p>
                <p>
                    Une question ? Un conseil ? Nos conseillers sont là pour vous aiguiller afin de trouver le modèle qui correspond à vos besoins.
                </p>
                <p>
                    Nolark n'est pas seulement un magasin de casques, c'est avant tout une équipe de passionnés qui sélectionnent pour vous les meilleurs
                    casques moto afin de répondre au mieux à vos attentes.
                </p>
            </article>
        
            <aside>
                <img src="images/conseilcasque01.jpg" alt="Conseil du mois : Casque Cross"/>
                <p>Pour le style: Furious replica</p>
                <img src="images/conseilcasque02.jpg" alt="Conseil du mois : Intégral Piste"/>
                <p>Pour le confort: Stars racing</p>
            </aside>
        </section>
        
        <section id="sectthema">
            <h1>Catégories les plus populaires</h1>
            <article id="Gauche"><a  href="pages/route.php">Route</a></article>
            <article id="Milieu"><a  href="pages/cross.php">Cross</a></article>
            <article id="Droite"><a  href="pages/piste.php">Piste</a></article>
        </section>
        
        <?php
            include 'includes/footer.inc.php';
        ?>
        <!--<script src="js/index.js"></script>-->
    </body>
</html>