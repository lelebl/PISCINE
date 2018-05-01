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
            <br>

            <p>Profil recherché</p>
             <input type="text" class="form-control" placeholder="Diplomes">
             <input type="text" class="form-control" placeholder="Qualités">
            <input type="text" class="form-control" placeholder="Exigences (lettre de motivation, permis etc.)" autofocus>

            <br>
            <p> Vos coordonnées </p>
            <input type="text" class="form-control" placeholder="Nom" autofocus>
            <input type="text" class="form-control" placeholder="Prénom" autofocus>
            <input type="text" class="form-control" placeholder="Email" autofocus>
            <br>
          
       

            <button class="btn btn-lg btn-login btn-block" type="submit">Mettre en ligne</button>

            

        </div>

      </form>

    </div>




  <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <?php include('include/js.inc.php'); ?>


</body>