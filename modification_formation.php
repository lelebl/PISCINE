<?php

$title="Modification formation";
require 'include/functions.php';
include("include/header.inc.php"); 
include("include/menu_haut.inc.php"); 
include("include/menu_gauche.inc.php"); 
require_once 'include/db.php';

$req=$pdo->prepare('SELECT * FROM formation WHERE username = ?');
$req->execute([$_SESSION['auth']->username]);
$formation=$req->fetchAll();

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
                          <?php 
                        if(count($formation)>0):
                            $b=0;
                        foreach ($formation as $form) :?>
                            <thead>
                            <tr>
                                <th> <?php echo($form->ecole); ?></th>
                                <th> <?php echo($form->diplome); ?></th>
                                <th> <?php echo($form->date_debut." - ".$form->date_fin); ?>
                              </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a >Domaine </a></td>
                                <td><?php echo($form->domaine); ?></td>    
                                
                            </tr>
                            <tr>
                                <td><a >Associations</a></td>
                                <td><?php echo($form->associations); ?></td>    
                                
                            </tr>
                            <tr>
                                <td><a >Description</a></td>
                                <td><?php echo($form->description); ?></td>    
                            </tr>
                        </tbody><?php $b++;
                        endforeach; endif;
                        ?>

                    </table>

                    <div class="bouton">
                          <br>
                          <center> <a href="modif_form.php" type="button" data-toggle="modal" > Enregistrer</a></center>
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
                            <?php  foreach ($formation as $form) :?>
                            <div class="form-group">
                                <p>Date de début : </p>
                                <label class="sr-only"><?php echo($form->date_debut); ?></label>
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="fa fa-calendar"></span></div>
                                    <input type="date" class="form-control" placeholder="jj/mm/aaaa">
                                </div>
                            </div>
                            <div class="form-group">
                                <p>Date de fin : </p>
                                <label class="sr-only"><?php echo($$form->date_fin); ?></label>
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="fa fa-calendar"></span></div>
                                    <input type="date" class="form-control" placeholder="jj/mm/aaaa">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Ecole</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="fa fa-suitcase"></span></div>
                                    <input type="text" class="form-control" placeholder=<?php echo($form->ecole); ?>>
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
                            <?php endforeach;  ?>
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