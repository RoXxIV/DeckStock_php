<?php
/*
  Brand
*/
$brandSql = "SELECT marque.nom AS marque
FROM marque";
$brands = $connection->query($brandSql);

/*
  Collection
*/
if (isset($_POST['brand'])) {
    $collections = $connection->prepare("SELECT collection.nom AS collection
FROM collection
JOIN marque on marque.Id_marque = collection.Id_marque
WHERE marque.nom = :collection");
    $collections->bindParam(':collection', $_POST['brand'], PDO::PARAM_STR);
    $collections->execute();
}
/*
  Largeur
*/
$largeurSql = "SELECT largeur.taille AS largeur
FROM largeur";
$largeurs = $connection->query($largeurSql);
/*
  Concave
*/
$concaveSql = "SELECT concave.designation AS concave FROM concave";
$concaves = $connection->query($concaveSql);

/*
  Concave
*/
$shapeSql = "SELECT shape.designation AS shape FROM shape";
$shapes = $connection->query($shapeSql);


?>
<!--Filtres-->
<section id="filtres" class="container-fluid">
  <form action="" method="POST">
    <!--marque liste-->
    <div id="blocBrand" class="row">
      <div class="col-6 col-sm-4 col-md-3 test">
        <select class="form-select" name="brand" onchange="this.form.submit()">
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
      <select class="form-select" name="collection" onchange="this.form.submit()">
        <option selected>Collection</option>
        <?php
          if (isset($_POST['brand'])) {
              foreach ($collections->fetchAll(PDO::FETCH_ASSOC) as $collection) {
                  echo '<option value="'.$collection['collection'].'">'.$collection['collection'].'</option>';
              }
          }
        ?>
      </select>
    </div>
    <!--largeur liste-->
    <div id="blocLargeur" class="col-6 col-sm-4 col-md-3">
      <select class="form-select" name="largeur" onchange="this.form.submit()">
        <option selected >Largeur</option>
        <?php
            foreach ($largeurs->fetchAll(PDO::FETCH_ASSOC) as $largeur) {
                echo '<option value="'.number_format($largeur['largeur'], 2, '.', ' ').'">'.number_format($largeur['largeur'], 2, '.', ' ').'"</option>';
            }
        ?>
      </select>
    </div>
    <!--concave liste-->
    <div id="blocConcave" class="col-6 col-sm-4 col-md-3">
      <select class="form-select" name="concave" onchange="this.form.submit()">
        <option selected>Concave</option>
        <?php
            foreach ($concaves->fetchAll(PDO::FETCH_ASSOC) as $concave) {
                echo '<option value="'.$concave['concave'].'">'.$concave['concave'].'</option>';
            }
        ?>
      </select>
    </div>
    <!--concave liste-->
    <div id="blocShape" class="col-6 col-sm-4 col-md-3">
      <select class="form-select" name="shape" onchange="this.form.submit()">
        <option selected>Shape</option>
        <?php
            foreach ($shapes->fetchAll(PDO::FETCH_ASSOC) as $shape) {
                echo '<option value="'.$shape['shape'].'">'.$shape['shape'].'</option>';
            }
        ?>
      </select>
    </div>
    <!--prix-->
    <div id="blocPrix" class="col-6 col-sm-4 col-md-3">
      <select class="form-select">
        <option selected>Prix</option>
        <option value="prixAsc">par ordre croissant</option>
        <option value="prixDesc">par ordre decroissant</option>
      </select>
    </div>
    </div>
  </form>
</section>