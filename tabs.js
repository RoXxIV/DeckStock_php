
/**system d'onglet section question/reponse
 ********************************************/
let showTab = function (a) {
    let li = a.parentNode;
    let div = a.parentNode.parentNode.parentNode
    let divContent = document.querySelector('.tabs-content')
    let fade = divContent.querySelector('.tab-content.active')
    let show = divContent.querySelector(a.getAttribute('href'))

    //Dans le cas ou l'utilisateur click deux fois sur le meme lien 
    if (li.classList.contains('active')) {
        return false
    }
    // #1 On retire la class active de l'element actif //
    div.querySelector('.tabs .active').classList.remove('active')

    // #2 On ajoute la classe active au lien actuel
    li.classList.add('active')

    // #3 On retire la classe active sur l'element de contenu actif
    divContent.querySelector('.tab-content.active').classList.remove('active')
    fadeOut(fade)

    // #4 On ajoute la classe active sur le contenu qui correspond au lien clické
    divContent.querySelector(a.getAttribute('href')).classList.add('active')
    fadeIn(show)


}

/**Le code s'execute une fois que tout le contenu de la page est chargé
 * ***************************************************************************/
document.addEventListener("DOMContentLoaded", function () {

    //system d'onglet section question/reponse

    //selection des lien
    let tabs = document.querySelectorAll(".tabs a")
    for (let i = 0; i < tabs.length; i++) {
        tabs[i].addEventListener("click", function (e) {
            showTab(this)
            // empeche le rafraichissement de la page et evite les scroll au clique sur les liens
            e.preventDefault();
        })
    }

});
