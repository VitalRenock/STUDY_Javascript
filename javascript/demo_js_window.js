// Fonction qui s'appelle elle-même
(function() {

    // Afficher une popup
        // window.alert("Bienvenue dans votre première App.")
    
    // Afficher une boite de dialogue
        // var pseudo = window.prompt("Votre pseudo")
        // console.log(pseudo)
    
    // Afficher une boite de confirmation (renvoie 'true' / 'false')
        // var confirmation = window.confirm("Êtes-vous sûr?")
        // console.log("Pseudo confirmé: " + confirmation)
    
    // Les Timers
        var increment = 0
        function Demo() {
            increment++
            var now = new Date()
            console.log("Activation: " + now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds() + " / ID: " + increment)

            // Arrêt d'une fonction 'SetInterval' (idem pour 'SetTimeOut')
            if (increment >= 10) {
                console.log("Désactivation")
                window.clearInterval(executionID) // Passer l'id de retour de la fonction SetInterval(...)
            }
        }
        
        // SetInterval() => Appel d'une fonction à interval régulier (code asynchrone)
        var executionID = window.setInterval(Demo, 1000) // Stocker le SetInterval() dans une variable pour avoir son ID d'execution

        // SetTimeOut() => Appel d'une fonction après un laps de temps (appellée une seule fois)
        // window.setTimeout(Demo, 5000)

})()