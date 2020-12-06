// // JE RECUPERE TOUT LES ELEMENTS DE MA PAGE
//     let myParaf1 = document.getElementById('myParaf1');
//     let myParaf2= document.getElementById('myParaf2');
//     let myParafs = document.getElementsByClassName('myParafs');

//     let button_red = document.getElementById('button_red');
//     let button_blue = document.getElementById('button_blue');
//     let button_green = document.getElementById('button_green');
//     let selectColorText = document.getElementById('select_color');

//     let button_paraf1 = document.getElementById('button_paraf1');
//     let button_paraf2 = document.getElementById('button_paraf2');
//     let selectParafText = document.getElementById('select_paraf');

//     let button_apply = document.getElementById('button_apply');

// // JE CREE 2 VARIABLES PRIVEES POUR LES BESOIN DU SCRIPT
//     let selected_paraf ;
//     let selected_color;

// // J'ENREGISTRE MES ELEMENTS AUX FONCTIONS SOUHAITES AVEC L'EVENT SOUHAITE
// // J'UTILISE UNE FONCTION ANONYME SI JE VEUX PASSER DES PARAMETRES AUX FONCTIONS APPELLEES
//     button_red.addEventListener('click', function() { ChangeSelectedColor('red'); });
//     button_green.addEventListener('click', function() { ChangeSelectedColor('green'); });
//     button_blue.addEventListener('click', function() { ChangeSelectedColor('blue'); });

//     button_paraf1.addEventListener('click', function() { ChangeSelectedParaf(myParaf1); });
//     button_paraf2.addEventListener('click', function() { ChangeSelectedParaf(myParaf2); });

//     button_apply.addEventListener('click', Apply);

// // J'INITIALISE MES 2 VARIABLES AVEC UNE VALEUR PAR DEFAUT
//     ChangeSelectedParaf(myParaf1);
//     ChangeSelectedColor('red');

// // JE DECLARE LES FONCTIONS DONT J'AURAI BESOIN DANS LE SCRIPT
//     function ChangeSelectedParaf(newParaf) {
//         selected_paraf = newParaf;
//         if (selected_paraf === myParaf1)
//             selectParafText.innerHTML = 'Paraf1';
//         else if (selected_paraf === myParaf2)
//             selectParafText.innerHTML = 'Paraf2';
//     }
//     function ChangeSelectedColor(newColor) {
//         selected_color = newColor;
//         selectColorText.innerHTML = newColor;
//     }
//     function Apply() {
//         if (selected_paraf.classList.length > 0) {
//             for (const element of selected_paraf.classList) {
//                 selected_paraf.classList.remove(element);
//             }
//         }
//         selected_paraf.classList.add(selected_color);
//     }

// 
// Essai d'AJAX

        var httpRequest = new XMLHttpRequest();

        var variableARecuperee;

        // httpRequest.onload = function() {
        //     // variableARecuperee = this.responseText;
        //     variableARecuperee = JSON.parse(this.responseText)
        // };
        
        httpRequest.onreadystatechange = function() {
            if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
                variableARecuperee = JSON.parse(this.responseText);
                // variableARecuperee = httpRequest.responseText;
                // variableARecuperee = httpRequest.response;

                var mySelection = variableARecuperee[0].nom;
                // var mySelection = variableARecuperee[0]["nom"];          // Valable aussi
                console.log(mySelection);
                document.body.innerHTML = mySelection;
                
                // // Utile pour afficher le résultat de la requete dans la page
                // var test = "";
                // for(index in variableARecuperee) {
                //     test += JSON.stringify(variableARecuperee[index]);
                // }
                // document.body.innerHTML = test;
            }
        };

        httpRequest.open('GET', 'dbqueries/select_test.php', true);
        httpRequest.response = 'json';
        httpRequest.send();


        // Site du ZERO - Bout de code
        // var request = new XMLHttpRequest();
        // request.onreadystatechange = function() {
        //     if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
        //         var response = JSON.parse(this.responseText);
        //         console.log(response.current_condition.condition);
        //     }
        // };
        // request.open("GET", "https://www.prevision-meteo.ch/services/json/paris");
        // request.send();




// AJAX
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

// PASSER UNE VARIABLE DE PHP VERS JAVASCRIPT

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


// Météo - Fonctionne
    // var request = new XMLHttpRequest();
    // request.onreadystatechange = function() {
    //     if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
    //         var response = JSON.parse(this.responseText);
    //         console.log(response.current_condition.condition);
    //     }
    // };
    // request.open("GET", "https://www.prevision-meteo.ch/services/json/paris");
    // request.send();

// EXEMPLE DE CLASSE
    // class Book {
    //     constructor(title, author, pages) {
    //         this.title = title;
    //         this.author = author;
    //         this.pages = pages;
    //     }
    // }
    // let myBook = new Book("L'Histoire de Tao", "Will Alexander", 250);