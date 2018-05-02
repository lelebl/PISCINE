<?php
require_once 'include/functions.php';
session_start();
if(!empty($_POST)){

    $errors = array();
    require_once 'include/db.php';

    if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])){
        $errors['username'] = "Votre pseudo n'est pas valide (alphanumérique)";
    } else {
        $req = $pdo->prepare('SELECT id FROM informations WHERE username = ?');
        $req->execute([$_POST['username']]);
        $user = $req->fetch();
        if($user){
            $errors['username'] = 'Ce pseudo est déjà pris';
        }
    }

    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Votre email n'est pas valide";
    } else {
        $req = $pdo->prepare('SELECT id FROM informations WHERE email = ?');
        $req->execute([$_POST['email']]);
        $user = $req->fetch();
        if($user){
            $errors['email'] = 'Cet email est déjà utilisé pour un autre compte';
        }
    }

    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
        $errors['password'] = "Vous devez rentrer un mot de passe valide";
    }
    if(empty($_POST['nom'])){
        $errors['nom'] = "Vous devez rentrer un nom valide";
    }
    if(empty($_POST['prenom'])){
        $errors['prenom'] = "Vous devez rentrer un prénom valide";
    }
    if(empty($_POST['date']) ){
        $errors['date'] = "Vous devez rentrer une date de naissance valide";
    }
    if(empty($_POST['adresse'])){
        $errors['adresse'] = "Vous devez rentrer une adresse valide";
    }
    if(empty($_POST['ville'])){
        $errors['ville'] = "Vous devez rentrer une ville valide";
    }
    if(empty($_POST['cp']) ){
        $errors['cp'] = "Vous devez rentrer un code postal valide";
    }
    if(empty($_POST['pays'])){
        $errors['pays'] = "Vous devez rentrer un pays valide";
    }
    if(empty($_POST['sexe']) ){
        $errors['sexe'] = "Vous devez rentrer un sexe valide";
    }

if(empty($errors)){

    $req = $pdo->prepare("INSERT INTO informations SET username = ?, password = ?, email = ?, confirmation_token = ?, nom = ?, prenom = ?, date_naissance = ?, adresse = ?, ville = ?, cp = ?, pays = ?, sexe = ?");
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $token = str_random(60);
    $sexe;
    if($_POST['sexe']=='1'){
        $sexe='F';
    }
    else{
        $sexe='H';
    }
    $req->execute([$_POST['username'], $password, $_POST['email'], $token, $_POST['nom'], $_POST['prenom'], $_POST['date_naissance'], $_POST['adresse'], $_POST['ville'], $_POST['cp'], $_POST['pays'], $sexe]);
    $user_id = $pdo->lastInsertId();
    mail($_POST['email'], 'Confirmation de votre compte', "Afin de valider votre compte merci de cliquer sur ce lien\n\nhttp://local.dev/Lab/Comptes/confirm.php?id=$user_id&token=$token");
    $_SESSION['flash']['success'] = 'Un email de confirmation vous a été envoyé pour valider votre compte';
    header('Location: index.php');
    exit();
}


}
?>

<?php 
$title="Inscription";
include("include/header.inc.php"); 
?>

<body class="login-body">

    <div class="container">

      <form class="form-signin" action="">
        <h2 class="form-signin-heading">Créez votre compte</h2>
        <div class="login-wrap">
            <?php if(!empty($errors)): ?>
            <div >
                <p>Vous n'avez pas rempli le formulaire correctement</p>
                <ul>
                    <?php foreach($errors as $error): ?>
                       <li><?= $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>

            <p>Entrez vos informations de connexion</p>
            <input type="text" class="form-control" name="pseudo" placeholder="Pseudo" autofocus>
            <input type="password" class="form-control" name="password" placeholder="Mot de passe">
            <input type="password" class="form-control" name="password_confirm" placeholder="Confirmer le mot de passe">
            

            <p>Entrez vos détails personnels</p>
             <div class="radios">
                <label class="label_radio col-lg-6 col-sm-6" for="radio-01">
                    <input name="sexe" id="radio-01" value="1" type="radio" checked /> Homme
                </label>
                <label class="label_radio col-lg-6 col-sm-6" for="radio-02">
                    <input name="sexe" id="radio-02" value="1" type="radio" /> Femme
                </label>
            </div>
            <br>
            <br>
            <input type="text" class="form-control" name="nom" placeholder="Nom" autofocus>
            <input type="text" class="form-control" name="prenom" placeholder="Prénom" autofocus>
            <input type="text" class="form-control" name="email" placeholder="Email" autofocus>
            <input type="date" class="form-control" name="date" placeholder="Date" autofocus >
            <br>
            <input type="text" class="form-control" name="adresse" placeholder="Addresse" autofocus>
            <input type="text" class="form-control" name="ville" placeholder="Ville" autofocus >
            <input type="number" class="form-control" name="cp" placeholder="Code postal" min="0" max="99999" autofocus >
            <br>
            <select name="pays" class="form-control" placeholder="Pays">
                <option value="France">France</option>      
                <option value="Angleterre">Angleterre</option>  
                <option value="Irlande">Irlande</option>
                <option value="Espagne">Espagne</option>
            </select>

            <button class="btn btn-lg btn-login btn-block" type="submit">Valider</button>

            <div class="registration">
                Connectez-vous :
                <a class="" href="index.php">
                    Login
                </a>
            </div>

        </div>

      </form>

    </div>

 <!--Core js-->
    <?php include('include/js.inc.php'); ?>


  </body>
</html>
  </body>