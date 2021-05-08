//#region Public

export function PostDataTable(tableOfObjects) {

    let main = document.querySelector('main');                          // On récupere la balise main
    let newArticle = document.createElement('article');
    newArticle.appendChild(CreateDataTableBlock(tableOfObjects));
    main.appendChild(newArticle);
}

export function PostArticles(tableOfObjects) {

    for (let i = 0; i < tableOfObjects.length; i++)
        PostArticle(tableOfObjects[i]);
}

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
                    newArticle.appendChild(CreateHighlightBlock(property, objectToPost[property]));
                    break;
            
                default:
                    newArticle.appendChild(CreateSectionBlock(property, objectToPost[property]));
                    break;
            }
        }
        index++;
    }
    // console.log(newArticle);
    main.appendChild(newArticle);
}

//#endregion

//#region Private

function CreateDataTableBlock(tableOfObjects) {

    let newTableBlock = document.createElement('table');
    for (let row = 0; row < tableOfObjects.length; row++) {
        const currentRow = tableOfObjects[row];
        
        let newTrBlock = document.createElement('tr');
        for (const cell in currentRow) {
            if (Object.hasOwnProperty.call(currentRow, cell)) {
                const currentCell = currentRow[cell];

                let newTdBlock = document.createElement('td');
                newTdBlock.textContent = currentCell;
                newTrBlock.appendChild(newTdBlock);
            }
        }
        newTableBlock.appendChild(newTrBlock);
    }
    return newTableBlock;
}

function CreateSubTitleBlock(value) {

    let newSubTitleBlock = document.createElement('h4');
    newSubTitleBlock.textContent = value;
    return newSubTitleBlock;
}

function CreateParagraphBlock(value) {

    let newParagraphBlock = document.createElement('p');
    newParagraphBlock.textContent = value;
    return newParagraphBlock;
}

function CreateSectionBlock(property, value) {

    let newSectionBlock = document.createElement('section');
    newSectionBlock.appendChild(CreateSubTitleBlock(property));
    newSectionBlock.appendChild(CreateParagraphBlock(value));
    return newSectionBlock;
}

function CreatePreBlock() {
    let newPreContainer = document.createElement('pre');
    return newPreContainer;
}

function CreateCodeBlock(value) {
    let newCodeBlock = document.createElement('code');
    // newCodeBlock.className = "html";                 // Forcer Highlight.js à intepreter dans un langage en particulier.
    newCodeBlock.textContent = value;
    return newCodeBlock;
}

function CreateHighlightBlock(property, value) {

    let newHighlightBlock = document.createElement('section');
    newHighlightBlock.appendChild(CreateSubTitleBlock(property));
    let newPreBlock = CreatePreBlock();
    newPreBlock.appendChild(CreateCodeBlock(value));
    newHighlightBlock.appendChild(newPreBlock);
    return newHighlightBlock;
}

//#endregion