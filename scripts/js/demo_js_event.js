var allParag = document.querySelectorAll('p');
var helloWorld = 'Hello world!';

for (let i = 0; i < allParag.length; i++) {
    var p = allParag[i];
    var rougit = function() {
        // this.classList.toggle('red');
        this.innerHTML = 'Renock world';
    }
    p.addEventListener('click', rougit);
}

// for (let i = 0; i < allParag.length; i++) {
//     var p = allParag[i];
//     function Rougit() {
//         this.classList.toggle('red');
//     }
//     p.addEventListener('click', Rougit);
// }