<?php 
$title="Connexion";
include("include/header.php"); 

include("include/menu_haut.php"); 

include("include/menu_gauche.php"); 
?>

<body class="login-body">

    <div class="container">

      <form class="form-signin" action="index.html">
        <h2 class="form-signin-heading">Créez votre compte</h2>
        <div class="login-wrap">

            <p>Entrez vos informations de connexion</p>
            <input type="text" class="form-control" placeholder="Pseudo" autofocus>
            <input type="password" class="form-control" placeholder="Mot de passe">
            <input type="password" class="form-control" placeholder="Confirmer le mot de passe">
            

            <p>Entrez vos détails personnels</p>
             <div class="radios">
                <label class="label_radio col-lg-6 col-sm-6" for="radio-01">
                    <input name="sample-radio" id="radio-01" value="1" type="radio" checked /> Homme
                </label>
                <label class="label_radio col-lg-6 col-sm-6" for="radio-02">
                    <input name="sample-radio" id="radio-02" value="1" type="radio" /> Femme
                </label>
            </div>
            <br>
            <input type="text" class="form-control" placeholder="Nom" autofocus>
            <input type="text" class="form-control" placeholder="Prénom"" autofocus>
            <input type="text" class="form-control" placeholder="Email" autofocus>
            <input type="text" class="form-control" placeholder="Addresse" autofocus>
            <input type="text" class="form-control" placeholder="Ville" autofocus>
         
            <input placeholder="Date" class="form-control" type="date" boxs>


           <label class="checkbox">
                <input type="checkbox" value="agree this condition"> J'accepte les termes et conditions
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Valider</button>

            <div class="registration">
                Enregistrement réussi!
                <a class="" href="login.html">
                    Login
                </a>
            </div>

        </div>

      </form>

    </div>


    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="js/jquery.js"></script>
    <script src="bs3/js/bootstrap.min.js"></script>

  </body>