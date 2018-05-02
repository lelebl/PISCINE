<?php 
$title="Modification Information Modifs";
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
                        <li><a href="modification_information.php"></i> Informations personelles </a></li>
                        <li class="active">Modification Informations Personnelles</li>
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
                          <div class="panel-body profile-information">


                              <div class="col-lg-4">
                                  <div class="profile-pic text-center">
                                    <img src="images/emmanuelle.jpg" alt=""/>
                                  </div>
                              </div>
                              <div class="col-lg-1"></div>

                              <div class="col-lg-4">
                                
                                  <h1>Prenom Nom</h1>
                                  <span class="text-muted">Ecole</span>
                                  <p>
                                    Compétences: Maths, Anglais, Francais, Power point, ect 
                                  </p>
                                
                              </div>
                              <div class="col-lg-10">
                                <table class="table">
                            
                            <br><br><br><br>
                            
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
                                <td><a href="#">MOT DE PASSE</a></td>
                                <td>mot de passe
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
                                  <span class="tools pull-right">
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

                                <td><a href="#">RESUME</a></td>
                                <td> Et la on a un suoper resume<br>
                                 trop style et tout et tout 
                                  et bla bla
                                  <br>et bla bla
                                  et bla bla

                      
                                </td>
                                
                            
                                
                            </tr>
                            <tr>
                                <td><a href="#">CV</a></td>
                                <td>


                                    <div class="boutontab">

                                      <a href="#"><i class="fa fa-paperclip"></i></a>
                                    </div>
                                    





                                </td>
                                
                            </tr>
                            
                        </table>
                        <div class="bouton">
                          <br>
                          

                         <center> <a href="page_modif_infos.php"> Modifier </a></center>
                        <br>
                          <br>
                        </div>
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