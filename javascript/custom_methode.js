function SayHello() {
    console.log('Hello world!');
}
function GiveHello() {
    return 'Hello world!';
}

function ReplaceInnerHTMLbyID(idBalise, newString) {
    document.getElementById(idBalise).innerHTML = newString;
}

function ConvertSTRINGtoHTML(htmlString) {
    var convertedString1 = htmlString.replace(/</g, "&lt;");
    var convertedString2 = convertedString1.replace(/>/g, "&gt;");
    return convertedString2;
}

function ChangeBackgroundColor(newColor) {
    document.body.style.backgroundColor = newColor;
}