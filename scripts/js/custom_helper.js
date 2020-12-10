function ConvertSTRINGtoHTML(htmlString) {
    var convertedString1 = htmlString.replace(/</g, "&lt;");
    var convertedString2 = convertedString1.replace(/>/g, "&gt;");
    return convertedString2;
}

function ChangeBackgroundColor(newColor) {
    document.body.style.backgroundColor = newColor;
}

function Poubelle() {
    var testStr = 
    "<!DOCTYPE html>\r\
    <html lang=\"en\">\r\
    <head>\r\
        <meta charset=\"UTF-8\">\r\
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\
        <title>Document</title>\r\
    </head>\r\
    <body>\r\
        \r\
    </body>\r\
    </html>";
    
    ReplaceInnerHTMLbyID('monArticle', ConvertSTRINGtoHTML(testStr));
}

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
    var random = Math.round(Math.random());
    var classDemo = document.getElementsByClassName('demo');
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