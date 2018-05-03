<?php

$title="Mes connexions";
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
                        <li><a href="tableau_de_bord.php"><i class="fa fa-home"></i>Tableau de bord</a></li>
                        <li class="active">Liste de mes connexions</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Striped Table
                        </header>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>

                                    <th>Prénom</th>
                                    <th>Nom</th>
                                    <th>Pseudo</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th><a href="profil_info.php" >Mark</a></th>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th><a href="profil_info.php" >Smoothie</a></th>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th><a href="profil_info.php" >Larry</a></th>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        <!-- page end-->
        </section>
    </section>
    
<?php include('include/right_side_bar.php');
 include('include/js.inc.php'); ?>


</body>
</html>