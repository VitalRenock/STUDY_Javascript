export function PostArticle(objectToPost) {

    let main = document.querySelector('main');                          // On récupere la balise main
    let newArticle = document.createElement('article');

    let index = 0;
    for (let property in objectToPost) {

        if (index == 0) {

            let titleArticle = document.createElement('h1');
            titleArticle.textContent = objectToPost[property];
            newArticle.appendChild(titleArticle);

        }
        else {
            switch (property) {
        
                case 'code':
                    let preContainer = document.createElement('pre');
                    newArticle.appendChild(preContainer);
                    let codeContainer = document.createElement('code');
                    // codeContainer.className = "html";
                    codeContainer.textContent = objectToPost[property];
                    preContainer.appendChild(codeContainer);
                    break;
            
                default:
                    let subTitle = document.createElement('h4');
                    subTitle.textContent = property;
                    let contentText = document.createElement('p');
                    contentText.textContent = objectToPost[property];
                    let contentArticle = document.createElement('section');
                    contentArticle.appendChild(subTitle);
                    contentArticle.appendChild(contentText);
                    newArticle.appendChild(contentArticle);
                    break;
                    
            }
        }

        index++;

    }

    // console.log(newArticle);
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