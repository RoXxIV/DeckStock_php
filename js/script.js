/**VARIABLES GLOBAL
 *******************/
// identifie la page article.html
let myArticle = document.querySelector('#article')
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

/**Le code s'execute une fois que tout le contenu de la page est chargé
 * ***************************************************************************/
document.addEventListener("DOMContentLoaded", function () {

  //affiche le compteur de la wishList
  updateWish()

  //popup info
  PopUpButton.addEventListener("click", onClickPopUpInfo)
  if (myArticle) {
    heart.addEventListener("click", colorOnCLick)
  }
});


