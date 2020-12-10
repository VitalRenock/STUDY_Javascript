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

//#region Les égalités

    // L'égalité simple:
        // L'égalité simple vérifie la valeur, mais pas le type. Donc l'instruction suivante renvoie la valeur 'true': 
        // 5 == "5"

    // L'égalité stricte:
        // L'égalité stricte vérifie à la fois la valeur et le type. Donc l'instruction suivante renvoie 'false',
        // car on compare un  number  à un  string.
        // 5 === "5"

    // De même, il y a deux opérateurs d'inégalité  !=  et  !==, avec la même distinction.

//#endregion

//#region Les portées

    // Les variables privées (portée du bloc):
        // En JavaScript, les variables créées par  let  ou  const  ne peuvent être vues ou utilisées qu'à l'intérieur du bloc de code dans lequel elles sont déclarées.
        let variablePrive = 5;
        const constantePrive = 5;
    // Les variables public (global):
        // la portée 'var' à un scope de fonction, elle est déclarée dès le début du script mais assigné seuleument à la l'execution, voire l'exemple pour mieux comprendre:
            // console.log(x); // résultat = undefined (existe mais pas de type et valeur)
            // var x=5;
            // console.log(x); // résultat = 5
        var variablePublic = 5;

//#endregion

//#region Déclarer une variable

    var demo = 'Bonjour Renock'

//#endregion

//#region Déclarer un objet

    var myObject = {
        name: "Jean",
        lastname: "Dujardin",
        age: 48,
        score1: 58,
        score2: 24,

        // Fonction appartenant à un objet
        GiveYourName: function() {
            return this.name + " " + this.lastname // 'this' pour faire réference aux variable de l'objet
        }
    }

//#endregion

//#region Déclarer un tableau

    var guests = [];
    var eleves = ['Marc', 'Sandrine', 'Olivier', 'Sarah'];
    guests.push("Tao Perkington");                      // ajoute "Tao Perkington" à la fin de notre tableau guests
    guests.unshift("Tao Perkington");                   // "Tao Perkington" est ajouté au début du tableau guests
    guests.pop();                                       // supprimer le dernier élément du tableau
    let howManyGuests = guests.length;                  // Nombre d'élément du tableau

//#endregion

//#region Déclarer un tableau d'objets

    var joueurs = [
        {
            pseudo: "Renock",
            score: 63
        },
        {
            pseudo: "Mexojer",
            score: 68
        },
        {
            pseudo: "Deidrack",
            score: 82
        },
        {
            pseudo: "Momo",
            score: 98
        },
        {
            pseudo: "Lye88",
            score: 72
        }
    ]

//#endregion

//#region Déclarer un ensemble

    const set1 = new Set([1, 2, 3, 4, 5]);              // continuer à apprendre

//#endregion

//#region Déclarer un dictionnaire

    // new Map([iterable])                                 // continuer à apprendre

//#endregion

//#region Afficher un message dans la console (du navigateur)

    console.log(demo)

//#endregion    

//#region Conditions IF, ELSE

    if (myObject.score1 < 20)
        console.log(myObject.name + " n'a pas assez de points.")
    else if (myObject.score1 == 20)
        console.log(myObject.name + " est limite en points.")
    else
        console.log(myObject.name + " a assez de points.")

//#endregion

//#region Le SWITCH

    switch (myObject.score2) {
        case 20:
            console.log(myObject.name + " a 20 points.")
            break
        case 21:
            console.log(myObject.name + " a 21 points.")
            break
        case 22:
            console.log(myObject.name + " a 22 points.")
            break
        case 23:
            console.log(myObject.name + " a 23 points.")
            break
        case 24:
            console.log(myObject.name + " a 24 points.")
            break
        case 25:
            console.log(myObject.name + " a 25 points.")
            break
        default:
            console.log(myObject.name + " n'a pas assez de points.")
    }

//#endregion

//#region Condition ternaire

    console.log(myObject.age >= 18 ? "Tu es majeur" : "Tu es mineur")

//#endregion

//#region Boucle WHILE

    var i = 0
    while (i < myObject.score1)
    {
        console.log("Ouverture de la récompense: " + (i + 1))

        // Stopper une boucle
        if (i >= 49)
            break

        i++ // ou i = i + 1 ou i += 1
    }
    console.log("Fin des ouvertures de récompense!")

//#endregion

//#region Boucle FOR

    for (var j = 0; j < eleves.length; j++)
        console.log("L'élève " + j + " s'appelle " + eleves[j])

//#endregion

//#region Boucle FOR IN (écriture simplifiée de la boucle FOR)

    const passengers = [
        "Will Alexander",
        "Sarah Kate'",
        "Audrey Simon",
        "Tao Perkington"
    ]
    for (let i in passengers) {
        console.log("Embarquement du passager " + passengers[i]);
    }

//#endregion

//#region Boucle FOR OF (pour avoir l'objet directement sans avoir besoin d'une notion d'index 'i')

    const lecteurs = [
        {
            name: "Will Alexander",
            ticketNumber: 209542
        },
        {
            name: "Sarah Kate",
            ticketNumber: 169336
        },
        {
            name: "Audrey Simon",
            ticketNumber: 779042
        },
        {
            name: "Tao Perkington",
            ticketNumber: 703911
        }
    ]
    for (let passenger of lecteurs) {
        console.log('Embarquement du passager ' + passenger.name + ' avec le ticket numéro ' + passenger.ticketNumber);
    }

//#endregion

//#region Les fonctions

    // fonction utilisable AVANT ou APRES sa déclaration (instancié au chargement du script)
    function CheckWin (pseudo, score, maxScore) {
        // Vérifier une valeur NULL
        if (pseudo == undefined)
            pseudo = "Inconnu"
        if (score == undefined)
            score = 0
        if (maxScore == undefined)
            maxScore = 100;

        console.log(pseudo + " a obtenu " + score + "/" + maxScore)
        if (score < 75)
            console.log(pseudo + " a perdu!")
        else
            console.log(pseudo + " a gagné!")
    }
    // fonction utilisable SEULEMENT APRES sa déclaration (instancié à la déclaration de la variable)
    var launchCheckWin = function(joueurs) {
        for (var k = 0; k < joueurs.length; k++)
            CheckWin(joueurs[k].pseudo, joueurs[k].score)
    }
    launchCheckWin(joueurs)
    // fonction situé dans un objet
    console.log(myObject.GiveYourName())

//#endregion

//#region Parsing INT et FLOAT

    console.log(parseInt("36", 10))             // string => int (en base 10)
    console.log(parseInt("011", 2))             // string => int (en base 2)
    console.log(parseFloat("3.14"))             // string => float
    console.log(parseInt('87Points83', 10))     // Filtrage automatique des chiffres (affiche le premier chiffre '87')

//#endregion

//#region Fonctions mathématique

    var nombrePi = Math.PI
    console.log(nombrePi + " arrondis = " + Math.round(nombrePi))
    console.log("Un chiffre random = " + Math.random()) // entre 0 et 1

//#endregion

//#region Méthodes et prototype embarquées dans les variables

    console.log(19.34.toString())                                               // Convertir un float en string
    console.log("'myObject.age' est un Int: " + Number.isInteger(myObject.age)) // Vérifie si la variable est un integer
    console.log("'eleves' est un tableau: " + Array.isArray(eleves))            // Vérifie si la variable est un tableau
    eleves.push("Zoé")                                                          // Ajout d'un élément au tableau 'eleves'
    console.log(eleves)

//#endregion

//#region Mot-clé 'this'

    var personnage = {
        nom: "Sangoku",

        Transformation: function() {
            var self = this
            var cri = "YAAAAA!"
            var demo = {
                Hurler: function() {
                    console.log(self.nom + " " + cri)
                }
            }
            demo.Hurler()
        }
    }
    personnage.Transformation()

//#endregion

//#region Les prototypes

    var combatPkm = {                               // Création d'un prototype 'combatPkm'
        Attaquer: function() {
            var self = this
            console.log(self.nom +  " lance l'attaque " + self.attaque + "!")
        },

        Fuir: function() {
            var self = this
            console.log(self.nom + " fuis le combat.")
        }
    }
    var pikachu = {                                 // Création de deux pokemons
        nom: "Pikachu",
        attaque: "Éclair"
    }
    var roucool = {
        nom: "Roucool",
        attaque: "Cru-aile"
    }
    pikachu.__proto__ = combatPkm                   // Ajout du prototype 'combatPkm' aux pokemons précédement crées
    roucool.__proto__ = combatPkm
    pikachu.Attaquer()                              // Il est maintenant possible d'attaquer avec 'pikachu' et 'roucool'
    roucool.Fuir()

    var abra = Object.create(combatPkm)             // Autre méthode de création...
    abra.nom = "Abra"
    abra.attaque = "Teleport"
    abra.Attaquer()
    abra.Fuir()

//#endregion

//#region Constructeur

    var Vehicule = function(nom, type) {            // Création d'un objet avec constructeur
        this.nom = nom,
        this.type = type
    }
    var Airbus = new Vehicule("Airbus", "Avion")    // Création de 2 nouveaux objets avec le constructeur "Vehicule"
    var Honda = new Vehicule("Honda", "Voiture")
    var Vehicules = []
    Vehicules.push(Airbus, Honda)                   // Pour la demo, création et affichage d'un tableau
    console.log(Vehicules)

//#endregion

//#region Gérer les erreurs:

    // Try, Catch, Finally
    var x = {}
    try {
        x.GiveYourName()
    }
    catch (error) {
        console.log("- Une erreur a été rencontrée: " + error)
        console.log("- Emplacement de l'erreur: " + error.stack)
    }
    finally {
        console.log("- Erreur mise en quarantaine, reprise du code!")
    }

    // Créer une erreur personnalisé
    try {
        if (myObject.age >= 18) {
            console.log("* Entrée autorisé.")
        }
        else
            throw new Error("* Vous n'avez pas 18ans.")
    }
    catch (error) {
        console.log(error)
    }
    finally {
        console.log("* Vérification terminée.")
    }

//#endregion

//#region Pour sélectionner un élément

    var body = document.body                                // Récupère l'élément body
    var idDemo = document.getElementById('demo')            // Sélectionne l'élément avec l'id demo
    var selecteurCssDemo = document.querySelector('.demo')  // Sélectionne le premier élément correspondant au sélecteur CSS

//#endregion

//#region Pour sélectionner plusieurs éléments

    var classDemo = document.getElementsByClassName('demo') // Sélectionne les éléments avec la class démo
    var tagDemo = document.getElementsByTagName('p')        // Sélectionne les éléments avec le tag '<p>'
    var elements = document.querySelectorAll('.demo')       // Sélectionne les éléments correspondant au sélecteur CSS

//#endregion

//#region À RÉVISER: Accéder aux divers éléments parent/enfants, ect

    // element[0].getAttribute('attribut')                     // Permet de récupérer la valeur d'un attribut
    // element[0].style                                        // Permet de récupérer les styles associés à l'élément
    // element[0].classList                                    // Permet de récupérer la liste des classes associées à un élément 
    // element[0].offsetHeight                                 // Donne la hauteur réel de l'élément

    // element[0].setAttribute('href', 'http://grafikart.fr')
    // element[0].style.fontSize = '24px'
    // element[0].classList.add('red')                         // Ajoute une class à l'élément

    // element[0].childNodes                                   // Renvoie tous les noeuds enfant (même les noeuds textes)
    // element[0].children                                     // Renvoie tous les noeuds éléments
    // element[0].firstChild                                   // Récupère le premier enfant 
    // element[0].firstElementChild                            // Récupère le premier enfant de type element 
    // element[0].previousElementSibling
    // element[0].nextElementSibling

    // element[0].appendChild(enfant)                          // ajoute un élément à un autre
    // element[0].removeChild(enfant)                          // supprime un enfant 
    // element[0].textContent = 'Salut'                        // Change la valeur du noeud texte 
    // element[0].innerHTML                                    // Renvoie le contenu HTML de l'élément 
    // parentElement.insertBefore(nouvelElement, refElement)

//#endregion

//#region Fonction qui s'appelle elle-même

    // (function() {
    //     // code...
    // })()

//#endregion

//#region Exemple de paragraphe qui change de text quand il est clické

    // var allParag = document.querySelectorAll('p');
    // var helloWorld = 'Hello world!';

    // for (let i = 0; i < allParag.length; i++) {
    //     var p = allParag[i];
    //     var rougit = function() {
    //         // this.classList.toggle('red');
    //         this.innerHTML = 'Renock world';
    //     }
    //     p.addEventListener('click', rougit);
    // }

    // // for (let i = 0; i < allParag.length; i++) {
    // //     var p = allParag[i];
    // //     function Rougit() {
    // //         this.classList.toggle('red');
    // //     }
    // //     p.addEventListener('click', Rougit);
    // // }

//#endregion

//#region Afficher une popup

    // window.alert("Bienvenue dans votre première App.")

//#endregion

//#region Afficher une boite de dialogue

    // var pseudo = window.prompt("Votre pseudo")
    // console.log(pseudo)

//#endregion

//#region Afficher une boite de confirmation (renvoie 'true' / 'false')

    // var confirmation = window.confirm("Êtes-vous sûr?")
    // console.log("Pseudo confirmé: " + confirmation)

//#endregion

//#region Les Timers

    // var increment = 0
    // function Demo() {
    //     increment++
    //     var now = new Date()
    //     console.log("Activation: " + now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds() + " / ID: " + increment)

    //     // Arrêt d'une fonction 'SetInterval' (idem pour 'SetTimeOut')
    //     if (increment >= 10) {
    //         console.log("Désactivation")
    //         window.clearInterval(executionID) // Passer l'id de retour de la fonction SetInterval(...)
    //     }
    // }

//#endregion

//#region SetInterval() => Appel d'une fonction à interval régulier (code asynchrone)

    // // Stocker le SetInterval() dans une variable pour avoir son ID d'execution
    // var executionID = window.setInterval(Demo, 1000)

//#endregion

//#region SetTimeOut() => Appel d'une fonction après un laps de temps (appellée une seule fois)

    // window.setTimeout(Demo, 5000)

//#endregion

//#region Commentaire de fonction

//     /** Parse un tableau[] d'objets{} 
//      * @param {Array} result Tableau d'objets.*/
//    function ParseJSONtoHTMLTable(result) {

//         let html = "<table>";
//         for (let i = 0; i < result.length; i++) {
//             html += "<tr>";        
//             for (const property in result[i]) {
//                 if (result[i].hasOwnProperty(property)) {
//                     const currentProperty = result[i][property];
//                     html += "<td>" + currentProperty + "</td>";
//                 }
//             }
//             html += "</tr>";
//         }
//         html += "</table>";
//         return html;

//     }

//#endregion

//#region RECUPERATION DES ELEMENTS ET ENREGISTREMENT AUX EVENTS

    let buttonSelect = document.getElementById('button_select');
    buttonSelect.addEventListener('click', function() { 
        AddAtRequest(currentRequestData, 'SELECT'); 
        ChangeRequestType(currentRequestData, 'SELECT'); 
    });

//#endregion

//#region  CLASSE PARAMETRES POUR REQUETES AJAX

class RequestData {
    constructor(urlRequest, writingRequest, typeRequest) {
        this.urlRequest = urlRequest;
        this.writingRequest = writingRequest;
        this.typeRequest = typeRequest;
    }
}

let currentRequestData = new RequestData('scripts/php/db_queries.php?request=', '', '');

//#endregion

//#region Exemple de CALLBACK

    // function salutation(name) {
    //     alert('Bonjour ' + name);
    // }
  
    // function processUserInput(callback) {
    //     var name = prompt('Entrez votre nom.');
    //     callback(name);
    // }
  
    // processUserInput(salutation);

//#endregion

//#region 

//#endregion