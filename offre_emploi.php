<?php
$title="Soumettre une offre d'emploi";
include("include/header.inc.php"); 
include("include/menu_haut.inc.php"); 
include("include/menu_gauche.inc.php"); 


?>

<body>

    <section id="main-content">
        <section class="wrapper"> 
            <div class="row">
                <div class="col-md-12">
                    <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="tableau_de_bord.php"><i class="fa fa-home"></i> Accueil</a></li>
                        <li class="active">Soumettre une offre d'emploi </li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
            </div>
            <div class="row">
            <div class="col-lg-12">

      <section class="panel">
        <header class="panel-heading">VOTRE OFFRE D'EMPLOI</header> 
        <div class="panel-body">
            <div class="position-center">
                    <form class="form-sigin" action="index.html">
            <input type="text" class="form-control" placeholder="Intitulé de l'offre" autofocus><br><br>
            <input type="text" class="form-control" placeholder="Type de contrat"><br><br>
            <input type="text" class="form-control" placeholder="Avantages"><br><br>
            <input type="text" class="form-control" placeholder="Salaire"><br><br>
            <input type="text" class="form-control" placeholder="Secteur"><br><br>
            <input type="text" class="form-control" placeholder="Langues exigées"><br><br>
            <input type="text" class="form-control" placeholder="Lieu"><br><br>

            <br><br><br>

            <h3>Profil recherché</h3><br>
             <input type="text" class="form-control" placeholder="Diplomes"><br><br>
             <input type="text" class="form-control" placeholder="Qualités"><br><br>
            <input type="text" class="form-control" placeholder="Exigences (lettre de motivation, permis etc.)" autofocus><br><br>
<br><br>
            <br>
            <h3> Vos coordonnées </h3><br>
            <input type="text" class="form-control" placeholder="Nom" autofocus><br><br>
            <input type="text" class="form-control" placeholder="Prénom" autofocus><br><br>
            <input type="text" class="form-control" placeholder="Email" autofocus><br><br>
            <br>
          <div class="bouton">
       
          <center><a href="cbon.php">METTRE EN LIGNE</a> </center> 
          <br><br>
          </div>
      </form>

            </div>

        </div>

      </form>
      </div>

    </div>
</div>
</div>
</section>
</section> 

  <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <?php include('include/js.inc.php'); ?>


</body>