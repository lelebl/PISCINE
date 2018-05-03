<?php

$title="Modification formation";
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
                        <li class="active">Modification information</li>
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
                                <th><span class="tools pull-right">
                                    <a href="#modifier" type="button" data-toggle="modal" class="fa fa-pencil"></a>
                                    <a href="javascript:;" class="fa fa-times"></a>
                                  </span></th>
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
                                <th><span class="tools pull-right">
                                   <a href="#modifier" type="button" data-toggle="modal" class="fa fa-pencil"></a>
                                    <a href="javascript:;" class="fa fa-times"></a>
                                  </span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a >Domaine</a></td>
                                <td>Bac scientifique</td>    
                                
                            </tr>
                            <tr>
                                <td><a >Associations</a></td>
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
                          

                         <center> <a href="formation.php"> Enregistrer</a></center>
                        <br>
                          <br>
                        </div>
                  </div>
              </section>
          </div>
          
      </div>

       <div class="modal fade" id="modifier" tabindex="-1" role="dialog" aria-labelledby="modifier" aria-hidden="true"> 
            <div class="modal-dialog modal-md">
                <div class="modal-content"> 
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title text-center">Modifier la formation</h4>
                </div>

                <div class="modal-body text-center">
                    <h4 class="m-t-0">Edition</h4>
                    <form>
                        <div class="form-group">
                            <p>Date de début : </p>
                            <label class="sr-only">Date de debut</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-calendar"></span></div>
                                <input type="date" class="form-control" placeholder="jj/mm/aaaa">
                            </div>
                        </div>

                        <div class="form-group">
                            <p>Date de fin : </p>
                            <label class="sr-only">Date de fin</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-calendar"></span></div>
                                <input type="date" class="form-control" placeholder="jj/mm/aaaa">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="sr-only">Ecole</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-suitcase"></span></div>
                                <input type="text" class="form-control" placeholder="Ecole">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="sr-only">Domaine</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-flask"></span></div>
                                <input type="text" class="form-control" placeholder="Domaine">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="sr-only">Assos</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-users"></span></div>
                                <input type="text" class="form-control" placeholder="Associations">
                            </div>
                        </div>
                        
                        

                        <div class="form-group">
                            <label class="sr-only">Diplome</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-trophy"></span></div>
                                <input type="text" class="form-control" placeholder="Diplome">
                            </div>
                        </div>

                                                <div class="form-group">
                            <label class="sr-only">Description</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-pencil-square-o"></span></div>
                                <textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Description"></textarea>
                            </div>
                        </div>
                    <div class="bouton">
                        <br><a href="formation.php">POSTER</a><br><br><br>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
  </section>
</section>

 <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/chart.js"></script>
<script src="../assets/js/toolkit.js"></script>
<script src="../assets/js/application.js"></script>
<script>
// execute/clear BS loaders for docs
    $(function(){
        if (window.BS&&window.BS.loader&&window.BS.loader.length) {
            while(BS.loader.length){(BS.loader.pop())()}
        }
    })
</script>

<?php include('include/right_side_bar.php');
 include('include/js.inc.php'); ?>


</body>
</html>