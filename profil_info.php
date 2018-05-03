<?php

$title="Profil";
require 'include/functions.php';
include("include/header.inc.php"); 
include("include/menu_haut.inc.php"); 
include("include/menu_gauche.inc.php"); 
?>

  <body>
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
                <div class="col-md-12">
                    <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="tableau_de_bord.php"><i class="fa fa-home"></i> Tableau de bord</a></li>
                        <li class="active">Profil</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
            </div>
            <div class="row">

              <div class="col-lg-12">
                <section class="panel">
                  <header class="panel-heading">
                    Informations personelles

                  </header>
                  <div class="panel-body">
                    <div class="col-lg-6">
                        
                        <table class="table">
                            <tr>
                                  <img src="images/logo.png" alt="">
                            </tr>
                            <tr>

                                <td><a href="#">RESUME</a></td>
                                <td>résumé</td>
                                
                            </tr>
                            <tr>
                                <td><a href="#">CV</a></td>
                                <td>cv
                                </td>
                                
                            </tr>
                        </table>

                    </div>
                    <div class="col-lg-6">
                        <table class="table">
                            
                            
                            
                            <tr>
                                <td><a href="#">NOM</a></td>
                                <td>
                                    nom
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a href="#">PRENOM</a></td>
                                <td>
                                    prenom
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a href="#">PSEUDO</a></td>
                                <td>pseudo
                                </td>
                                
                            </tr>
                             <tr>
                                <td><a href="#">EMAIL</a></td>
                                <td>email
                                </td>
                                
                            </tr>
                             <tr>
                                <td><a href="#">DATE DE NAISSANCE</a></td>
                                <td>date de naissance
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a href="#">ADRESSE</a></td>
                                <td>adresse
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a href="#">VILLE</a></td>
                                <td>ville
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a href="#">CODE POSTAL</a></td>
                                <td>code postal
                                </td>
                                
                            </tr><tr>
                                <td><a href="#">PAYS</a></td>
                                <td>pays
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a href="#">TELEPHONE</a></td>
                                <td>telephone
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a href="#">DATE DE NAISSANCE</a></td>
                                <td>date de naissance
                                </td>
                                
                            </tr>
                            <tr>
                            
                        </table>
                    </div>
                </div>

                 </section>
                

              </div>
            <div class="col-lg-6">
                <section class="panel">
                    <header class="panel-heading">
                        Compétences
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <table class="table  table-hover general-table">
                            <thead>
                            <tr>
                                <th> Nom</th>
                                <th>Niveau</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="#">Pack Office</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a href="#">C</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td><a href="#">C++</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">Java</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">HTML/CSS</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">Espagnol</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">Anglais</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">Allemand</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">Matlab</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">Gestion de projet</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">Analyse financière</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">Design Thinking</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">Prototypage</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">BigData</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">BlockChain</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">Entreprenariat</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">SQL</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">Leadership</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">Linux</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">Web Design</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">WordPress</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">Application mobiles</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">20% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                           
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
            

    <div class="col-lg-6">
                <section class="panel">
                    <header class="panel-heading">
                        Centres d'intérêts
                    </header>
                    <div class="panel-body">
                        <table class="table  table-hover general-table">
                           <tbody>
                            <tr>
                                 <td><a href="#">Sport</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">Musique</a></td>
                                <td>
                                  <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-times"></a>
                                  </span>
                                </td>

                            </tr>
                            <tr>
                                <td><a href="#">Voyage</a></td>
                                <td>
                                  <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-times"></a>
                                  </span>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">Cuisine</a></td>
                                <td>
                                  <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-times"></a>
                                  </span>
                                </td>
                            </tr>
                            </tbody> 
                          
                        </table>
                    </div>
                </section>
            </div>

        <!-- page end-->
        </section>
    </section>

</div>
</div>
<!--right sidebar end-->

</section>
   
   <?php include('include/right_side_bar.php');
 include('include/js.inc.php'); ?>

  </body>
</html>