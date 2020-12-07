    // RECUPERATION DES ELEMENTS DE LA PAGE WEB (INTERFACE)
    let buttonSelect = document.getElementById('button_select');
    let buttonInsertInto = document.getElementById('button_insertinto');
    let buttonDelete = document.getElementById('button_delete');
    let buttonFrom = document.getElementById('button_from');
    let buttonAsterisk = document.getElementById('button_asterisk');
    
    let inputUser = document.getElementById('input_user');
    let buttonAdd = document.getElementById('button_add');
    
    let buttonReset = document.getElementById('button_reset');
    let buttonSend = document.getElementById('button_send');
    
    let displayTables = document.getElementById('display_tables');
    let displayRequest = document.getElementById('display_request');
    let displayResult = document.getElementById('display_result');
    let displayRequestData = document.getElementById('display_request_data');

    // PARAMETRES POUR REQUETES AJAX
    class RequestData {
        constructor(urlRequest, writingRequest, typeRequest) {
            this.urlRequest = urlRequest;
            this.writingRequest = writingRequest;
            this.typeRequest = typeRequest;
        }
    }
    let currentRequestData = new RequestData('dbqueries/select_articles.php?request=', '', '');

    // ENREGISTREMENT AUX EVENTS
    buttonSelect.addEventListener('click', function() { 
        AddAtRequest(currentRequestData, 'SELECT'); 
        ChangeRequestType(currentRequestData, 'SELECT'); 
    });
    buttonInsertInto.addEventListener('click', function() { 
        AddAtRequest(currentRequestData, 'INSERT INTO'); 
        ChangeRequestType(currentRequestData, 'INSERT INTO'); 
    });
    buttonDelete.addEventListener('click', function() { 
        AddAtRequest(currentRequestData, 'DELETE'); 
        ChangeRequestType(currentRequestData, 'DELETE'); 
    });
    buttonFrom.addEventListener('click', function() { 
        AddAtRequest(currentRequestData, 'FROM'); 
    });
    buttonAsterisk.addEventListener('click', function() { 
        AddAtRequest(currentRequestData, '*'); 
    });
    buttonAdd.addEventListener('click', function() { 
        AddAtRequest(currentRequestData, ' ' + inputUser.value + ' '); 
    });
    buttonReset.addEventListener('click', function() { 
        ResetRequest(currentRequestData); 
    });
    buttonSend.addEventListener('click', function() { 
        SendRequest(currentRequestData.urlRequest, currentRequestData.writingRequest, currentRequestData.typeRequest);
    });
    
    // RECUPERATION DES TABLES
    ShowAllTables(currentRequestData);
    UpdateDisplayRequestData(currentRequestData);

    // FONCTIONS
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

    function SendRequest(urlToRequest, requestToSend, typeToRequest) {
        var httpRequest = new XMLHttpRequest();
        httpRequest.onreadystatechange = function() {
            if (this.readyState == XMLHttpRequest.DONE && this.status == 200)
                ProcessResultRequest(this, typeToRequest);
        };
        // console.log("URL envoyée: " + urlToRequest + requestToSend + "&type=" + typeToRequest);
        httpRequest.open('GET', urlToRequest + requestToSend + "&type=" + typeToRequest, true);
        httpRequest.response = 'json';
        httpRequest.send();
    }

    function ProcessResultRequest(resultToProcess, typeOfProcess) {
        let result;
        switch (typeOfProcess) {
            case 'show':
                result = JSON.parse(resultToProcess.responseText);         
                console.log(result);
                displayTables.innerHTML = ParseJSONtoHTMLTable(result);
                break;
            case 'select':
                result = JSON.parse(resultToProcess.responseText);         
                displayResult.innerHTML = ParseJSONtoHTMLTable(result);
                break;
            case 'insert':
                console.log("Rien à faire avec INSERT INTO");
                break;
            case 'delete':
                console.log("Rien à faire avec DELETE");
                break;
            default:
                console.log('ProcessResultRequest() => switch')
                break;
        }

        // TO REMOVE
        ResetRequest(currentRequestData);
    }

    function ShowAllTables(requestData) {
        ChangeRequestType(requestData, 'SHOW');
        SendRequest(requestData.urlRequest, 'SHOW TABLES', requestData.typeRequest);
    }

    function UpdateDisplayRequestData(requestData) {
        displayRequestData.innerHTML = 
            '<h4>Request Data:</h4>'
            + 'Url:' + requestData.urlRequest + '<br>'
            + 'Type:' + requestData.typeRequest;
    }
    
    /** Parse un tableau[] d'objets{} 
     * @param {Array} result Tableau d'objets.
    */
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