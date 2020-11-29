(function() {

    // Récupérer un élément de la page html par son ID
    var id_demo = document.getElementById("demo")
    console.log(id_demo)

    // Récuperer DES éléments de la page par leur CLASS
    var class_paragraphe = document.getElementsByClassName("paragraphe")
    console.log(class_paragraphe)

    // Récuperer un élément avec QuerySelector
    var class_paragraphe2 = document.querySelector(".paragraphe2")

    // Ajout d'une classe CSS à un élément HTML
    class_paragraphe2.classList.add("testRed")

    // Fun...
    // ChangeColor = function() {
    //     var random = Math.round(Math.random())
    //     var now = new Date()
    //     console.log("ChangeColor() = " + random + " / Time = " + now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds())
    //     if (random == 0) {
    //         try {
    //             class_paragraphe2.classList.remove("testRed")
    //         }
    //         finally {
    //             class_paragraphe2.classList.add("testBlue")
    //         }
    //     }
    //     else {
    //         try {
    //             class_paragraphe2.classList.remove("testBlue")
    //         }
    //         finally {
    //             class_paragraphe2.classList.add("testRed")
    //         }
    //     }
    // }
    // window.setInterval(ChangeColor, 3000)

    RandomColor = function() {
        var random = Math.round(Math.random() * 255)
        var now = new Date()
        console.log("RandomColor() = " + random + " / Time = " + now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds())
    }
    window.setInterval(RandomColor, 300)

})()