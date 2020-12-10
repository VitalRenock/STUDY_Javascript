export function PostArticle(objectToPost) {

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

//#region DEPRECATED!!!

    function ProcessResultRequest(resultToProcess, typeOfProcess) {
        let result;
        switch (typeOfProcess) {
            case 'show':
                result = JSON.parse(resultToProcess.responseText);         
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

    function UpdateDisplayRequestData(requestData) {
        displayRequestData.innerHTML = 
            '<h4>Request Data:</h4>'
            + 'Url:' + requestData.urlRequest + '<br>'
            + 'Type:' + requestData.typeRequest;
    }

//#endregion