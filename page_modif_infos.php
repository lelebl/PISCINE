<?php 
$title="ModificationInformations";
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
                        <li><a href="accueil.php"><i class="fa fa-home"></i> Profil</a></li>
                        <li class="active">Modification de mes informations personelles</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
            </div>
            <div class="row">

              <div class="col-lg-12">
                <section class="panel">
                  <header class="panel-heading">
                    Modifiez vos informations personelles
                    </header>
                     <div class="panel-body">
                     	<center>
                     	<div class="col-lg-6">
                     		
     <table class="table">
                            
                            
                            
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
                            
                        </table>
                        
                    </div>
                    <div class="col-lg-6">
                        
                        <table class="table">
                            
                            
                            
                            <tr>
                                <td><a href="#">PHOTO</a></td>
                                <td>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    <div class="images item " >
                                        <a href="#myModal" data-toggle="modal">
                                   <img src="images/imgO1.png" alt="" />
                               </a>
                               </div>
                                    </a>

   

                                </td>
                                
                                
                            </tr>
                            
                            <tr>
                                <td><a href="#">IMAGE DE FOND</a></td>
                                <td>choix de l'image de fond
                                </td>
                                
                            </tr>
                            <tr>

                                <td><a href="#">RESUME</a></td>
                                <td>résumé
                                </td>
                                
                            
                                
                            </tr>
                            <tr>
                                <td><a href="#">CV</a></td>
                                <td>cv
                                </td>
                                
                            </tr>

                            
                           
                            
                        </table>

                        <div class="bouton">
                         <center> <a href="modification_information.php"> Enregistrer </a></center>
                        
                        </div>
            
        </div>
        </center>
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