    // RECUPERATION DES ELEMENTS DE LA PAGE WEB (INTERFACE)
    let button_red = document.getElementById('button_red');

    let response;
    let urlRequest = 'dbqueries/select_articles.php';
    let paramsRequest = 'id=2';

    // ASSIGNATION DES ELEMENTS AUX FONCTIONS
    button_red.addEventListener('click', function() { ChangeSelectedColor('red'); });

    // FONCTIONS
    function MyFunc() {

    }

    // Appel de la page de traitement de la requête (AJAX)
    var httpRequest = new XMLHttpRequest();

    httpRequest.onreadystatechange = function() {
        if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
            response = JSON.parse(this.responseText);

            var mySelection = response[0].nom;
            console.log(mySelection);            
        }
    };

    // httpRequest.open('GET', urlRequest, true);
    httpRequest.open('POST', urlRequest, true);
    httpRequest.response = 'json';
    httpRequest.send(paramsRequest);