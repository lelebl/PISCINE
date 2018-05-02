<?php 
$title="Messagerie";
include("include/header.inc.php"); 
include("include/menu_haut.inc.php");
include("include/menu_gauche.inc.php");
?>

<body>
    <!--main content start-->
    <section id="main-content" >
    <section class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="accueil.php"><i class="fa fa-home"></i> Accueil</a></li>
                        <li class="active">Messagerie</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                        <section class="panel">
                            <div class="panel-heading">
                                Informations du profil
                            </div>
                                <div class="panel-body">
            
                                    <ul >
                                        <li href="nouveau_message.php" class="btn btn-compose">
                                            Informations personelles
                                            <br>
                                        </li>

                                    </ul>
                                    <ul >
                                        <li href="nouveau_message.php" class="btn btn-compose">
                                            Compétences
                                        </li>
                                    </ul>
                                    <ul>
                                        <li href="nouveau_message.php" class="btn btn-compose">
                                            Informations personelles
                                        </li>
                                    </ul>
                                </div>
                        </section>
                </div>
                
            
                <div class="col-lg-8">
                        <section class="panel">
                    <div class="panel-body profile-information">
                       <div class="col-lg-4">
                           <div class="profile-pic text-center">
                               <img src="images/emmanuelle.jpg" alt=""/>
                           </div>
                       </div>
                       <div class="col-lg-4">
                           <div class="profile-desk">
                               <h1>Prenom Nom</h1>
                               <span class="text-muted">Ecole</span>
                               <p>
                                    Compétences: Maths, Anglais, Francais, Power point, ect 
                               </p>
                           </div>
                       </div>
                       <div class="col-lg-4">
                           <div class="profile-statistics">
                               <h1>8</h1>
                               <p>Amis</p>
                               <h1>9</h1>
                               <p>Centres d'interet</p>
                           </div>
                       </div>
                    </div>
                </section>
                </div>
            </div>

            </div>
        </section>
    </section>

<?php include('include/right_side_bar.php');
 include('include/js.inc.php'); ?>

</body>
</html>