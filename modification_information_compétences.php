<?php 
$title="Modification Information competences";
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
                        <li><a href="modification_information.php"></i> Information personnelles</a></li>
                        <li class="active">Modification Compétences</li>
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
                    <header class="panel-heading">
                        Compétences
                    </header>
                    <div class="panel-body">
                        <table class="table  table-hover general-table">
                            <thead>
                            <tr>
                                <th> Nom</th>
                                <th>Niveau</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            
                                <td><a >C</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">230% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                </td>

                            </tr>
                            <tr>
                                <tr>
                                <td><a >Pack Office</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">10% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><a>C++</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">12% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td><a >Java</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">80% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td><a >HTML/CSS</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">60% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td><a >Espagnol</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td><a >Anglais</a></td>
                                <td>
                                    <div class="progress progress-striped progress-xs">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">90% Complete (success)</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                
                           
                            </tbody>
                        </table>

                    <div class="bouton">
                         <center> <a href="page_modif_compétences.php"> Modifier </a></center>
                        
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