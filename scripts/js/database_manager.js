function SendRequest(table, columns) {
    // Ici j'envoie une requête à db_queries.php et j'attends le réponse...
    // Quand j'obtient la réponse, je fais quelques chose...

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

function DebugHttpRequest(httpRequest) {

    console.log(typeof httpRequest.response);
    console.log(httpRequest.response);
    console.log(httpRequest.responseText);

}

//#region DEPECRATED!!!

    function AddAtRequest(requestData ,partOfRequest) {
        requestData.writingRequest += " " + partOfRequest + " ";
        displayRequest.innerHTML = requestData.writingRequest;
    }
    
    function ResetRequest(requestData) {
        requestData.writingRequest = '';
        requestData.typeRequest = '';
        displayRequest.innerHTML = requestData.writingRequest;
        UpdateDisplayRequestData(requestData);
    }
    
    function ChangeRequestType(requestData, typeSelected) {
        switch (typeSelected) {
            case 'SHOW':
                requestData.typeRequest = "show";
                break;
                case 'SELECT':
                    requestData.typeRequest = "select";
                    break;
            case 'INSERT INTO':
                requestData.typeRequest = "insert";
                break;
            case 'DELETE':
                requestData.typeRequest = "delete";
                break;
            default:
                console.log('ChangeRequestType() => switch')
                break;
        }
        UpdateDisplayRequestData(requestData);
    }

    // function SendRequest(urlToRequest, requestToSend, typeToRequest) {
    //     var httpRequest = new XMLHttpRequest();
    //     httpRequest.onreadystatechange = function() {
    //         if (this.readyState == XMLHttpRequest.DONE && this.status == 200)
    //             ProcessResultRequest(this, typeToRequest);
    //     };
    //     // console.log("URL envoyée: " + urlToRequest + requestToSend + "&type=" + typeToRequest);
    //     httpRequest.open('GET', urlToRequest + requestToSend + "&type=" + typeToRequest, true);
    //     httpRequest.response = 'json';
    //     httpRequest.send();
    // }

    function ShowAllTables(requestData) {
        ChangeRequestType(requestData, 'SHOW');
        SendRequest(requestData.urlRequest, 'SHOW TABLES', requestData.typeRequest);
    }

//#endregion