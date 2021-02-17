<!--HEADER-->
<?php
  include 'includes/header.php';
/*
  recupere l'id de de l'annonce de l'article selectionné sur index.php
  via l'url
*/
  if (isset($_GET['id'])) {
      $annonceId = $_GET['id'];
  } else {
      header('Location: index.php');
  }
/*
  recupere l'id de de la marque de l'article selectionné sur index.php
  via l'url
*/
  if (isset($_GET['id_marque'])) {
      $id_marque = $_GET['id_marque'];
  } else {
      $id_marque = 1;
  }

/*
  recuperation des info lier a l'annonce
*/
  $results = $connection->prepare(
      "SELECT annonce_skate.Id_annonce,annonce_skate.datePublication,annonce_skate.longueur,
            annonce_skate.description,annonce_skate.cheminPhoto AS picture,
            annonce_skate.prix AS price,shape.designation AS shape,
            concave.designation AS concave,largeur.taille,collection.nom AS collection,
            marque.nom AS marque
      FROM annonce_skate
      JOIN shape on shape.Id_shape = annonce_skate.Id_shape
      JOIN concave on annonce_skate.Id_concave = concave.Id_concave
      JOIN largeur on largeur.Id_largeur = annonce_skate.Id_largeur
      JOIN collection on collection.Id_collection = annonce_skate.Id_collection
      JOIN marque on marque.Id_marque = collection.Id_marque
      WHERE annonce_skate.Id_annonce = :annonceId"
  );
  $results->bindParam(':annonceId', $annonceId, PDO::PARAM_INT);
  $results->execute();

/*
  recupetation des produits similaire
*/
  $resultsSimilar = $connection->prepare(
      "SELECT annonce_skate.Id_annonce, annonce_skate.cheminPhoto AS picture,
            marque.nom AS marque,marque.Id_marque
      FROM annonce_skate
      JOIN collection ON collection.Id_collection = annonce_skate.Id_collection
      JOIN marque ON marque.Id_marque = collection.Id_marque
      WHERE marque.Id_marque = :Id_marque
      LIMIT 4"
  );
  $resultsSimilar->bindParam(':Id_marque', $id_marque, PDO::PARAM_INT);
  $resultsSimilar->execute();
?>

<!--banniere-->
<div class="d-flex justify-content-center py-4">
  <img class="img-fluid" src="img/banniere_article.jpg" alt="">
</div>

  <a href="index.php" class="cta">
    <span><i class="fas fa-arrow-left"></i> Retour a l'accueil</span>
  </a>
  
<!--Article Detaillé------------>
<?php
  foreach ($results->fetchAll(PDO::FETCH_ASSOC) as $result) {
      echo '
        <section id="article" class="d-flex flex-column justify-content-center mt-5 flex-md-row align-items-md-end">
        <!--Photo-->
        <div class="mb-5 col-6 mx-auto col-md-4">
          <img src="'.$result['picture'].'" alt="">
          <p class="mt-3">Grip jessup inclus*</p>
        </div>
        <!--Description-->
        <div id="description" class="col-md-6">
          <div class="d-flex justify-content-center">
            <h2>'.$result['marque'].' - '.$result['collection'].'</h2>
            <i class="far fa-heart text-5xl ml-5" role="button"></i>
          </div>
          <div>
            <ul class="mt-3">
              <li>
                <p>'.$result['description'].'</p>
              </li>
              <li>
                <svg width="350" xmlns="http://www.w3.org/2000/svg" viewBox="-15 0 1150 505">
                  <!--contour planche-->
                  <path d="M883.1 126.7c63.1 0 151.1 27.2 151.1 113.3s-88 115.2-151.1 115.2H327c-63.1 0-139.6-35.4-139.6-115.2S263.9 126.7 327 126.7h556.1m0-8H327c-35.9 0-71.6 10.3-98 28.2-32.5 22.1-49.6 54.3-49.6 93.2 0 38.9 17.1 71.4 49.6 94 26.6 18.5 62.3 29.1 98 29.1h556.2c37.8 0 75.5-9.6 103.3-26.4 36.5-22 55.8-55.4 55.8-96.7 0-41.2-19.3-74.4-55.8-95.9-27.6-16.2-65.3-25.5-103.4-25.5z"></path>
                  <!--visserie-->
                  <path d="M370.7 223.5c-2.1 0-3.8-1.7-3.8-3.8 0-2.1 1.7-3.8 3.8-3.8 2.1 0 3.8 1.7 3.8 3.8-.1 2.1-1.8 3.8-3.8 3.8zm0 43.8c-2.1 0-3.8-1.7-3.8-3.8 0-2.1 1.7-3.8 3.8-3.8 2.1 0 3.8 1.7 3.8 3.8-.1 2.1-1.8 3.8-3.8 3.8zm55.9 0c-2.1 0-3.8-1.7-3.8-3.8 0-2.1 1.7-3.8 3.8-3.8 2.1 0 3.8 1.7 3.8 3.8-.1 2.1-1.8 3.8-3.8 3.8zm0-43.8c-2.1 0-3.8-1.7-3.8-3.8 0-2.1 1.7-3.8 3.8-3.8 2.1 0 3.8 1.7 3.8 3.8-.1 2.1-1.8 3.8-3.8 3.8zm379.1 0c-2.1 0-3.8-1.7-3.8-3.8 0-2.1 1.7-3.8 3.8-3.8 2.1 0 3.8 1.7 3.8 3.8 0 2.1-1.7 3.8-3.8 3.8zm0 43.8c-2.1 0-3.8-1.7-3.8-3.8 0-2.1 1.7-3.8 3.8-3.8 2.1 0 3.8 1.7 3.8 3.8 0 2.1-1.7 3.8-3.8 3.8zm56 0c-2.1 0-3.8-1.7-3.8-3.8 0-2.1 1.7-3.8 3.8-3.8 2.1 0 3.8 1.7 3.8 3.8-.1 2.1-1.8 3.8-3.8 3.8zm0-43.8c-2.1 0-3.8-1.7-3.8-3.8 0-2.1 1.7-3.8 3.8-3.8 2.1 0 3.8 1.7 3.8 3.8-.1 2.1-1.8 3.8-3.8 3.8z"></path>
                  <!--Legend (emplacement : largeur , longueur)-->
                  <path fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="3" d="M187.4 89.7v-28h857.5v28M162.6 355.2h-28V126.7h28m208.1 0v28H426.6v-28"></path>
                  <!--Longueur-->
                  <text x="28.69">
                    <tspan x="535" y="109">
                      <tspan>Longueur</tspan>
                    </tspan>
                  </text>
                  <text x="28.69">
                    <tspan x="575" y="45">
                      <tspan>'.number_format($result['longueur'], 2, '.', ' ').'</tspan>
                    </tspan>
                  </text>
                  <!--Largeur-->
                  <text x="28.69">
                    <tspan x="-15" y="300">
                      <tspan>Largeur</tspan>
                    </tspan>
                  </text>
                  <text x="28.69">
                    <tspan x="25" y="240">
                      <tspan>'.number_format($result['taille'], 1, '.', ' ').'"</tspan>
                    </tspan>
                  </text>
                </svg>
              </li>
              <li>
                <p>Concave : <span>'.$result['concave'].'</span></p>
              </li>
              <li>
                <p>Shape : <span>'.$result['shape'].'</span></p>
              </li>
            </ul>
            <hr class="my-3">
            <ul>
              <li>
                <p>poster le : <span>'.$result['datePublication'].'</span></p>
              </li>
              <li>
                <p>No. de produit : <span>'.$result['Id_annonce'].'</span></p>
              </li>
              <li>
                <p id="prix">'.$result['price'].' <sup>EUR</sup></p>
              </li>
            </ul>
            <button class="btn rounded">Je Reserve</button>
          </div>
      </section>';
  }
?>

<hr class="my-5">

<!--Ceci pourrait vous intéresser-->
<section id="moreArticle">
  <h2 class="mb-5">Ceci pourrait vous intéresser</h2>
  <div class="row justify-content-center">
  <?php
    foreach ($resultsSimilar->fetchAll(PDO::FETCH_ASSOC) as $photo) {
        echo'<div class="col-6 col-md-3">
      <a href="article.php?id='.$photo['Id_annonce'].'&id_marque='.$photo['Id_marque'].'">
        <img class="img-fluid" src="'.$photo['picture'].'" alt="skate '.$photo['marque'].'">
      </div>
      </a>';
    }
  ?>
  </div>
</section>

<!--FOOTER-->
<?php
  include 'includes/footer.php';
?>