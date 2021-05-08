export function RequestBase(requestType) {

        this.requestType = requestType;

        this.Chainage = function() {
            let chaine = 'type=' + this.requestType;
            return chaine;
        };
}

export function RequestSelect(requestType, targetTable, targetColumns) {

    RequestBase.call(this, requestType);

    this.targetTable = targetTable;
    this.targetColumns = targetColumns;

    this.Chainage = function() {
        let chaine = 'type=' + this.requestType;
        chaine += '&table=' + this.targetTable;
        chaine += '&columns=' + this.targetColumns;
        return chaine;
    };
}

export function RequestInsert(requestType, targetTable, targetColumns, title, content) {
    
    RequestSelect.call(this, requestType, targetTable, targetColumns);

    this.title = title;
    this.content = content;

    this.Chainage = function() {
        let chaine = 'type=' + this.requestType;
        chaine += '&table=' + this.targetTable;
        chaine += '&columns=' + this.targetColumns;
        chaine += '&title=' + this.title;
        chaine += '&content=' + this.content;
        return chaine;
    };
}

export function PrepareRequest(requestData) {

        // Sécurité
        if (!requestData.requestType) {
            console.log("PrepareRequest() => Aucun type de requête sélectionné.");
            return;
        }
    
        let chainage;
    
        switch (requestData.requestType) {
            case 'show':
                if (!ShowRequest(requestData))
                    return;
                break;
                
            case 'select':
                if (!SelectRequest(requestData))
                    return;
                break;
        
            case 'insert':
                if (!InsertRequest(requestData))
                    return;
                break;
        
            case 'delete':
                if (!DeleteRequest(requestData))
                    return;
                break;
        
            default:
                console.log("PrepareRequest() => Mauvais type de requête.");
                break;
        }
    
        function ShowRequest(requestData) {
    
            chainage = requestData.Chainage();
            return true;
        }
    
        function SelectRequest(requestData) {
    
            if (!requestData.targetTable || !requestData.targetColumns) {
                console.log("SelectRequest() => Aucune valeurs pour 'titre' et/ou 'content'.");
                return false;
            }
    
            chainage = requestData.Chainage();
            return true;
        }
    
        function InsertRequest(requestData) {
    
            if (!requestData.targetTable || !requestData.targetColumns) {
                console.log("InsertRequest() => Aucune valeurs pour 'table' et/ou 'columns'.");
                return false;
            }
            else if (!requestData.title || !requestData.content) {
                console.log("InsertRequest() => Aucune valeurs pour 'titre' et/ou 'content'.");
                return false;
            }
    
            chainage = requestData.Chainage();
            return true;
        }
    
        function DeleteRequest(requestData) {
            return false;
        }

        console.log(chainage);
        return chainage;
}

export function SendRequest(requestData, chainage, callback) {

    // Sécurité
    if (!requestData || !chainage || !callback) {
        console.log("SendRequest() => Paramètres d'entrée manquants.");
        return;
    }

    var httpRequest = new XMLHttpRequest();
    httpRequest.open("POST", 'scripts/php/database_requester.php', true);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.send(chainage);
    // httpRequest.response = 'json';
    httpRequest.onreadystatechange = ProcessResponse;
    
    function ProcessResponse() {

        if (httpRequest.readyState == XMLHttpRequest.DONE && httpRequest.status == 200) {
            if (requestData.requestType == 'show' || requestData.requestType == 'select')
                    callback(JSON.parse(httpRequest.response));     // Convert JSON to OBJECT
            else
                console.log("SendRequest() => Type de requête " + requestData.requestType + ", rien n'est à faire.");
        }
    }
}

export function DebugHttpRequest(httpRequest) {

    console.log(typeof httpRequest.response);
    console.log(httpRequest.response);
    console.log(httpRequest.responseText);

}