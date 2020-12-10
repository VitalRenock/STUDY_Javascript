function SayHello() {
    console.log('Hello world!');
}
function GiveHello() {
    return 'Hello world!';
}

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