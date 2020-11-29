<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apprentissage du Javascript</title>

    <script>
        // Déclarer une variable
            var demo = 'Bonjour Renock'

        // Déclarer un objet
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

        // Déclarer un tableau
            var eleves = ['Marc', 'Sandrine', 'Olivier', 'Sarah']

        // Déclarer un tableau d'objets
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

        // Afficher un message dans la console (du navigateur)
            console.log(demo)

        // Conditions IF, ELSE
            if (myObject.score1 < 20)
                console.log(myObject.name + " n'a pas assez de points.")
            else if (myObject.score1 == 20)
                console.log(myObject.name + " est limite en points.")
            else
                console.log(myObject.name + " a assez de points.")
        
        // Le SWITCH
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

        // Condition ternaire
            console.log(myObject.age >= 18 ? "Tu es majeur" : "Tu es mineur")

        // Boucle WHILE
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

        // Boucle FOR
            for (var j = 0; j < eleves.length; j++)
                console.log("L'élève " + j + " s'appelle " + eleves[j])

        // Les fonctions
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
        
        // Parsing INT et FLOAT
            console.log(parseInt("36", 10))             // string => int (en base 10)
            console.log(parseInt("011", 2))             // string => int (en base 2)
            console.log(parseFloat("3.14"))             // string => float
            console.log(parseInt('87Points83', 10))     // Filtrage automatique des chiffres (affiche le premier chiffre '87')

        // Fonctions mathématique
            var nombrePi = Math.PI
            console.log(nombrePi + " arrondis = " + Math.round(nombrePi))
            console.log("Un chiffre random = " + Math.random()) // entre 0 et 1

        // Méthodes et prototype embarquées dans les variables
            console.log(19.34.toString())                                               // Convertir un float en string
            console.log("'myObject.age' est un Int: " + Number.isInteger(myObject.age)) // Vérifie si la variable est un integer
            console.log("'eleves' est un tableau: " + Array.isArray(eleves))            // Vérifie si la variable est un tableau
            eleves.push("Zoé")                                                          // Ajout d'un élément au tableau 'eleves'
            console.log(eleves)

        // Mot-clé 'this'
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

        // Les prototypes
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

        // Constructeur
            var Vehicule = function(nom, type) {            // Création d'un objet avec constructeur
                this.nom = nom,
                this.type = type
            }
            var Airbus = new Vehicule("Airbus", "Avion")    // Création de 2 nouveaux objets avec le constructeur "Vehicule"
            var Honda = new Vehicule("Honda", "Voiture")
            var Vehicules = []
            Vehicules.push(Airbus, Honda)                   // Pour la demo, création et affichage d'un tableau
            console.log(Vehicules)

        // Gérer les erreurs:
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
    </script>
</head>
<body>
    
</body>
</html>