<?php 
$title="Expérience modification";
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
                    Expérience
                  </header>
                  <div class="panel-body">
                    <table class="table">
                            <thead>
                            <tr>
                                <th> Poste</th>
                                <th>Entreprise</th>
                                <th>2015 - 2017</th>
                                <th><span class="tools pull-right">
                                    <a href="#modifier" type="button" data-toggle="modal" class="fa fa-pencil"></a>
                                    <a href="javascript:;" class="fa fa-times"></a>
                                  </span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a>Lieu</a></td>
                                <td>Paris</td>    
                                
                            </tr>
    
                            </tr>
                            <tr>
                                <td><a>Description</a></td>
                                <td>Stage</td>    
                                
                            </tr>
                        </tbody>
                            <thead>
                            <tr>
                                <th> Poste</th>
                                <th>Entreprise</th>
                                <th>2015 - 2017</th>
                                <th><span class="tools pull-right">
                                    <a href="#modifier" type="button" data-toggle="modal" class="fa fa-pencil"></a>
                                    <a href="javascript:;" class="fa fa-times"></a>
                                  </span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a>Lieu</a></td>
                                <td>Paris</td>    
                                
                            </tr>
    
                            </tr>
                            <tr>
                                <td><a>Description</a></td>
                                <td>Stage</td>    
                                
                            </tr>
                        </tbody>
                    </table>

<div class="bouton">
                          <br>
                          

                         <center> <a href="expérience.php"> Enregistrer</a></center>
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
                    <h4 class="modal-title text-center">Modifier l'éxperience</h4>
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
                            <label class="sr-only">Poste</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-suitcase"></span></div>
                                <input type="text" class="form-control" placeholder="Poste">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="sr-only">Entreprise</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-hospital-o"></span></div>
                                <input type="text" class="form-control" placeholder="Entreprise">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="sr-only">Lieu</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-map-marker"></span></div>
                                <input type="text" class="form-control" placeholder="Lieu">
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
                        <br><a href="experience.php">POSTER</a><br><br><br>
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