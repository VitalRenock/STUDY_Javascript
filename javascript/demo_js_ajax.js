let myParaf1 = document.getElementById('myParaf1');
let myParaf2= document.getElementById('myParaf2');
let myParafs = document.getElementsByClassName('myParafs');

let button_red = document.getElementById('button_red');
let button_blue = document.getElementById('button_blue');
let button_green = document.getElementById('button_green');
let selectColorText = document.getElementById('select_color');

let button_paraf1 = document.getElementById('button_paraf1');
let button_paraf2 = document.getElementById('button_paraf2');
let selectParafText = document.getElementById('select_paraf');

let button_apply = document.getElementById('button_apply');

let selected_paraf ;
let selected_color;

button_red.addEventListener('click', function() { ChangeSelectedColor('red'); });
button_green.addEventListener('click', function() { ChangeSelectedColor('green'); });
button_blue.addEventListener('click', function() { ChangeSelectedColor('blue'); });

button_paraf1.addEventListener('click', function() { ChangeSelectedParaf(myParaf1); });
button_paraf2.addEventListener('click', function() { ChangeSelectedParaf(myParaf2); });

button_apply.addEventListener('click', Apply);

ChangeSelectedParaf(myParaf1);
ChangeSelectedColor('red');

function ChangeSelectedParaf(newParaf) {
    selected_paraf = newParaf;
    if (selected_paraf === myParaf1)
        selectParafText.innerHTML = 'Paraf1';
    else if (selected_paraf === myParaf2)
        selectParafText.innerHTML = 'Paraf2';
}
function ChangeSelectedColor(newColor) {
    selected_color = newColor;
    selectColorText.innerHTML = newColor;
}
function Apply() {
    if (selected_paraf.classList.length > 0) {
        for (const element of selected_paraf.classList) {
            selected_paraf.classList.remove(element);
        }
    }
    selected_paraf.classList.add(selected_color);
}

// myButton.addEventListener('click', MyCustomFunction);

// function MyCustomFunction() {
//     myParaf.classList.toggle('red');
// }




// AJAX
    // Créer l'objet    
        // var httpRequest = new XMLHttpRequest();

    // httpRequest.onreadystatechange = function() {
    //     if (httpRequest.readyState === 4) {
    //         document.getElementById('myResponse').innerHTML = httpRequest.responseText;
    //     }
    // };


    // /** Appelle d'une page du serveur ou Préparer une requête
    //  * Il y a 3 paramètres à passer la métohe open()
    //  *      1) Le type de méthode pour l'appel de la page
    //  *      2) L'url de la page
    //  *      3) Est-ce qu'on désire faire un appel ASYNCHRONE de la page
    //  */
        // httpRequest.open('GET', 'javascript_ajax.php?=city=Laneffe', true);

    // Lancer une requête ?
        // httpRequest.send();



// EXEMPLE DE CLASSE
    // class Book {
    //     constructor(title, author, pages) {
    //         this.title = title;
    //         this.author = author;
    //         this.pages = pages;
    //     }
    // }
    // let myBook = new Book("L'Histoire de Tao", "Will Alexander", 250);
