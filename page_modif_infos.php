<?php 
$title="vrai modification information";
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
                        <li class="active">Modification Informations Personnelles</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
            </div>
            <div class="row">
                
                
            
                <div class="col-lg-12">
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
                            <br><br>
                            <tr>
                                <td><a href="#">NOM</a></td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Nom" autofocus>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a href="#">PRENOM</a></td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Prénom" autofocus>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a href="#">PSEUDO</a></td>
                                <td><input type="text" class="form-control" placeholder="Pseudo" autofocus>
                                </td>
                                
                            </tr>
                             <tr>
                                <td><a href="#">EMAIL</a></td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Email" autofocus>
                                </td>
                                
                            </tr>
                             <tr>
                                <td><a href="#">MOT DE PASSE</a></td>
                                <td><input type="password" class="form-control" placeholder="Mot de passe">
                                </td>
                                
                            </tr>
                            
                            <tr>
                                <td><a href="#">ADRESSE</a></td>
                                <td>
                                     <input type="text" class="form-control" placeholder="Addresse" autofocus>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a href="#">VILLE</a></td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Ville" autofocus >
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a href="#">CODE POSTAL</a></td>
                                <td>
                                    <input type="number" class="form-control" placeholder="Code postal" min="0" max="99999" autofocus >
                                </td>
                                
                            </tr><tr>
                                <td><a href="#">PAYS</a></td>
                                <td>
                                    <select name="pays" class="form-control" id="pays"placeholder="Pays">
                <option value="France">France</option>      
                <option value="Angleterre">Angleterre</option>  
                <option value="Irlande">Irlande</option>
                <option value="Espagne">Espagne</option>
            </select>
                                  
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a href="#">TELEPHONE</a></td>
                                <td>telephone
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a href="#">DATE DE NAISSANCE</a></td>
                                <td>
                                    <input type="date" class="form-control" placeholder="Date" autofocus >
                                </td>
                                
                            </tr>
                            <tr>
                                <tr>

                                <td><a href="#">RESUME</a></td>
                                <td>

                                  
                                     <br>
                                      <br>


                                    
                                    <br> <textarea class="wysihtml5 form-control" rows="4"></textarea><br>
                    
                                    <div class="bouton">

                                      <center><a href="tableau_de_bord.php">Enregistrer</a></center><br><br>
                                    </div>

                      
                                </td>
                                
                            
                                
                            </tr>
                            <tr>
                                <td><a href="#">CV</a></td>
                                <td>

                                  
                                     <br>
                                      <br>


                                    <div class="boutontab">

                                      <center><a href="#"><i class="fa fa-paperclip"></i></a></center>
                                    </div>
                                    <!--<form id="upload" method="post" action="upload.php" enctyper="multipart/form-data"-->
                                    <br>
                                    <br>
                                    
                                    <div class="bouton">

                                      <center><a href="tableau_de_bord.php">Enregistrer</a></center><br><br>
                                    </div>




                                </td>
                                
                            </tr>
                            
                        </table>
                        <div class="bouton">
                          <br>
                          

                         <center> <a href="modification_information_modifs.php"> Modifier </a></center>
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