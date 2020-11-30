(function() {

    // Pour sélectionner un élément
    var body = document.body                                // Récupère l'élément body
    var idDemo = document.getElementById('demo')            // Sélectionne l'élément avec l'id demo
    var selecteurCssDemo = document.querySelector('.demo')  // Sélectionne le premier élément correspondant au sélecteur CSS

    // Pour sélectionner plusieurs éléments
    var classDemo = document.getElementsByClassName('demo') // Sélectionne les éléments avec la class démo
    var tagDemo = document.getElementsByTagName('p')        // Sélectionne les éléments avec le tag '<p>'
    var elements = document.querySelectorAll('.demo')       // Sélectionne les éléments correspondant au sélecteur CSS

    // À RÉVISER: Accéder aux divers éléments parent/enfants, ect
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

    // Smart functions
    function ChangeText(elements, newText) {
        for (var i = 0; i < elements.length; i++) {
            elements[i].innerHTML = newText
        }
    }
    
    function ToggleCSS(elements, CssClass) {
        for (var i = 0; i < elements.length; i++) {
            elements[i].classList.toggle(CssClass)
        }
    }
    
    function SwitchStyleCSS(firstCssClass, secondCssClass) {
        var random = Math.round(Math.random())
        if (random == 0) {
            try { classDemo[0].classList.remove(firstCssClass) }
            finally { classDemo[0].classList.add(secondCssClass) }
        }
        else {
            try { classDemo[0].classList.remove(secondCssClass) }
            finally { classDemo[0].classList.add(firstCssClass) }
        }
    }
    
    function SetRandomColor(elements) {        
        for (var i = 0; i < elements.length; ++i) {
            var element = elements[i]                           // objet de type Element
            element.style.color = GiveMeRandomColor()           // Ajoute du CSS dans la balise de l'élément
        }
    }
    
    function GiveMeRandomColor() {
        return "rgb(" + GiveMeRandomInt(0, 255) + ", " + GiveMeRandomInt(0, 255) + ", " + GiveMeRandomInt(0, 255) + ")"
    }
    
    function GiveMeRandomColorNB() {
        var randColor = GiveMeRandomInt(0, 255)
        return "rgb(" + randColor + ", " + randColor + ", " + randColor + ")"
    }
    
    function GiveMeRandomInt(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min +1)) + min;
    }
    
    function GiveMeTime() {
        var now = new Date()
        return now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds()
    }
    
    // For testing
    window.setInterval(SetRandomColor, 2000, classDemo)

})()