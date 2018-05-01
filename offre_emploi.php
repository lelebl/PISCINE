<?php
$title="Offre d'emploi";
include("include/header.inc.php"); 
include("include/menu_haut.inc.php"); 
include("include/menu_gauche.inc.php"); 


?>

<body class="emploi-body">

    <div class="container">

      <form class="form-signin" action="index.html">
        <h2 class="form-signin-heading">Votre offre d'emploi</h2>
        <div class="login-wrap">

            <input type="text" class="form-control" placeholder="Intitulé de l'offre" autofocus>
            <input type="text" class="form-control" placeholder="Type de contrat">
            <input type="text" class="form-control" placeholder="Avantages">
            <input type="text" class="form-control" placeholder="Salaire">
            <input type="text" class="form-control" placeholder="Secteur">
            <input type="text" class="form-control" placeholder="Langues exigées">
            

            <p>Profil recherché</p>
             <input type="text" class="form-control" placeholder="Diplomes">
             <input type="text" class="form-control" placeholder="Qualités">
             <input type="text" class="form-control" placeholder="Avantages">
             <input type="text" class="form-control" placeholder="Avantages">

            <br>
            <br>
            <p> Personne à contacter </p>
            <input type="text" class="form-control" placeholder="Nom" autofocus>
            <input type="text" class="form-control" placeholder="Prénom" autofocus>
            <input type="text" class="form-control" placeholder="Email" autofocus>
            <input type="date" class="form-control" placeholder="Date" autofocus >
            <br>
            <input type="text" class="form-control" placeholder="Addresse" autofocus>
            <input type="text" class="form-control" placeholder="Ville" autofocus >
            <input type="number" class="form-control" placeholder="Code postal" min="0" max="99999" autofocus >
            <br>
            <select name="pays" class="form-control" id="pays"placeholder="Pays">
                <option value="France">France</option>      
                <option value="Angleterre">Angleterre</option>  
                <option value="Irlande">Irlande</option>
                <option value="Espagne">Espagne</option>
            </select>

          
       


           <label class="checkbox">
                <input type="checkbox" value="agree this condition"> J'accepte les termes et conditions
            </label>
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




  <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <?php include('include/js.inc.php'); ?>


</body>