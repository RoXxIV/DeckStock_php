<?php
require_once('includes/Config.php');
$myConfig = new Config();

try {
    //$connection = new PDO('mysql:host=localhost;dbname=deckstock;', 'root', '');
    $connection = new PDO($myConfig->dsn, $myConfig->user, $myConfig->pass);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>
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
                <a id="logo" class="navbar-brand text-center col-12 col-sm-3 text-sm-left" href="index.php">Deck<span>Stock</span></a>
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