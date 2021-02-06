<!--HEADER-->
<?php
  include 'includes/header.php';
/*
  recupere les 8 dernier skate mis en vente
*/
  $sql = "SELECT * FROM `annonceindex`";
  $results = $connection->query($sql);

?>

<!--Banniere-->
<div class="d-flex justify-content-center py-4">
  <img class="img-fluid" src="img/banniere(2).png" alt="">
</div>

<!--Filtres-->
<?php
  include 'includes/filtres.php';
?>

<!--ANNONCES------------>
<section id="annonces" class=" container mt-5 mx-auto">

  <h2 class="mb-5 ml-4">Annonces récentes</h2>

  <div class="row text-center">
    <?php
      foreach ($results->fetchAll(PDO::FETCH_ASSOC) as $result) {
          echo' 
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="mb-4">
              <div>
                <a href="article.php?id='.$result['Id_annonce'].'&id_marque='.$result['Id_marque'].'">
                  <img class="img-fluid" src="'.$result['picture'].'" alt="skate'.$result['marque'].'">
                </a>
              </div>
              <div>
                <p class="mb-1 mt-2">'.$result['marque'].'</p>
                <span>'.$result['price'].' <sup>eur</sup></span>
              </div>
            </div>
          </div>';
      }
    ?>
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

<!--FOOTER-->
<?php
  include 'includes/footer.php';
?>