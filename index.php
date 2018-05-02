<?php
require_once 'include/functions.php';
reconnect_from_cookie();
if(isset($_SESSION['auth'])){
    header('Location: tableau_de_bord.php');
    exit();
}
if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])){
    require_once 'include/db.php';
    $req = $pdo->prepare('SELECT * FROM informations WHERE (username = ?)');
    $req->execute([$_POST['username']]);
    $user = $req->fetch();
    print_r($user);
    if(password_verify($_POST['password'], $user->password)){
        $_SESSION['auth'] = $user;
        $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté';
        if($_POST['remember']){
            $remember_token = str_random(250);
            $pdo->prepare('UPDATE informations SET remember_token = ? WHERE id = ?')->execute([$remember_token, $user->id]);
            setcookie('remember', $user->id . '==' . $remember_token . sha1($user->id . 'ratonlaveurs'), time() + 60 * 60 * 24 * 7);
        }
        header('Location: tableau_de_bord.php');
        exit();
    }else{
        $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
    }
}

?>

<?php 
$title="Connexion";
include("include/header.inc.php"); 

?>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="" method="POST">
        <h2 class="form-signin-heading">Connecte toi !</h2>
        <div class="login-wrap">
            <div class="user-login-info">
                <input type="text" class="form-control" name="username" placeholder="Pseudo" autofocus>
                <input type="password" class="form-control" name="password" placeholder="Mot de passe">
            </div>
            <label class="checkbox">
                <input type="checkbox" name="remember" value="remember"> Mémoriser
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Mot de passe oublié?</a>

                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit"> Connexion </button>

            <div class="registration">
                Pas encore de compte?
                <a class="" href="inscription.php">
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
