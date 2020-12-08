<!DOCTYPE html>
<html lang="en">

    <head>

        <?php include("includes/head.php"); ?>
        
        <title>Exemple de formulaire</title>

    </head>

    <body>

        <?php include("scripts/php/connect_db.php"); ?>
        <?php include("scripts/php/custom_func.php"); ?>

        <?php include("includes/header.php"); ?>
        <?php include("includes/menu.php"); ?>
        
        <article>
            <form action="post" method="index.php">
                <p>
                    <label for="text_field">Champ de texte:</label><br>
                    <input type="text" name="text_field" id="text_field"><br>
                    <hr><br>
                    <label for="size_attribute">L'attribut "size":</label><br>
                    <input type="text" name="size_attribute" id="size_attribute" size="30"><br>
                    <hr><br>
                    <label for="maxlenght_attribute">L'attribut "maxlenght":</label><br>
                    <input type="text" name="maxlenght_attribute" id="maxlenght_attribute" maxlength="6"><br>
                    <hr><br>
                    <label for="value_attribute">L'attribut "value":</label><br>
                    <input type="text" name="value_attribute" id="value_attribute" value="Renock"><br>
                    <hr><br>
                    <label for="placeholder_attribute">L'attribut "placeholder":</label><br>
                    <input type="text" name="placeholder_attribute" id="placeholder_attribute" placeholder="Entrez votre pseudo"><br>
                    <hr><br>
                    <label for="password_field">Champ pour mot de passe:</label><br>
                    <input type="password" name="password_field" id="password_field"><br>
                    <hr><br>
                    <label for="text_area">Zone de texte</label><br>
                    <textarea name="text_area" id="text_area"></textarea><br>
                    <hr><br>
                    <label for="rows_attribute">L'attribut "rows" pour les zones de texte</label><br>
                    <textarea name="rows_attribute" id="rows_attribute" rows="10"></textarea><br>
                    <hr><br>
                    <label for="cols_attribute">L'attribut "cols" pour les zones de texte</label><br>
                    <textarea name="cols_attribute" id="cols_attribute" cols="30"></textarea><br>
                    <hr><br>
                    <label for="default_value_textarea">Valeur par défaut pour les zones de texte</label><br>
                    <textarea name="default_value_textarea" id="default_value_textarea" rows="10" cols="30">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde itaque quibusdam quod impedit nihil eum praesentium consequuntur, non sunt aut officia quidem ipsum nobis nisi iste excepturi natus ipsa repudiandae.</textarea><br>
                    <hr><br>
                    <label for="email_field">Champ pour un email:</label><br>
                    <input type="email" name="email_field" id="email_field"><br>
                    <hr><br>
                    <label for="url_field">Champ pour une url:</label><br>
                    <input type="url" name="url_field" id="url_field"><br>
                    <hr><br>
                    <label for="tel_field">Champ pour un numéro de téléphone:</label><br>
                    <input type="tel" name="tel_field" id="tel_field"><br>
                    <hr><br>
                    <label for="number_field">Champ pour un chiffre:</label><br>
                    <input type="number" name="number_field" id="number_field"><br>
                    <hr><br>
                    <label for="min_number_attribute">L'attribut "min" pour un chiffre:</label><br>
                    <input type="number" name="min_number_attribute" id="min_number_attribute" min="10"><br>
                    <hr><br>
                    <label for="max_number_attribute">L'attribut "max" pour un chiffre:</label><br>
                    <input type="number" name="max_number_attribute" id="max_number_attribute" max="10"><br>
                    <hr><br>
                    <label for="step_number_attribute">L'attribut "step" pour un chiffre:</label><br>
                    <input type="number" name="step_number_attribute" id="step_number_attribute" step="10"><br>
                    <hr><br>
                    <label for="range_field">Un curseur:</label><br>
                    <input type="range" name="range_field" id="range_field"><br>
                    <hr><br>
                    <label for="min_range_attribute">L'attribut "min" pour un curseur:</label><br>
                    <input type="range" name="min_range_attribute" id="min_range_attribute" min="10"><br>
                    <hr><br>
                    <label for="max_range_attribute">L'attribut "max" pour un curseur:</label><br>
                    <input type="range" name="max_range_attribute" id="max_range_attribute" max="10"><br>
                    <hr><br>
                    <label for="step_range_attribute">L'attribut "step" pour un curseur:</label><br>
                    <input type="range" name="step_range_attribute" id="step_range_attribute" step="10"><br>
                    <hr><br>
                    <label for="color_field">Un sélecteur de couleur:</label><br>
                    <input type="color" name="color_field" id="color_field"><br>
                    <hr><br>
                    <label for="date_field">Un sélecteur de date:</label><br>
                    <input type="date" name="date_field" id="date_field"><br>
                    <hr><br>
                    <label for="time_field">Un sélecteur d'heure:</label><br>
                    <input type="time" name="time_field" id="time_field"><br>
                    <hr><br>
                    <label for="week_field">Un sélecteur de semaine:</label><br>
                    <input type="week" name="week_field" id="week_field"><br>
                    <hr><br>
                    <label for="month_field">Un sélecteur de mois:</label><br>
                    <input type="month" name="month_field" id="month_field"><br>
                    <hr><br>
                    <label for="datetime_field">Un sélecteur de date et heure (avec décalage horaire):</label><br>
                    <input type="datetime" name="datetime_field" id="datetime_field"><br>
                    <hr><br>
                    <label for="datetime-local_field">Un sélecteur de date et heure (sans décalage horaire):</label><br>
                    <input type="datetime-local" name="datetime-local_field" id="datetime-local_field"><br>
                    <hr><br>
                    <label for="search_field">Une zone de recherche:</label><br>
                    <input type="search" name="search_field" id="search_field"><br>
                    <hr><br>
                    <label for="checkbox_field">Une case à cocher:</label><br>
                    <input type="checkbox" name="checkbox_field" id="checkbox_field"><br>
                    <hr><br>
                    <label for="checked_attribute">Une case déjà cochée:</label><br>
                    <input type="checkbox" name="checked_attribute" id="checked_attribute" checked><br>
                    <hr><br>
                    <p>Une zone de sélection unique:</p>
                    <label for="radio_field_A">Choix A:</label><br>
                    <input type="radio" name="radio_field" value="radio_field_A" id="radio_field_A"><br>
                    <label for="radio_field_B">Choix B:</label><br>
                    <input type="radio" name="radio_field" value="radio_field_B" id="radio_field_B"><br>
                    <label for="radio_field_C">Choix C:</label><br>
                    <input type="radio" name="radio_field" value="radio_field_C" id="radio_field_C"><br>
                    <label for="radio_checked">Choix pré-coché:</label><br>
                    <input type="radio" name="radio_field" value="radio_checked" id="radio_checked" checked><br>
                    <hr><br>
                    <label for="button_type">Un bouton:</label><br>
                    <input type="button" name="button_type" id="button_type" value="Clique ici"><br>
                    <hr><br>
                    <label for="file_type">Un sélecteur de fichier:</label><br>
                    <input type="file" name="file_type" id="file_type" accept=".doc, .jpg, .png"><br>
                    <hr><br>
                    <!-- Continuer avec les autres attributs du type "file" puis avec les autres types et attributs... -->
                </p>
            </form>
        </article>

        <script type="text/javascript" src='scripts/js/custom_func.js'></script>
        
        <?php include("includes/footer.php"); ?>

    </body>
</html>