<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html lang="fr-FR">
    <head>
        <title>Simulation</title>
        <link rel="icon" type="image/x-icon" href="../images/favicon/favicon.ico">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/casques.css"/>
        <link rel="stylesheet" href="../css/styles.css"/>
        <link rel="stylesheet" href="../css/team.css"/>
        <script src="../js/remuneration.js"></script>
    </head>
    <body>
        
        <?php
            include '../includes/header.html.inc_1.php';
        ?>
        
        <br><br><br>
        
        
        <section> 
            <h1 style=" color: red">Simulation de Calcul pour la force de vente : </h1>
            <form  name="remuneration" action="action">
                <fieldset>
                    <legend>Vos résultats</legend>
                    <center>
                        <label>Nombre d'années d'ancienneté : </label> <input style=" width: 50px" type="number" id="num_ancien" min="0" max="50" value="0"> <br><br> 
                        <label>Nombre de S 20 vendus : </label> <input  style=" width: 50px" type="number" id="num_s20" min="0" value="0"> <br><br>
                        <label>Nombre de X-Spirit vendus : </label> <input style=" width: 50px" type="number" id="num_xspirit" min="0" value="0"> <br><br>
                        <label>Nombre de Multitec vendus : </label> <input style=" width: 50px" type="number" id="num_multi" min="0" value="0"> <br><br>

                        <p id="remuneration" style=" color: red"></p>
                    </center>  
                </fieldset>
                <br>
                <hr>
                <center>
                        <input type="button" id="btn_calculer" value="Calculer votre rémunération"/>
                        <input type="reset" name="rst_annuler" value="Effacer les données"/>
                </center>
            </form>
        </section>
        
        <section>
            <h1>Simulateur de Primes Pour les transporteurs de Livr'Express </h1>
            
            <form action="action">
                <fieldset>
                    <legend>Vos résultats</legend>
                    <center>
                        <label>Nombre d'accidents provoqués : </label> <input style=" width: 50px" type="number" id="nb_accident" min="0" max="50" value="0"> <br><br> 
                        <label>Nombre d'années d'ancienneté : </label> <input  style=" width: 50px" type="number" id="nb_ancien" min="0" value="0"> <br><br>
                        <label>Distance Km parcourue : </label> <input style=" width: 50px" type="number" id="dist" min="0" value="0"> <br><br>

                        <p id="Livr" style=" color: red"></p>
                    </center>  
                    
                    <br>
                <hr>
                <center>
                        <input type="button" id="btn_Livr" value="Calculer votre Prime"/>
                        <input type="reset" name="rst_annuler" value="Effacer les données"/>
                </center>
                    
                </fieldset>
            </form>
            
        </section>
        
        
        <section>
            <h1>Simulateur du taux d'Alcoolémie</h1>
            
            <form action="action">
                <fieldset>
                    <legend>Vos résultats</legend>
                    <center>
                        <label>Poids : </label><input type="number">
                        <br><br>
                        <label>Votre sexe : </label>
                        <select>
                            <option value="select"></option>
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>
                        <br><br>
                        
                        <p id="Alcool" style=" color: red"></p>
                        <p id="amendes" style=" color: brown"></p>
                    </center>  
                    
                    <br>
                <hr>
                <center>
                        <input type="button" id="btn_Alcool" value="Vérifiez vos éventuelles amendes"/>
                        <input type="reset" name="rst_annuler" value="Effacer les données"/>
                </center>
                    
                </fieldset>
            </form>
            
        </section>
        
        <div style="height: 100px">
            
            
        </div>
        
        <?php
            include '../includes/footer.inc_1.php';
        ?> 
        
    </body>
</html>