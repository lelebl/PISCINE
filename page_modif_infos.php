<?php

$title="Modification Information";
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
                        <li class="active"> Modification Informations Personnelles</li>
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
                                    Compétences: Maths, Anglais, Francais, Power point, etc. 
                                  </p>
                                
                              </div>
                              <div class="col-lg-10">
                                <table class="table">
                            <br><br>
                            <tr>
                                <td><a >NOM</a></td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Nom" autofocus>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a >PRENOM</a></td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Prénom" autofocus>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a >PSEUDO</a></td>
                                <td><input type="text" class="form-control" placeholder="Pseudo" autofocus>
                                </td>
                                
                            </tr>
                             <tr>
                                <td><a >EMAIL</a></td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Email" autofocus>
                                </td>
                                
                            </tr>
                             <tr>
                                <td><a >MOT DE PASSE</a></td>
                                <td><input type="password" class="form-control" placeholder="Mot de passe">
                                </td>
                                
                            </tr>
                            
                            <tr>
                                <td><a >ADRESSE</a></td>
                                <td>
                                     <input type="text" class="form-control" placeholder="Addresse" autofocus>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a >VILLE</a></td>
                                <td>
                                    <input type="text" class="form-control" placeholder="Ville" autofocus >
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a>CODE POSTAL</a></td>
                                <td>
                                    <input type="number" class="form-control" placeholder="Code postal" min="0" max="99999" autofocus >
                                </td>
                                
                            </tr><tr>
                                <td><a >PAYS</a></td>
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
                                <td><a >TELEPHONE</a></td>
                                <td><input type="number" class="form-control" placeholder="telephone" min="0" max="9999999999" autofocus >
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a>DATE DE NAISSANCE</a></td>
                                <td>
                                    <input type="date" class="form-control" placeholder="Date" autofocus >
                                </td>
                                
                            </tr>
                            <tr>
                                <tr>

                                <td><a >RESUME</a></td>
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
                                <td><a >CV</a></td>
                                <td>

                                  
                                     <br>
                                      <br>
                                    <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
                               <center><h5><input type="file" name="upl" multiple=""></h5>
                                   <ul>
                                <!-- The file uploads will be shown here -->
                              </ul></center>  
                        </form>
                                    <br>
                                    <br>
                                    
                                    




                                </td>
                                
                            </tr>
                            
                        </table>
                        <div class="bouton">
                          <br>
                          

                         <center> <a href="modification_information_modifs.php"> Enregistrer </a></center>
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