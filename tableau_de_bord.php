<?php
$title="Tableau de bord";
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
                       
                    </ul>
                    <!--breadcrumbs end -->
                </div>
            </div>
<div class="row"></div>
				<div class="col-lg-6"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Partager une photo, une vidéo, un article 
					 
                     </div>

                     <div class="panel-body">
                     	
                     	 <textarea class="wysihtml5 form-control" rows="9"></textarea><br>
                     	<center><button class="btn btn-primary"> POSTULER ! </button></center>


                     </div>
                 </div>
				</div>

				<div class="col-lg-3"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Intitulé de l'offre 
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-bookmark" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     	
                     	<p> Descripion de l'offre <br><br><br><br><br><br></p>
                     	<center><button class="btn btn-primary"> POSTULER ! </button></center>


                     </div>
                 </div>
				</div>
			
				<div class="col-lg-3"> 
					<div class="panel panel-default">
                   
					<div class="panel-heading">Demande d'amis en cours
					 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-bookmark" ></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                     </span>
                     </div>

                     <div class="panel-body">
                     	
                     	

                     	<div class="mini-stat clearfix">
                            <span class="mini-stat-icon green"><i class="fa fa-suitcase"></i></span>
                            <div class="mini-stat-info">
                                NOM Prénom de la personne 1 <br>
                                <p> Job </p><br>
                                <center><button class="btn btn-primary"> Accepter </button>   <button class="btn btn-default"> Refuser </button></center>
                          
                            </div>
                        </div>


                     	<div class="mini-stat clearfix">
                            <span class="mini-stat-icon green"><i class="fa fa-suitcase"></i></span>
                            <div class="mini-stat-info">
                                NOM Prénom de la personne 1 <br>
                                <p> Job </p><br>
                                <center><button class="btn btn-primary"> Accepter </button>   <button class="btn btn-default"> Refuser </button></center>
                          
                            </div>
                        </div>


                     	<div class="mini-stat clearfix">
                            <span class="mini-stat-icon green"><i class="fa fa-suitcase"></i></span>
                            <div class="mini-stat-info">
                                NOM Prénom de la personne 1 <br>
                                <p> Job </p><br>
                                <center><button class="btn btn-primary"> Accepter </button>   <button class="btn btn-default"> Refuser </button></center>
                          
                            </div>
                        </div>
                     	
                     	

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

