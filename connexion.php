<?php 
$title="Connexion";
include("include/header.inc.php"); 

include("include/menu_haut.inc.php"); 
include("include/menu_gauche.inc.php"); 
?>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="index.html">
        <h2 class="form-signin-heading">Connecte toi!</h2>
        <div class="login-wrap">
            <div class="user-login-info">
                <input type="text" class="form-control" placeholder="Pseudo" autofocus>
                <input type="password" class="form-control" placeholder="Mot de passe">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Mémoriser
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Mot de passe oublié?</a>

                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit"> Enregistrement </button>

            <div class="registration">
                Pas encore de compte?
                <a class="" href="enregistrement.php">
                    Créer mon compte
                </a>
            </div>

        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Mot de passe oublié ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Etrez votre email avant de renouveler votre mot de passe</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Supprimer</button>
                          <button class="btn btn-success" type="button">Valider</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      </form>

    </div>



    <!--Core js-->
    <?php include('include/js.inc.php'); ?>


  </body>
</html>
