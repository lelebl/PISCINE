<?php 
$title="Expérience";
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
                        <li class="active">Expérience</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
            </div>
            <div class="row">

              <div class="col-lg-12">
                <section class="panel">
                  <header class="panel-heading">
                   Expérience
                  </header>
                  <div class="panel-body">
                    <table class="table">
                            <thead>
                            <tr>
                                <th> Poste</th>
                                <th>Entreprise</th>
                                <th>2015 - 2017</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a >Lieu</a></td>
                                <td>Paris</td>    
                                
                            </tr>
    
                            <tr>
                                <td><a >Description</a></td>
                                <td>Stage </td>    
                                
                            </tr>
                        </tbody>
                            <thead>
                            <tr>
                                <th> Poste</th>
                                <th>Entreprise</th>
                                <th>2015 - 2017</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a >Lieu</a></td>
                                <td>Paris</td>    
                                
                            </tr>
    
                            <tr>
                                <td><a >Description</a></td>
                                <td>Stage </td>    
                                
                            </tr>
                        </tbody>
                    </table>
                    <div class="bouton">
                          <br>
                          

                         <center> <a href="page_modif_experience.php"> Modifier </a></center>
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