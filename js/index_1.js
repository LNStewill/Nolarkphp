/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */

 /* window.addEventListener("load", function() {
        window.document.querySelector("#btnHello").addEventListener("load", function() {
        alert("coucou");
            }, false);
        }, false);*/
        //celui ci dessous charge le message mais ne reload pas la page cad le contenu reste visible
        /*window.addEventListener("load", function() {
                alert("Tous les casques Nolark au meilleur prix");
            });*/
        //celui ci dessous charge le message et reload pas la page cad le contenu disparait avant lors du rechargement de la Page web
        document.addEventListener('DOMContentLoaded', function() {
          console.log('HTML prêt !'); alert("BIENVENUE CHEZ CASQUE NOLARK");
        });

        /*let date = new Date();
        let options = {day: 'numeric', month: 'numeric', year: 'numeric'};
        console.log(date.toLocaleDateString('fr-FR', options)); // 19/03/2023*/

 /*let date = new Date();
let options = {day: 'numeric', month: 'numeric', year: 'numeric'};
let element = document.getElementById('date');
element.textContent = date.toLocaleDateString('fr-FR', options); // 19/03/2023*/
let date = new Date();
let options = {weekday: 'long', day: 'numeric', month: 'long', year: 'numeric', hour: 'numeric', minute: 'numeric'};
let element = document.getElementById('date');
element.textContent = date.toLocaleDateString('fr-FR', options); // dimanche 19 mars 2023 à 18:05
console.log(date.toLocaleDateString('fr-FR', options)); // dimanche 19 mars 2023 à 18:05