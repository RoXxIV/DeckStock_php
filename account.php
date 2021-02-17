<?php
  include 'includes/header.php';
?>

<!--Banniere-->
<div class="d-flex justify-content-center my-4">
  <img class="img-fluid" src="img/account.jpg" alt="">
</div>

<a href="index.php" class="cta">
    <span><i class="fas fa-arrow-left"></i> Retour a l'accueil</span>
  </a>

<section id="info-perso">
    <form action="" class="row justify-content-center mt-5 grey">
        <div class="col-12 col-md-4">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="surname">Prenom</label>
                <input type="text" id="surname" class="form-control">
            </div>
            <div class="form-group">
                <label for="mail">Adresse mail</label>
                <input type="email" id="mail" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">N° Tel</label>
                <input type="text" id="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="siret">N° SIRET</label>
                <input type="text" id="siret" class="form-control">
            </div>
        </div>       
        <div class="col-12 col-md-4">
            <div>
                <img class="" src="img/user.jpg" alt="photo de profil">
            </div>
            <div>
                <button type="submit" class="btn rounded mt-5 ml-5">Changer de photo</button>
            </div>
            <div>
                <button type="submit" class="btn rounded mt-5 ml-5">Enregistrer</button>
            </div>
        </div>
    </form>
    <div class="row justify-content-center my-5">
        <a href="#" id="profil-link">Mon profil</a>
    </div>
    <form action=""class="row justify-content-center grey">
        <div class="col-12 col-md-4">
            <div class="form-group">
                <label for="passChange">Changer le mot de passe</label>
                <input type="password" id="passchange" class="form-control">
            </div>
            <div class="form-group">
                <label for="comfirm">Comfirmer</label>
                <input type="text" id="comfirm" class="form-control">
            </div>
            <div>
                <button type="submit" class="btn mt-5 ml-5">Enregistrer</button>
            </div>  
        </div>
    </form>
</section>




<?php
  include 'includes/footer.php';
?>