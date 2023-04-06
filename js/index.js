/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */
let date = new Date();
let options = {weekday: 'long', day: 'numeric', month: 'long', year: 'numeric', hour: 'numeric', minute: 'numeric'};
let element = document.getElementById('date');
element.textContent = date.toLocaleDateString('fr-FR', options); // dimanche 19 mars 2023 à 18:05
console.log(date.toLocaleDateString('fr-FR', options)); // dimanche 19 mars 2023 à 18:05