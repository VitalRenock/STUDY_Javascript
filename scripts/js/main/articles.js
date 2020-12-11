import { RequestData, SendRequest } from "../database_manager.js";
import { PostArticle } from "../content_manager.js";

let requestData = new RequestData('select', 'articles', "titre, article, code, categorie");
SendRequest(requestData, PostArticle);