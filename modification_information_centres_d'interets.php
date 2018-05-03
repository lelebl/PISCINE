<?php

$title="Modification Information centre d'interets";
require 'include/functions.php';
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
                        <li><a href="tableau_de_bord.php"><i class="fa fa-home"></i> Accueil</a></li>
                        
                        <li><a href="modification_information.php"></i> Information personnelles</a></li>
                        <li class="active">Centres d'intérêts</li>
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
            
                                    
                                        <a href="modification_information_modifs.php" class="btn btn-compose">
                                            Informations personnelles
                                        </a><br><br>

                                        <a href="modification_information_compétences.php" class="btn btn-compose">
                                            Compétences
                                        </a><br><br>
                                        <a href="modification_information_centres_d'interets.php" class="btn btn-compose">
                                            Centre d'intérêts
                                        </a>
                                </div>
                        </section>
                </div>
                
            
                <div class="col-lg-8">
                        <section class="panel">
                    <header class="panel-heading">
                        Centres d'intérêts
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <table class="table  table-hover general-table">
                            <thead>
                              <tr>
                                <th> Quels sont vos hobbies?</th>
                                <th>          </th>
                            </tr>

                            </thead>
                           <tbody>
                            <tr>
                                 <td><a >Sport</a></td>
                                 <td>
                                  <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-times"></a>
                                  </span>
                                </td>
                          </tr>
                            <tr>
                                <td><a >Musique</a></td>
                                <td>
                                  <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-times"></a>
                                  </span>
                                </td>

                            </tr>
                            <tr>
                                <td><a >Voyage</a></td>
                                <td>
                                  <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-times"></a>
                                  </span>
                                </td>
                            </tr>
                            <tr>
                                <td><a >Cuisine</a></td>
                                <td>
                                  <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-times"></a>
                                  </span>
                                </td>
                            </tr>
                            </tbody> 
                          
                        </table>
                        <div class="bouton">
                         <center> <a href="page_modif_centres_interets.php"> Modifier </a></center>
                        
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