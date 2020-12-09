

SendRequest();

// Ici j'envoie une requête à db_queries.php et j'attends le réponse...
// Quand j'obtient la réponse, je fais quelques chose...
function SendRequest() {
    
    var table = 'Bienvenue';
    var columns = 'Renock';
    if (!table || !columns)
        return;
    
    var chainage = 'table=' + table + '&pseudo=' + columns;

    var httpRequest = new XMLHttpRequest();
    httpRequest.open("POST", 'scripts/php/db_queries.php', true);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.send(chainage);
    // httpRequest.response = 'json';
    httpRequest.onreadystatechange = ProcessResponse;
    
    function ProcessResponse() {
        if (httpRequest.readyState == XMLHttpRequest.DONE && httpRequest.status == 200) {
            console.log(typeof httpRequest.response);
            console.log(httpRequest.response);
            // console.log(this.responseText);
            ConvertResponse(httpRequest.response);


        }
    }
}

function ConvertResponse(response) {

    document.getElementById('mon_article').innerHTML = ParseJSONtoHTMLTable(response);

}


// function SendRequest() {
    
//     var myParams1 = 'Bienvenue';
//     var myParams2 = 'Renock';
//     if (!myParams1 || !myParams2)
//         return;
    
//     var chainage = 'message=' + myParams1 + '&pseudo=' + myParams2;

//     var httpRequest = new XMLHttpRequest();
//     httpRequest.open("POST", 'scripts/php/db_queries.php', true);
//     httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//     httpRequest.send(chainage);
//     // httpRequest.response = 'json';
//     httpRequest.onreadystatechange = ProcessResponse;
    
//     function ProcessResponse() {
//         if (httpRequest.readyState == XMLHttpRequest.DONE && httpRequest.status == 200) {
//             console.log(typeof httpRequest.response);
//             console.log(httpRequest.response);
//             // console.log(this.responseText);
//         }
//     }
// }


// function SendRequest() {
//     var httpRequest = new XMLHttpRequest();

//     httpRequest.onreadystatechange = function() {
//         if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
//             console.log(typeof this.response);
//             console.log(this.response);
//             // console.log(this.responseText);
//         }
//     };

//     httpRequest.open('GET', 'scripts/php/db_queries.php', true);
//     // httpRequest.response = 'json';
//     httpRequest.send();
    
// }



function ParseJSONtoHTMLTable(result) {
    let html = "<table>";
    for (let i = 0; i < result.length; i++) {
        html += "<tr>";        
        for (const property in result[i]) {
            if (result[i].hasOwnProperty(property)) {
                const currentProperty = result[i][property];
                html += "<td>" + currentProperty + "</td>";
            }
        }
        html += "</tr>";
    }
    html += "</table>";
    return html;
}

function DisplayArticles() {
    // Je dois envoyer une requête à db_queries.php

    // Il me retourne toute sorte de résultat

    // Je les traite de plein de facons
}