<?php 
$title="modification Centres d'interets";
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
                        <li class="active">Modification Centres d'intérêts</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
            </div>

            <div class="row">
            
                <div class="col-lg-12">
                        <section class="panel">
                    <header class="panel-heading">
                        Centres d'intérêts
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <table class="table  table-hover general-table">
                            <thead>
                              <tr>
                                <th> Quels sont vos hobbies?</th>
                                <th>          </th>
                            </tr>

                            </thead>
                           <tbody>
                            <tr>
                                 <td><a href="#">Sport</a></td>
                                 <td>
                                  <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-times"></a>
                                  </span>
                                </td>
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
                        <div class="bouton">
                         <center> <a href="modification_information_centres_d'interets.php"> Enregistrer </a></center>
                        
                        </div>
                    </div>
                    </div>
                </section>
                </div>
            </div>

            </div>
        </section>
    </section>

<?php include('include/right_side_bar.php');
 include('include/js.inc.php'); ?>

</body>
</html>