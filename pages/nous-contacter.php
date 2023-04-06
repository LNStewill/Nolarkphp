<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html lang="fr-FR">
    <head>
        <title>Casques Nolark : Sécurité et confort , nos priorités !</title>
        <link rel="icon" type="image/x-icon" href="../images/favicon/favicon.ico">
        <meta charset="UTF-8">
        <meta name="author" content="Nathan Stéwill L">
        <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité.
              Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/casques.css"/>
        <link rel="stylesheet" href="../css/styles.css"/>
        <link rel="stylesheet" href="../css/contact.css"/>
        <script src="../js/nolark.js"></script>

    </head>
    <body>   
        
     <?php
            include '../includes/header.html.inc_1.php';
        ?>
        
        
        <section id="contact" style="border: none">
            <h1 style="margin-top: 10px; text-align: left;color: green;">Nous Contacter :</h1>
            
            <form id="form_contact" name="form_contact" action="http://btssio.bonaparte.free.fr/testforms.php">
                
                <fieldset id="coordo">
                    <legend><h2>Pour mieux vous connaître</h2></legend>
                    
                    <p>
                        <label for="i_nom">Votre nom :</label>
                        <input type="text" name="i_nom" id="i_nom" size="35" required/>
                    </p>
                    <p>
                        <label for="i_prenom">Votre prénom :</label>
                        <input type="text" name="i_prenom" id="i_prenom" size="35" required/><br> <br>
                    </p>
                    <p>
                        <label for="i_email">Votre e-mail :</label>
                        <input type="email" name="i_email" id="i_email" size="35" required/>
                    </p>
                    <p>
                        <label for="i_url">Votre url :</label>
                        <input type="url" name="i_url" id="i_url" size="35" required/>
                    </p>
                    <p>
                        <label>Vous êtes :</label>
                        <select name="lst_typeclient" id="lst_typeclient" required>

                            <option value=""></option>
                            <option value="1">Étudiant</option>
                            <option value="2">Salarié du privé</option>
                            <option value="3">Salarié du public</option>
                            <option value="4">Chef d'entreprise</option>
                            <option value="5">Journaliste</option>
                            <option value="6">Professionnel(le) du casque</option>
                            <option value="99">Autre statut</option>
                        </select>  
                    </p>
                    <p>
                        <label>Date de naissance :</label>
                        <input type="number" name="num_jour" min="1" max="31"/>/
                        <input type="number" name="num_mois" min="1" max="12"/>/
                        <input type="number" name="num_année" min="1950" max="2022"/>
                    </p>

                    <fieldset id="marques">
                        <legend><h2>Vos marques préférés</h2></legend>
                        
                        <table>
                            <tr>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_agv" value="agv" /><label>agv</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_Airoh" value="Airoh"/><label>Airoh</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_agv" value="agv" /><label>Araï</label></td>
                            </tr>
                            
                            <tr>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_Bell" value="Bell" /><label>Bell</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_Bell" value="Bell" /><label>Bering</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_Bell" value="Bell" /><label>Bultaco</label></td>
                            </tr>
                            
                            <tr>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_Caberg" value="Caberg" /><label>Caberg</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_Caberg" value="Caberg" /><label>Cameron</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_Caberg" value="Caberg" /><label>Chaft</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_agv" value="agv" /><label>Darts</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_agv" value="agv" /><label>Dg</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_agv" value="agv" /><label>Diesel</label></td>
                            </tr>
                            
                            <tr>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_agv" value="agv" /><label>Falco</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_agv" value="agv" /><label>Fox</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_agv" value="agv" /><label>Furygan</label></td>
                            </tr>
                            
                            <tr>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_agv" value="agv" /><label>Givi</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_agv" value="agv" /><label>Gpa</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_agv" value="agv" /><label>Grex</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_agv" value="agv" /><label>Helstons</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_agv" value="agv" /><label>Hjc</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_agv" value="agv" /><label>Hokkey</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_agv" value="agv" /><label>Ica</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_agv" value="agv" /><label>Icon</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_Ixon" value="Ixon" /><label>Ixon</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_agv" value="agv" /><label>Kenny</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_agv" value="agv" /><label>Knox</label></td>
                                <td></td>
                            </tr>
                        </table>
                            
                       
                    </fieldset>

                    <p>
                        <label for="favcolor">Votre couleur préférée :</label>
                        <input type="color" id="favcolor" name="favcolor" value="#232AFB">
                    </p>

                </fieldset>
                <fieldset id="motif" >
                        <legend><h2>Motif du contact</h2></legend>
                        <p>
                            <input type="radio" name="Demande d'information" value="Demande d'informtion">
                            <label>Demande d'information</label>
                        </p>
                        <p>
                            <input type="radio" id="css" name="fav_language" value="CSS">
                            <label>Réclamations</label>
                        </p>
                        <p>
                            <input type="radio" name="fav_language" value="JavaScript">
                            <label>Satisfaction</label> 
                        </p>
                        <p>
                           <input type="radio" name="fav_language" value="JavaScript">
                            <label>Suivi de commande</label> 
                        </p>
                        <p>
                            <input type="radio" name="fav_language" value="JavaScript">
                            <label>Publicité</label>  
                        </p>
                        <p>
                            <input type="radio" name="fav_language" value="JavaScript">
                            <label>Autre...</label> 
                        </p>
                        <p>
                            <label>Si "Autre" veuillez préciser :</label> <br>
                            <textarea name="message" rows="15" cols="40"></textarea>
                        </p> 
                </fieldset>
                <div id="Controles">
                    <input type="button" id="btn_envoyer" name="sub_envoyer" value="Envoyer votre demande de contact"/>
                    <input type="reset" name="rst_annuler" value="Effacer les réponses"/>
                </div>
                
            </form>
        </section>
        
        <div id="reparecontact">
            
            
        </div>
       
 <?php
            include '../includes/footer.inc_1.php';
        ?>       </body>
   
</html>
