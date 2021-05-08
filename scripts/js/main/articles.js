import { RequestBase, RequestSelect, PrepareRequest, SendRequest } from "../database_manager.js";
import { PostArticles } from "../content_manager.js";

let requestData = new RequestSelect('select', 'articles', "titre, article, code, categorie");
let chainage = PrepareRequest(requestData);
SendRequest(requestData, chainage, PostArticles);