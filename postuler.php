<?php

$title="Postuler";
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
			<!--entete-->
            <div class="row">
                <div class="col-md-12">
                    <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="tableau_de_bord.php"><i class="fa fa-home"></i> Accueil</a></li>
                        <li class="active">Vos offres d'emplois </li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
            </div>
            <!--entete-->

            <!--head-->
			<div class="mini-stat clearfix">
                            <span class="mini-stat-icon green"><i class="fa fa-suitcase"></i></span>
                            <div class="mini-stat-info">
                                <br>VOS OFFRES D'EMPLOI
                           
                            </div>
                        </div>
            <!--head-->


			<div class="row"></div>
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading"><?php echo $db_field['intitule'];?>
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a href="" class="fa fa-times"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     	<div class="bouton">
                     	<p> Description de l'offre <br>
                            Type : <?php echo $db_field['type'];?><br>
                            Secteur : <?php echo $db_field['secteur'];?><br>
                            Lieu : <?php echo $db_field['lieu'];?><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>

                     </div>
                 </div>
				</div>
			
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     	<div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>
                     </div>
                 </div>
				</div>
			
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     	<div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>
                     </div>
                 </div>
				</div>
			</div>

			<div class="row"></div>
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     	<div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>

                     </div>
                 </div>
				</div>
			
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     	<div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>

                     </div>
                 </div>
				</div>
			
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                   <div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>
                     </div>
                 </div>
				</div>
			</div>



			<div class="row"></div>
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     	
                     <div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>

                     </div>
                 </div>
				</div>
			
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     	<div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>
                     </div>
                 </div>
				</div>
			
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     <div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>
                     </div>
                 </div>
				</div>
			</div>




			<div class="row"></div>
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     <div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>

                     </div>
                 </div>
				</div>
			
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     	<div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>
                     </div>
                 </div>
				</div>
			
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                   <div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>
                     </div>
                 </div>
				</div>
			</div>




			<div class="row"></div>
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     	<div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>

                     </div>
                 </div>
				</div>
			
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                   <div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>

                     </div>
                 </div>
				</div>
			
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     	
                     	<div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>

                     </div>
                 </div>
				</div>
			</div>

<div class="row"></div>
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     <div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>

                     </div>
                 </div>
				</div>
			
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     <div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>
                     </div>
                 </div>
				</div>
			
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     	
                    <div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>
                     </div>
                 </div>
				</div>
			</div>
<div class="row"></div>
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                  <div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>

                     </div>
                 </div>
				</div>
			
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     	<div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>
                     </div>
                 </div>
				</div>
			
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     <div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>

                     </div>
                 </div>
				</div>
			</div>
<div class="row"></div>
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     	
                    <div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>

                     </div>
                 </div>
				</div>
			
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     	<div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>


                     </div>
                 </div>
				</div>
			
				<div class="col-lg-4"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     <div class="bouton">
                     	<p> Descripion de l'offre <br><br><br><br><br></p>
                     	<center><a href="jepostule.php">POSTULER</a></center><br>
                     	</div>
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