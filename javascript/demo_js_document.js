(function() {

    // Pour sélectionner un élément
    var body = document.body                                // Récupère l'élément body
    var idDemo = document.getElementById('demo')            // Sélectionne l'élément avec l'id demo
    var selecteurCssDemo = document.querySelector('.demo')  // Sélectionne le premier élément correspondant au sélecteur CSS

    // Pour sélectionner plusieurs éléments
    var classDemo = document.getElementsByClassName('demo') // Sélectionne les éléments avec la class démo
    var tagDemo = document.getElementsByTagName('p')        // Sélectionne les éléments avec le tag '<p>'
    var elements = document.querySelectorAll('.demo')       // Sélectionne les éléments correspondant au sélecteur CSS

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