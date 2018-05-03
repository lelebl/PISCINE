<?php

$title="Formation";
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
                        <li><a href="tableau_de_bord.php"><i class="fa fa-home"></i> Profil</a></li>
                        <li class="active">Formation</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
            </div>
            <div class="row">

              <div class="col-lg-12">
                <section class="panel">
                  <header class="panel-heading">
                    Formation 
                  </header>
                  <div class="panel-body">
                  	<table class="table">
                            <thead>
                            <tr>
                                <th> ECE PARIS</th>
                                <th>Ecole d'ingénieur</th>
                                <th>2015 - 2017</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a >Domaine</a></td>
                                <td>Ingienerie</td>    
                                
                            </tr>
                            <tr>
                                <td><a >Associations</a></td>
                                <td>SDI, Les Caves, UPA</td>    
                                
                            </tr>
                            <tr>
                                <td><a >Description</a></td>
                                <td>Majeur: Ocres, Mineur: Ingiénérie d'affaire</td>    
                                
                            </tr>
                        </tbody>
                            <thead>
                            <tr>
                                <th> <br><br>SJH</th>
                                <th>Lycée</th>
                                <th>2009 - 2015</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a >Domaine</a></td>
                                <td>Bac scientifique</td>    
                                
                            </tr>
                            <tr>
                                <td><a>Associations</a></td>
                                <td> Soeurs de la miséricorde</td>    
                                
                            </tr>
                            <tr>
                                <td><a >Description</a></td>
                                <td> Bac mention bien </td>    
                                
                            </tr>
                            
                        </tbody>
                    </table>
                    <div class="bouton">
                          <br>
                          

                         <center> <a href="modification_formation.php"> Modifier </a></center>
                        <br>
                          <br>
                        </div>


                  </div>
              </section>
          </div>
          
      </div>
  </section>
</section>

<?php include('include/right_side_bar.php');
 include('include/js.inc.php'); ?>

</body>
</html>