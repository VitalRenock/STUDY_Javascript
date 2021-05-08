import { RequestBase, RequestSelect, PrepareRequest, SendRequest } from "../database_manager.js";
import { PostArticles } from "../content_manager.js";

let requestData = new RequestSelect('select', 'jeux_video', "nom, possesseur, console, prix, commentaires");
let chainage = PrepareRequest(requestData);
SendRequest(requestData,chainage, PostArticles);