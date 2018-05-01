<?php 
$title="Nouveau Message";
include("include/header.inc.php"); 
include("include/menu_haut.inc.php");
include("include/menu_gauche.inc.php");
?>

<body>


<section id="main-content">
        <section class="wrapper">
        <!-- page start-->
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
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>Larry</td>
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

	<?php include('include/js.inc.php'); ?>


</body>
</html>