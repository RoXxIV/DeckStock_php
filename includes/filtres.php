<?php
$brandSql = "SELECT marque.nom AS marque
FROM marque";
$brands = $connection->query($brandSql);


$largeurSql = "SELECT largeur.taille AS largeur
FROM largeur";
$largeurs = $connection->query($largeurSql);




?>
<!--Filtres-->
<section id="filtres" class="container-fluid">
  <div id="blocBrand" class="row">
    <!--marque liste-->
    <div class="col-6 col-sm-4 col-md-3 test">
      <select class="form-select">
        <option selected>Marque</option>
        <?php
            foreach ($brands->fetchAll(PDO::FETCH_ASSOC) as $brand) {
                echo '<option value="'.$brand['marque'].'">'.$brand['marque'].'</option>';
            }
        ?>

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
        <?php
            foreach ($largeurs->fetchAll(PDO::FETCH_ASSOC) as $largeur) {
                echo '<option value="'.number_format($largeur['largeur'], 2, '.', ' ').'">'.number_format($largeur['largeur'], 2, '.', ' ').'"</option>';
            }
        ?>
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