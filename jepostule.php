	<?php
	$title="Je postule";
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
                </div></div>
                <div class="col-lg-12">
                <div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-bookmark" ></a>
                                <a href="" class="fa fa-times"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     	
                     	<p> 
                     		<h4>Descripion de l'offre </h4><br><br>
                     		Type de contrat<br>
							Avantages<br>
							Salaire<br>
							Secteur<br>
							Langues exigées<br>
							Lieu<br>
							<br><br>
            				<h4>Profil recherché</h4><br>
							Diplomes<br>
							Qualités<br>
							Exigences (lettre de motivation, permis etc.)<br>
							<br><br><br>
           				 	<h4> Coordoonées de l’employeur </h4><br>
         					Nom<br>
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
                     		<button class="btn btn-primary" type="button" formtarget="jepostule.php"> JE POSTULE ! </button></center>
							


                     </div>
                 </div>
             </div>
</div>
					</div>
			</section>
		</section> 

	  <!-- Placed js at the end of the document so the pages load faster -->

<?php include('include/right_side_bar.php');
 include('include/js.inc.php'); ?>



	</body>