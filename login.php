<?php

include 'includes/header.php';
?>
<!--Banniere-->
<div class="d-flex justify-content-center py-4">
  <img class="img-fluid" src="img/loginBan.jpg" alt="">
</div>
<div class="row my-5">
<form id="loginForm" class="col-10 col-md-6 mx-auto">
  <div class="form-group d-flex">
    <label for="exampleInputEmail1"><i class="fas fa-user mx-5"></i></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Uma.john@gmail.com">
  </div>
  <div class="form-group d-flex">
    <label for="exampleInputPassword1"><i class="fas fa-lock mx-5"></i></label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
  </div>
  <button type="submit" class="btn btn-primary"> Se connecter</button>
</form>
</div>


<?php

include 'includes/footer.php';
