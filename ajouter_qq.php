<?php 
$title="Modification Information";
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
                        <li class="active">Mon réseau</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                        <section class="panel">
                            <div class="panel-heading">
                                Retrouver un ami
                            </div>
                                <div class="panel-body">
            
                                    <table class="table">
                            
                            <tr>
                                <td><a >Prenom</a></td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Prénom" autofocus>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a>Nom</a></td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Nom" autofocus>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a >Ecole</a></td>
                                <td><input type="text" class="form-control" placeholder="Ecole" autofocus>
                                </td>
                                
                            </tr>
                             <tr>
                                <td><a >Ville</a></td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Ville" autofocus>
                                </td>
                                
                            </tr>
                            </table>
                             <tr>
                            <div class="bouton">
                          <br>
                          

                         <center> <a href="modification_information_modifs.php"> Rechercher </a></center>
                        <br>
                          <br>
                        </div>
                      </tr>
                            
                        
                                        
                                </div>
                        </section>
                </div>
                
            
                <div class="col-lg-8">
                        <section class="panel">
                          <div class="panel-heading">
                            Gerer les demandes
                          </div>
                        <div class="panel-body">
                          <div class="panel-body profile-information">
                       <div class="col-lg-4">
                           <div class="profile-pic text-center">
                               <img src="images/emmanuelle.jpg" alt=""/>
                           </div>
                       </div>
                       <div class="col-lg-8">
                           <div class="profile-desk">
                            <div class="com-lg-1">
                        <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-check" ></a>
                                <a href="javascript:;" class="fa fa-times" ></a>
                        </span>
                       </div>
                               <h1>Charlotte Decary</h1>
                             
                               <br>
                               <p>
                                    Ville : Versailles
                                    <br>
                                    <br>
                                    Ecole : ECE
                               </p>
                           </div>
                       </div>

                    </div>
                    <div class="panel-body profile-information">
                       <div class="col-lg-4">
                           <div class="profile-pic text-center">
                               <img src="images/emmanuelle.jpg" alt=""/>
                           </div>
                       </div>
                       <div class="col-lg-8">
                           <div class="profile-desk">
                            <div class="com-lg-1">
                        <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-check" ></a>
                                <a href="javascript:;" class="fa fa-times" ></a>
                        </span>
                       </div>
                               <h1>Lélé Blanchard </h1>
                              
                               <br>
                               <p>
                                    Ville : Paris 15
                                    <br>
                                    <br>
                                    Ecole : ECE
                               </p>
                           </div>
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