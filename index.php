<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/base.css" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://kit.fontawesome.com/fc338e43d0.js"></script>
  <title>DeckStock</title>
</head>

<body id="index">
  <header>
    <div class="container text-white">
      <nav class="navbar flex-column flex-sm-row justify-content-sm-between">
        <!--logo-->
        <a id="logo" class="navbar-brand text-center col-12 col-sm-3 text-sm-left" href="index.html">Deck<span>Stock</span></a>
        <!--liens-->
        <div id="bloc-icon" class="col-12 col-sm-5">
          <ul class="nav justify-content-center justify-content-md-end">
            <!--wishlist icone-->
            <li>
              <i id="wishList" class="fas fa-heart" role="button"><span id="Wishcount">0</span></i>
            </li>
            <!--Acces Profil-->
            <li>
              <a href="#"><i class="fas fa-user mx-5" role="button"></i></a>
            </li>
            <!--Info-->
            <li>
              <i class="far fa-question-circle" role="button"></i>
            </li>
          </ul>
          <!--Pop up info-->
          <div id="popup-info" class="p-5 text-center hide">
            <p>
              Il n'est jamais trop tard pour mettre la main sur les anciennes collection!<br>
              Sur Deckstock vos skateshops préféré laisse une chance au planches invendu
              n'ayant pas encore trouver preneur.<br> de plus, nous négocions pour vous les meilleurs prix
              avec nos boutiques partenaires.
            </p>
            <hr>
            <p>
              Vous possedez une boutique et souhaitez
              nous rejoindre ?
            </p>
            <button class="btn btn-light">Contacter nous</button>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <!--MAIN------------>
  <main class="container">

    <!--Banniere-->
    <div class="d-flex justify-content-center py-4">
      <img class="img-fluid" src="img/banniere(2).png" alt="">
    </div>

    <!--Filtres-->
    <section id="filtres" class="container-fluid">
      <div id="blocBrand" class="row">
        <!--marque liste-->
        <div class="col-6 col-sm-4 col-md-3 test">
          <select class="form-select">
            <option selected>Marque</option>
            <option value="id_marque">Almost
        </div>
        <option value="id_marque">Baker
      </div>
      <option value="id_marque">Blind</div>
      <option value="id_marque">Element</div>
      <option value="id_marque">Enjoy</div>
      <option value="id_marque">Flip</div>
      <option value="id_marque">Girl</div>
      <option value="id_marque">Jart</div>
      <option value="id_marque">Plan b</div>
      <option value="id_marque">Santa cruz</div>
      <option value="id_marque">Toy machine</div>
      <option value="id_marque">Zero</div>
        </select>
        </div>
        <!--collection liste-->
        <div id="blocCollection" class="col-6 col-sm-4 col-md-3">
          <select class="form-select">
            <option selected>Collection</option>
            <option value="id_collection">SCreaming Hand</option>
            <option value="id_collection">Classic Dot</option>
            <option value="id_collection">Roskop</option>
            <option value="id_collection">Steadfast</option>
          </select>
        </div>
        <!--largeur liste-->
        <div id="blocLargeur" class="col-6 col-sm-4 col-md-3">
          <select class="form-select">
            <option selected>Largeur</option>
            <option value="id_largeur">7.5"</option>
            <option value="id_largeur">7.6"</option>
            <option value="id_largeur">7.75</option>
            <option value="id_largeur">8"</option>
            <option value="id_largeur">8.125"</option>
            <option value="id_largeur">8.25"</option>
            <option value="id_largeur">8.5"</option>
            <option value="id_largeur">9"</option>
            <option value="id_largeur">9.5"</option>
            <option value="id_largeur">10"</option>
          </select>
        </div>
        <!--concave liste-->
        <div id="blocConcave" class="col-6 col-sm-4 col-md-3">
          <select class="form-select">
            <option selected>Concave</option>
            <option value="id_concave">Leger</option>
            <option value="id_concave">Moyen</option>
            <option value="id_concave">Forte</option>
          </select>
        </div>
        <!--concave liste-->
        <div id="blocShape" class="col-6 col-sm-4 col-md-3">
          <select class="form-select">
            <option selected>Shape</option>
            <option value="id_shape">Standard</option>
            <option value="id_shape">Shaped</option>
            <option value="id_shape">Full</option>
          </select>
        </div>
        <!--prix-->
        <div id="blocPrix" class="col-6 col-sm-4 col-md-3">
          <select class="form-select">
            <option selected>Prix</option>
            <option value="prix">par ordre croissant</option>
            <option value="prix">par ordre decroissant</option>
          </select>
        </div>
        </div>
    </section>

    <!--ANNONCES------------>
    <section id="annonces" class=" container mt-5 mx-auto">
      <h2 class="mb-5 ml-4">Annonces récentes</h2>
      <div class="row text-center">
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="mb-4">
            <div>
              <a href="article.html">
                <img class="img-fluid" src="img/planches/SantaCruz-ScreamingHand-white.jpg" alt="">
              </a>
            </div>
            <div>
              <p class="mb-1 mt-2">Screaming Hand <span>8.25"</span></p>
              <span>69.99 <sup>eur</sup></span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="mb-4">
            <div>
              <a href="#">
                <img class="img-fluid" src="img/planches/135417-0-Flip-TeamHKD825.jpg" alt="planche santa cruz">
              </a>
            </div>
            <div>
              <p class="mb-1 mt-2">Flip Team HKD <span>8.25" green</span></p>
              <span>64.99 <sup>eur</sup></span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="mb-4">
            <div>
              <a href="#">
                <img class="img-fluid" src="img/planches/TeamBrandLogo1.jpg" alt="planche santa cruz">
              </a>
            </div>
            <div>
              <p class="mb-1 mt-2">Team Brand Logo <span>8.25" red</span></p>
              <span>74.99 <sup>eur</sup></span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="mb-4">
            <div>
              <a href="#">
                <img class="img-fluid" src="img/planches/Spectrum.jpg" alt="planche santa cruz">
              </a>
            </div>
            <div>
              <p class="mb-1 mt-2">Spectrum <span>8" black</span></p>
              <span>59.99 <sup>eur</sup></span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="mb-4">
            <div>
              <a href="#">
                <img class="img-fluid" src="img/planches/124313-0-ToyMachine-BennettValentines85.jpg" alt="planche santa cruz">
              </a>
            </div>
            <div>
              <p class="mb-1 mt-2">Valentines <span>8.5" Bennett</span></p>
              <span>54.99 <sup>eur</sup></span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="mb-4">
            <div>
              <a href="#">
                <img class="img-fluid" src="img/planches/144131-0-PlanB-ShecklerDeco825.jpg" alt="planche santa cruz">
              </a>
            </div>
            <div>
              <p class="mb-1 mt-2">Deco <span>8.5" white</span></p>
              <span>64.99 <sup>eur</sup></span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="mb-4">
            <div>
              <a href="#">
                <img class="img-fluid" src="img/planches/139420-0-JartSkateboards-Classic825.jpg" alt="planche santa cruz">
              </a>
            </div>
            <div>
              <p class="mb-1 mt-2">Classic <span>8.25" blue</span></p>
              <span>49.99 <sup>eur</sup></span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="mb-4">
            <div>
              <a href="#">
                <img class="img-fluid" src="img/planches/144120-0-Flip-MultiOdyssey8.jpg" alt="planche santa cruz">
              </a>
            </div>
            <div>
              <p class="mb-1 mt-2">Odyssey <span>8.375" yellow</span></p>
              <span>59.99 <sup>eur</sup></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr class="my-5">
    <!--Section question/reponse-->
    <section class="container">
      <div id="questions" class="row flex-column align-items-center flex-md-row">
        <div class="col-12 col-md-5">
          <ul class="tabs">
            <li class="active"><a href="#pro">Qu'est ce qu'une planche de skateboard pro model ?</a></li>
            <li><a href="#taille">Choisir la taille de son skateboard</a></li>
            <li><a href="#concave">Qu'est ce que le Concave ?</a></li>
            <li><a href="#tailNose">Qu'est ce que le Nose et le Tail ?</a></li>
          </ul>
        </div>
        <div class="tabs-content col-12 col-md-7">
          <!--pro model-->
          <div class="tab-content active" id="pro">
            <p>Les boards pro model sont généralement des séries limitées avec des designs originaux et
              souvent à l'effigie de skateurs célèbres.
              Contrairement aux planches de skateboard "No Name" les pro model bénéficient de plusieurs avantages :</p>
            <ul class="ml-3">
              <li>- Design soigné</li>
              <li>- Leur solidité en fait un bon investissement sur le long terme</li>
              <li>- Un meilleur pop pour la street</li>
            </ul>
          </div>
          <!--Choisir la taille de son skateboard-->
          <div class="tab-content" id="taille">
            <p>
              L'un des éléments importants lors de l'achat d'une planche de skateboard c'est de choisir sa taille
              qui est exprimée en pouces. La largeur d'une board varie généralement entre 8.25" et 7.5".
              En ce qui concerne la longueur des planches elle varie en 29" et 33".
            </p>
            <ul class="ml-3">
              <li>- 8.25" Balade entre potes</li>
              <li>- 8.25" à 8" Skatepark & Bowl</li>
              <li>- 7.5" à 8" Réservé pour la Street</li>
            </ul>
          </div>
          <!--Concave-->
          <div class="tab-content" id="concave">
            <p>
              Sachez tout d'abord qu'il existe 3 degrés de concave qui sont fort, moyen et léger.
              Plus le concave de votre planche sera prononcé plus elle sera réactive et vous pourrez ainsi
              envoyer vos tricks plus rapidement. Au contraire plus le concave est léger et plus le skateboard sera
              facile à manier.
              Nous recommandons donc pour les débutants un concave moyen ou léger afin que vous puissiez plus
              facilement contrôler votre skateboard au départ.
            </p>
          </div>
          <!--le Nose et le Tail-->
          <div class="tab-content" id="tailNose">
            <p>Le Nose et le Tail sont deux termes à connaitre en skate. Le Nose (nez) étant la partie avant relevée
              du skateboard et le Tail (queue) vous l'aurez compris, la partie arrière elle aussi relevée.
              Pour reconnaitre le Nose et le Tail, il vous suffit de monter sur votre planche et de regarder
              le coté le plus relevé, c'est à dire le Nose et donc le devant de votre planche de skateboard.</p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <ul class="d-flex text-white">
      <li><span>2020 <span class="mx-1">&copy;</span> Deckstock EH</span></li>
      <li class="mx-5"><a href="#">Mention légales</a></li>
      <li><span role="button">Contact</span></li>
    </ul>
  </footer>
  <script src="base.js"></script>
  <script src="script.js"></script>
</body>

</html>