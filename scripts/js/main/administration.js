import { RequestBase, RequestSelect, RequestInsert, PrepareRequest, SendRequest } from "../database_manager.js";
import { PostArticle, PostDataTable } from "../content_manager.js";

let inputTitle = document.getElementById('input_title');
let inputContent = document.getElementById('input_content');
let inputCode = document.getElementById('input_code');
let inputCategorie = document.getElementById('input_categorie');
let buttonSend = document.getElementById('button_send');

buttonSend.addEventListener('click', SendInsertion);

// ShowTables();
// ShowTable();

function ShowTables() {
    let requestData = new RequestBase('show');
    let chainage = PrepareRequest(requestData);
    SendRequest(requestData, chainage, PostDataTable);
}

function ShowTable() {
    let requestData = new RequestSelect('select', 'articles', "titre, article, code, categorie");
    let chainage = PrepareRequest(requestData);
    SendRequest(requestData, chainage, PostDataTable);
}

function SendInsertion() {
    let requestData = new RequestInsert('insert', 'articles', 'titre, article',inputTitle.value, inputContent.value);
    let chainage = PrepareRequest(requestData);
    SendRequest(requestData, chainage, PostArticle);
}








function SelectComposer(table, columns, where) {

    if (!table || !columns || columns.lenght == 0) {
        console.log("SelectComposer() => 'table' ou '[]columns' vide.");
        return;
    }

    let requestObj = {
        type: "select",
        table: table,
        columns: columns
    }

    if (where != undefined)
        requestObj = Object.assign(requestObj, { where: where });


    return requestObj;
}

let jsonToSend = SelectComposer("articles", ["titre", "article"]);
console.log("Envoi" + JSON.stringify(jsonToSend));
SenderRequest(JSON.stringify(jsonToSend));


let wheretest = {
    wh1: "sss",
    wh2: "AAA",
    wh3: "rrr"
}
let tablle = ["Salut", "Koala", "Maurice"]

const DaysEnum = Object.freeze({"monday":1, "tuesday":2, "wednesday":3});       // ENUM
let myenum = DaysEnum.monday;

function SenderRequest(objJSON) {


    var httpRequest = new XMLHttpRequest();
    httpRequest.open("POST", 'scripts/php/database_requester.php', true);
    httpRequest.setRequestHeader('Content-Type', 'application/json');
    // httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.send(objJSON);
    httpRequest.onreadystatechange = ProcessResponse;
    
    function ProcessResponse() {

        if (httpRequest.readyState == XMLHttpRequest.DONE && httpRequest.status == 200) {
            
            console.log(httpRequest.response);
        }
    }
}