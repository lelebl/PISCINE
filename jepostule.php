<?php

$title="Je postule";
require 'include/functions.php';
include("include/header.inc.php"); 
include("include/menu_haut.inc.php"); 
include("include/menu_gauche.inc.php"); 




$intitule = $_GET['intitule'];
$type = $_GET['type'];
$avantages = $_GET['avantages'];
$salaire = $_GET['salaire'];
$secteur = $_GET['secteur'];
$langues= $_GET['langues'];
$lieu = $_GET['lieu'];
$diplome = $_GET['diplome'];
$qualites= $_GET['qualites'];
$exigences = $_GET['exigences'];




define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','root');

$database = "piscine";

$db_handle=mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
$db_found = mysqli_select_db($db_handle, $database);

if ($db_found) {
    $sql = 'SELECT * FROM emploi';
    $result = mysqli_query($db_handle, $sql);
    while ($db_field = mysqli_fetch_assoc($result)) {

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
                <div class="col-lg-12">
                <div class="panel panel-default">
                   
					<div class="panel-heading"><?php echo $db_field['intitule'];?>
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a href="" class="fa fa-times"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     	
                     	<p> 
                     		<h4>Descripion de l'offre </h4><br><br>
                     		Type de contrat : <?php echo $db_field['type'];?><br>
							Avantages : <?php echo $db_field['avantages'];?><br>
							Salaire : <?php echo $db_field['salaire'];?><br>
							Secteur : <?php echo $db_field['secteur'];?><br>
							Langues exigées : <?php echo $db_field['langues'];?> <br>
							Lieu : <?php echo $db_field['lieu'];?><br>
							<br><br>
            				<h4>Profil recherché</h4><br>
							Diplomes : <?php echo $db_field['diplome'];?><br>
							Qualités : <?php echo $db_field['qualites'];?><br>
							Exigences (lettre de motivation, permis etc.) : <?php echo $db_field['exigences'];?><br>
							<br><br><br>
           				 	<h4> Coordoonées de l’employeur </h4><br>
         					Nom <br>
							Prénom<br>
							Email
						</p>

						
                     </div>

                     <div class="panel-body">
                     	<center>
                        <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
                            <div id="drop">
                                <h3>Télécharger votre CV ici</h3><br>

                               <h5><input type="file" name="upl" multiple=""></h5>
                            </div>

                            <ul>
                                <!-- The file uploads will be shown here -->
                            </ul>
                            <br><br><br>
                        </form>
                        </center>
                    




                     	<center>
                            <div class="bouton">
                          <br>
                          

                         <center> <a href="postuler.php"> Je postule! </a></center>
                        <br>
                          <br>
                        </div></center>
							


                     </div>
                 </div>
             </div>
</div>
					</div>
			</section>
		</section> 

	  <!-- Placed js at the end of the document so the pages load faster -->

<?php 
}
}
mysqli_close($db_handle);
 
include('include/right_side_bar.php');
 include('include/js.inc.php'); ?>



	</body>