//#region  Météo - Fonctionne

// var request = new XMLHttpRequest();
// request.onreadystatechange = function() {
//     if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
//         var response = JSON.parse(this.responseText);
//         console.log(response.current_condition.condition);
//     }
// };
// request.open("GET", "https://www.prevision-meteo.ch/services/json/paris");
// request.send();

//#endregion

//#region  EXEMPLE DE CLASSE

// class Book {
//     constructor(title, author, pages) {
//         this.title = title;
//         this.author = author;
//         this.pages = pages;
//     }
// }
// let myBook = new Book("L'Histoire de Tao", "Will Alexander", 250);

//#endregion

//#region RECUPERE TOUT LES ELEMENTS DE MA PAGE

// let myParaf1 = document.getElementById('myParaf1');

//#endregion

//#region Docs Events

// // J'ENREGISTRE MES ELEMENTS AUX FONCTIONS SOUHAITES AVEC L'EVENT SOUHAITE
// // J'UTILISE UNE FONCTION ANONYME SI JE VEUX PASSER DES PARAMETRES AUX FONCTIONS APPELLEES
//     button_red.addEventListener('click', function() { ChangeSelectedColor('red'); });

//#endregion

//#region Essai d'AJAX

// var httpRequest = new XMLHttpRequest();

// // // ?? équivalent que httpRequest.onreadystatechange == 4 (DONE)
// // httpRequest.onload = function() {

// //     // correspond à la réponse du script appelé
// //     httpRequest.onload.response

// //     // ???
// //     // let result = this.responseText;
// //     let result = JSON.parse(this.responseText)

// // };

// httpRequest.onreadystatechange = function() {
//     if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
//         let result;
//         result = JSON.parse(this.responseText);
//         result = httpRequest.responseText;
//         result = httpRequest.response;

//         var mySelection = result[0].nom;
//         // var mySelection = result[0]["nom"];          // Valable aussi
//         console.log(mySelection);
//         document.body.innerHTML = mySelection;
        
//         // Utile pour afficher le résultat de la requete dans la page
//         var test = "";
//         for(index in result) {
//             test += JSON.stringify(result[index]);
//         }
//         document.body.innerHTML = test;
//     }
// };

// httpRequest.open('GET', 'dbqueries/select_test.php', true);
// httpRequest.response = 'json';
// httpRequest.send();

//#endregion

//#region Docs AJAX

// // 1) 0n crée un nouvel objet de type XMLHttpRequest qui correspond à notre objet AJAX. C'est grâce à lui qu'on va créer et envoyer notre requête.
//     var httpRequest = new XMLHttpRequest();


// // ONREADYSTATECHANGE: nous allons devoir utiliser la propriété  onreadystatechange  en lui passant une fonction. Cette fonction sera appelée à chaque fois que l'état de la requête évolue.
//     // UNSENT  (code 0) : l'objet est prêt mais la méthode  open()  n'a pas encore été appelée.
//     // OPENED  (code 1) :  open()  a été appelé.
//     // HEADERS_RECEIVED  (code 2) :  send()  a été appelé, les headers et  status  sont disponibles au sein de l'objet.
//     // LOADING  (code 3) : réception en cours, les données reçues sont partielles.
//     // DONE  (code 4) : requête terminée.

// // httpRequest.onreadystatechange = function() {
// //     if (httpRequest.readyState === 4) {
// //         document.getElementById('myResponse').innerHTML = httpRequest.responseText;
// //     }
// // };


// // On demande à ouvrir une connexion vers un service web. C'est ici que l'on précise quelle méthode HTTP on souhaite, ainsi que l'URL du service web et est-ce qu'on désire faire un appel ASYNCHRONE de la page.
//     httpRequest.open('GET', 'javascript_ajax.php?=city=Laneffe', true);

// // On envoie finalement la requête au service web.
//     httpRequest.send();

//#endregion

//#region PASSER UNE VARIABLE DE PHP VERS JAVASCRIPT

// // 1) Afficher en PHP la valeur directement dans le code JS. La fonction 'json_encode' permet d'éviter des injections de code malveillant inséré depuis PHP par exemple.
//     var variableRecuperee = <?php echo json_encode($variableAPasser); ?>;

// // 2) Avec la balise <input> en type 'hidden'.
//     // <!-- HTML -->
//         <input type=hidden id=variableAPasser value=<?php eco $variableAPasser; ?>/>
//     // //JavaScript
//         var variableRecuperee = document.getElementById(variableAPasser).value;
        
// // 3) L'AJAX:
//     // Fichier PHP script.php
//         <?php echo $variableAPasser; ?>
//     // JavaScript
//         var requete = new XMLHttpRequest();

//         requete.onload = function() {
//             //La variable à passer est alors contenue dans l'objet response et l'attribut responseText.
//             var variableARecuperee = this.responseText;
//         };

//         //True pour que l'exécution du script continue pendant le chargement, false pour attendre.
//         requete.open(get, script.php, true);

//         requete.send();

// // 4) Les COOKIES
//     // PHP
//         setcookie(MonCookie, $variableAPasser);
//     // JavaScript
//         //Ce bout de code permet de trier les cookies pour les stocker dans un tableau associatif.
//         var cookies = document.cookie.split(;).
//         map(function(el){ return el.split(=); }).
//         reduce(function(prev,cur){ prev[cur[0]] = cur[1];return prev },{});

//         //Récupération de la variable dans le tableau
//         var variableRecuperee = cookies[MonCookie];

//#endregion

//#region ParseJSONtoHTMLTable

// function ParseJSONtoHTMLTable(result) {
//     let html = "<table>";
//     for (let i = 0; i < result.length; i++) {
//         html += "<tr>";        
//         for (const property in result[i]) {
//             if (result[i].hasOwnProperty(property)) {
//                 const currentProperty = result[i][property];
//                 html += "<td>" + currentProperty + "</td>";
//             }
//         }
//         html += "</tr>";
//     }
//     html += "</table>";
//     return html;
// }

//#endregion