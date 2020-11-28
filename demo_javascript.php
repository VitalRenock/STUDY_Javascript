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
                console.log(this.name + " " + this.lastname) // 'this' pour faire réference aux variable de l'objet
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
        myObject.GiveYourName()
        
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


    </script>
</head>
<body>
    
</body>
</html>