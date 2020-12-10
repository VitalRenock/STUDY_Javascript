import { SendRequest } from "../database_manager.js";
import { PostArticle } from "../content_manager.js";

SendRequest("articles", "titre, article, code", PostArticle);