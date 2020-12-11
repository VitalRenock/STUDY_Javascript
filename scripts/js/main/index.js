import { RequestData, SendRequest } from "../database_manager.js";
import { PostArticle } from "../content_manager.js";

let requestData = new RequestData('select', 'jeux_video', "nom, possesseur, console, prix, commentaires");
SendRequest(requestData, PostArticle);