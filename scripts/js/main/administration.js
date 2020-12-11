import { RequestData, SendRequest } from "../database_manager.js";
import { PostArticle } from "../content_manager.js";

let inputTitle = document.getElementById('input_title');
let inputContent = document.getElementById('input_content');
let inputCode = document.getElementById('input_code');
let inputCategorie = document.getElementById('input_categorie');
let buttonSend = document.getElementById('button_send');

buttonSend.addEventListener('click', SendInsertion);



function SendInsertion() {
    RequestData.prototype.titre = inputTitle.value;
    RequestData.prototype.content = inputContent.value;
    let requestData = new RequestData('insert', 'articles', "titre, article");
    SendRequest(requestData, PostArticle);
}