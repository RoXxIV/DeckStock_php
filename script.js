/**VARIABLES GLOBAL
 *******************/
// identifie la page article.html
let myArticle = document.querySelector('#myArticle')
// identifie la page d'acceuil
let indexMain = document.querySelector('#index')

/*------------------------------------------------------------*/

/**WishList
 *******************/
let Wishcount = 0; // compteur qui sera affiché dans le header
let heart = document.querySelector("#article .fa-heart")
// affichage compteur
function updateWish() {
  document.querySelector("#Wishcount").innerHTML = Wishcount;
}
//Change l'icon de la wish list au click + met a jour le compteur
function colorOnCLick() {
  if (heart.classList.contains("far")) {
    heart.classList.remove("far")
    heart.classList.add("fas")
    Wishcount++
  } else {
    heart.classList.remove("fas")
    heart.classList.add("far")
    Wishcount--
  }
  updateWish()
}

/*------------------------------------------------------------*/

/**Popup Info
 *******************/
//selecion de l'icon
let PopUpButton = document.querySelector(".fa-question-circle")
// selection du contenu
let PopUpInfo = document.querySelector("#popup-info")
function onClickPopUpInfo() {
  PopUpInfo.classList.toggle("hide")
  //ferme le pop up si le curseur sor de la zone de contenu
  PopUpInfo.addEventListener("mouseleave", function () {
    PopUpInfo.classList.add("hide")
  })
}

/*------------------------------------------------------------*/

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

  //affiche le compteur de la wishList
  updateWish()

  //system d'onglet section question/reponse
  if (indexMain) {
    //selection des lien
    let tabs = document.querySelectorAll(".tabs a")
    for (let i = 0; i < tabs.length; i++) {
      tabs[i].addEventListener("click", function (e) {
        showTab(this)
        // empeche le rafraichissement de la page et evite les scroll au clique sur les liens
        e.preventDefault();
      })
    }
  }

  //popup info
  PopUpButton.addEventListener("click", onClickPopUpInfo)
  if (myArticle) {
    heart.addEventListener("click", colorOnCLick)
  }
});


