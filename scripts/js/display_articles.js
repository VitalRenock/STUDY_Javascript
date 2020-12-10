
// Ici j'envoie une requête à db_queries.php et j'attends le réponse...
// Quand j'obtient la réponse, je fais quelques chose...
function SendRequest(table, columns) {
    
    // Sécurité
    if (!table || !columns)
        return;
    
    var chainage = 'table=' + table + '&columns=' + columns;

    var httpRequest = new XMLHttpRequest();
    httpRequest.open("POST", 'scripts/php/db_queries.php', true);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.send(chainage);
    // httpRequest.response = 'json';
    httpRequest.onreadystatechange = ProcessResponse;
    
    function ProcessResponse() {

        if (httpRequest.readyState == XMLHttpRequest.DONE && httpRequest.status == 200) {
            
            let response = JSON.parse(httpRequest.response);    // Convert JSON to OBJECT
            for (let i = 0; i < response.length; i++)           // Pour chaque OBJECT de la response...
                PostArticle(response[i]);
        }

    }

}

function PostArticle(objectToPost) {

    let main = document.querySelector('main');                          // On récupere la balise main
    let newArticle = document.createElement('article');

    for (let property in objectToPost) {

        switch (property) {
            
            case 'titre':
                let titleArticle = document.createElement('h1');
                titleArticle.textContent = objectToPost[property];
                newArticle.appendChild(titleArticle);
                break;
        
            case 'code':
                let preContainer = document.createElement('pre');
                newArticle.appendChild(preContainer);
                let codeContainer = document.createElement('code');
                // codeContainer.className = "html";
                codeContainer.textContent = objectToPost[property];
                preContainer.appendChild(codeContainer);
                break;
        
            default:
                let contentArticle = document.createElement('p');
                contentArticle.textContent = objectToPost[property];
                newArticle.appendChild(contentArticle);
                break;
        }

    }
    console.log(newArticle);
    main.appendChild(newArticle);

}

function ConvertSTRINGtoHTML(htmlString) {
    var convertedString1 = htmlString.replace(/</g, "&lt;");
    var convertedString2 = convertedString1.replace(/>/g, "&gt;");
    return convertedString2;
}

function DebugHttpRequest(httpRequest) {

    console.log(typeof httpRequest.response);
    console.log(httpRequest.response);
    console.log(httpRequest.responseText);

}