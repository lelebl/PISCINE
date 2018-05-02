<?php
$title="Tableau de bord";
include("include/header.inc.php"); 
include("include/menu_haut.inc.php"); 
include("include/menu_gauche.inc.php"); 


?>

<body>

<section id="main-content">
	<section class="wrapper">
        <!--entete-->
		<div class="row">
                <div class="col-md-12">
                    <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="tableau_de_bord.php"><i class="fa fa-home"></i> Tableau de bord </a></li>
                       
                    </ul>
                    <!--breadcrumbs end -->
                </div>
        </div>
        <!--fin entete-->


        <div class="row"> 
          <!--carroussel-->
            <div class="col-lg-12"> 
                    <section class="panel">
                         <div id="c-slide" class="carousel slide auto panel-body">
                        <ol class="carousel-indicators out">
                            <li class="" data-slide-to="0" data-target="#c-slide"></li>
                            <li class="" data-slide-to="1" data-target="#c-slide"></li>
                            <li class="active" data-slide-to="2" data-target="#c-slide"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item text-center">
                                <h3>Bucket Admin is an Awesome Dashboard</h3><br>
                                <p>Awesome admin template</p>
                                <small class="text-muted">Based on Latest Bootstrap 3.0.3</small>
                            </div>
                            <div class="item text-center">
                                <h3>Well Organized</h3><br>
                                <p>Awesome admin template</p>
                                <small class="text-muted">Huge UI Elements</small>
                            </div>
                            <div class="item text-center active">
                                <h3>Well Documentation</h3><br>
                                <p>Awesome admin template</p>
                                <small class="text-muted">Very Easy to Use</small>
                            </div>
                        </div>
                        <a data-slide="prev" href="#c-slide" class="left carousel-control">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a data-slide="next" href="#c-slide" class="right carousel-control">
                            <i class="fa fa-angle-right"></i>
                        </a>
                         </div>
                    </section>
            </div>
        </div>

        <!--demande d'amis / partage / offres d'emplois --> 
        <div class="row">

		    <!--demandes d'amis-->
			<div class="col-lg-3"> 
				<div class="panel panel-default">
               
				<div class="panel-heading"><span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-bookmark" ></a>
                            <a class="fa fa-times" href="javascript:;"></a>
                 </span>Demande d'amis en cours
				 
                 </div>

                 <div class="panel-body">
            

                 	<div class="mini-stat clearfix">
                        <span class="mini-stat-icon green"><i class="fa fa-female"></i></span>
                        <div class="mini-stat-info">
                            NOM Prénom de la personne 1 <br>
                            <p> Job </p><br>
                            <center><button class="btn btn-primary"> Accepter </button>   <button class="btn btn-default"> Refuser </button></center>
                      
                        </div>
                    </div>


                 	<div class="mini-stat clearfix">
                        <span class="mini-stat-icon green"><i class="fa fa-female"></i></span>
                        <div class="mini-stat-info">
                            NOM Prénom de la personne 2 <br>
                            <p> Job </p><br>
                            <center><button class="btn btn-primary"> Accepter </button>   <button class="btn btn-default"> Refuser </button></center>
                      
                        </div>
                    </div>
                 </div>
             </div>
			</div>
            <!--partage-->
            <div class="col-lg-6"> 
                <div class="panel panel-default">
               
                <div class="panel-heading">

                    Partager une photo, une vidéo, un article
                 
                 </div>

                 <div class="panel-body">
                    <div class="boutontab">

                    <a href="#Photo" type="button" data-toggle="modal"><i class="fa fa-camera"></i></a>
                    <a href="#Video" type="button" data-toggle="modal"><i class="fa fa-film"></i></a>
                    <a href="#Lien" type="button" data-toggle="modal"><i class="fa fa-paperclip"></i></a>
                    </div>
                    <br> <textarea class="form-control" rows="9" placeholder="Exprimez-vous..." ></textarea><br>
                    <div class="boutontab">
                    <center><a href="#"><i class="fa fa-smile-o"></i></a>
                            <a href="#"><i class="fa fa-thumbs-up"></i></a>
                            <a href="#"><i class="fa fa-heart-o"></i></a>
                            <a href="#"><i class="fa fa-thumbs-down"></i></a>
                            <a href="#"><i class="fa fa-frown-o"></i></a></center>

                    </div>
                     <div class="bouton"><br><br><br>

                    <center><a href="tableau_de_bord.php">POSTER</a></center><br><br>
                    </div>

                 </div>
             </div>
            </div>
            <!--offre-->
            <div class="col-lg-3"> 
                <div class="panel panel-default">
               
                <div class="panel-heading">
                    <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-bookmark" ></a>
                            <a class="fa fa-times" href="javascript:;"></a>
                 </span> Offre susceptible <br>de vous interesser
                 
                 </div>

                 <div class="panel-body">
                    
                        <div class="bouton">
                    <p> Descripion de l'offre <br><br><br></p>
                    <center><a href="jepostule.php">POSTULER</a></center><br><br>
                    </div>


                 </div>
             </div>
            </div> 
            <!--offre-->
            <div class="col-lg-3"> 
                <div class="panel panel-default">
               
                <div class="panel-heading">
                    <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-bookmark" ></a>
                            <a class="fa fa-times" href="javascript:;"></a>
                 </span> Offre susceptible <br>de vous interesser
                 
                 </div>

                 <div class="panel-body">
                    
                        <div class="bouton">
                    <p> Descripion de l'offre <br><br><br></p>
                    <center><a href="jepostule.php">POSTULER</a></center><br><br>
                    </div>


                 </div>
             </div>
            </div>
        </div>

        <!--heure et fil d'actualité  -->
        <div class="row">


            <!--heure-->
            <div class="col-lg-4">
                <div class="profile-nav alt">
                    <section class="panel">
                        <div class="panel-heading">
                            <h1> MARDI 3 MAI 2018</h1>
                            <p class="text-left">03/05/2018</p>
                            <p class="text-left">heure</p>
                        </div>
                        <ul id="clock">
                          <center><br>
                          <iframe src="http://free.timeanddate.com/clock/i67zh98s/n195/szw110/szh110/hbw0/hfc399/cf100/hgr0/fav0/fiv0/mqcfff/mql15/mqw4/mqd80/mhcfff/mhl15/mhw4/mhd94/mmv0/hhcbbb/hmcddd/hsceee" frameborder="0" width="110" height="110"></iframe>
                           <br><br>
                <br>
                <br>
                <br>
                <br>

                       </center> 
                        </ul>
                    </section>
                </div>
            </div>
            <!--heure-->

            <!--fil d'actualité-->
            <div class="col-lg-8">
                <section class="panel">
                <header class="panel-heading">
                    VOTRE FIL D'ACTUALITE  <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                    </span>
                </header>
                <div class="panel-body">
                    
                    <div class="alert alert-danger">
                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender"><span><a href="#">Léa Blanchard</a><br></span> POST </li>
                                <li class="pull-right notification-time">Il y a 7 heures</li>
                            </ul>
                        
                        </div>
                    </div>
                    <div class="alert alert-success ">
                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                    <li class="pull-left notification-sender"><span><a href="#">Charlotte Decary</a><br></span> POST </li>
                                <li class="pull-right notification-time">Il y a 7 heures</li>
                            </ul>
                            <p>
                                <a href="#">Anjelina Mewlo, Jack Flip</a> et <a href="#">3 autres aiment ça </a>
                            </p>
                        </div>
                    </div>
                    <div class="alert alert-warning ">
                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender">Emmanuelle Thiroloix</li>
                                <li class="pull-right notification-time">5 Days Ago</li>
                            </ul>
                            <p>
                                Next 5 July Thursday is the last day
                            </p>
                        </div>
                    </div>           
                 <div class="alert alert-danger">
                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> <br> POST <br></li>
                                <li class="pull-right notification-time">7 Hours Ago</li>
                            </ul>
                     
                        </div>
                    </div>
                    <div class="alert alert-danger">
                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender"><span><a href="#">Léa Blanchard</a><br></span> POST </li>
                                <li class="pull-right notification-time">Il y a 7 heures</li>
                            </ul>
                        
                        </div>
                    </div>
                    <div class="alert alert-success ">
                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                    <li class="pull-left notification-sender"><span><a href="#">Charlotte Decary</a><br></span> POST </li>
                                <li class="pull-right notification-time">Il y a 7 heures</li>
                            </ul>
                            <p>
                                <a href="#">Anjelina Mewlo, Jack Flip</a> et <a href="#">3 autres aiment ça </a>
                            </p>
                        </div>
                    </div>
                    <div class="alert alert-warning ">
                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender">Emmanuelle Thiroloix</li>
                                <li class="pull-right notification-time">5 Days Ago</li>
                            </ul>
                            <p>
                                Next 5 July Thursday is the last day
                            </p>
                        </div>
                    </div>           
                 <div class="alert alert-danger">
                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> <br> POST <br></li>
                                <li class="pull-right notification-time">7 Hours Ago</li>
                            </ul>
                     
                        </div>
                    </div>
                    <div class="alert alert-danger">
                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender"><span><a href="#">Léa Blanchard</a><br></span> POST </li>
                                <li class="pull-right notification-time">Il y a 7 heures</li>
                            </ul>
                        
                        </div>
                    </div>
                    <div class="alert alert-success ">
                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                    <li class="pull-left notification-sender"><span><a href="#">Charlotte Decary</a><br></span> POST </li>
                                <li class="pull-right notification-time">Il y a 7 heures</li>
                            </ul>
                            <p>
                                <a href="#">Anjelina Mewlo, Jack Flip</a> et <a href="#">3 autres aiment ça </a>
                            </p>
                        </div>
                    </div>
                    <div class="alert alert-warning ">
                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender">Emmanuelle Thiroloix</li>
                                <li class="pull-right notification-time">5 Days Ago</li>
                            </ul>
                            <p>
                                Next 5 July Thursday is the last day
                            </p>
                        </div>
                    </div>           
                 <div class="alert alert-danger">
                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> <br> POST <br></li>
                                <li class="pull-right notification-time">7 Hours Ago</li>
                            </ul>
                     
                        </div>
                    </div>
                    <div class="alert alert-danger">
                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender"><span><a href="#">Léa Blanchard</a><br></span> POST </li>
                                <li class="pull-right notification-time">Il y a 7 heures</li>
                            </ul>
                        
                        </div>
                    </div>
                    <div class="alert alert-success ">
                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                    <li class="pull-left notification-sender"><span><a href="#">Charlotte Decary</a><br></span> POST </li>
                                <li class="pull-right notification-time">Il y a 7 heures</li>
                            </ul>
                            <p>
                                <a href="#">Anjelina Mewlo, Jack Flip</a> et <a href="#">3 autres aiment ça </a>
                            </p>
                        </div>
                    </div>
                    <div class="alert alert-warning ">
                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender">Emmanuelle Thiroloix</li>
                                <li class="pull-right notification-time">5 Days Ago</li>
                            </ul>
                            <p>
                                Next 5 July Thursday is the last day
                            </p>
                        </div>
                    </div>           
                 <div class="alert alert-danger">
                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> <br> POST <br></li>
                                <li class="pull-right notification-time">7 Hours Ago</li>
                            </ul>
                     
                        </div>
                    </div>
                    <div class="alert alert-danger">
                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender"><span><a href="#">Léa Blanchard</a><br></span> POST </li>
                                <li class="pull-right notification-time">Il y a 7 heures</li>
                            </ul>
                        
                        </div>
                    </div>
                    <div class="alert alert-success ">
                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                    <li class="pull-left notification-sender"><span><a href="#">Charlotte Decary</a><br></span> POST </li>
                                <li class="pull-right notification-time">Il y a 7 heures</li>
                            </ul>
                            <p>
                                <a href="#">Anjelina Mewlo, Jack Flip</a> et <a href="#">3 autres aiment ça </a>
                            </p>
                        </div>
                    </div>
                    <div class="alert alert-warning ">
                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender">Emmanuelle Thiroloix</li>
                                <li class="pull-right notification-time">5 Days Ago</li>
                            </ul>
                            <p>
                                Next 5 July Thursday is the last day
                            </p>
                        </div>
                    </div>           
                 <div class="alert alert-danger">
                        <span class="alert-icon"><i class="fa fa-align-justify"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> <br> POST <br></li>
                                <li class="pull-right notification-time">7 Hours Ago</li>
                            </ul>
                     
                        </div>
                    </div>
                </section>
            </div>
            <!--fil d'actualité -->

        </div>



        <!--fenetre photo-->
        <div class="modal fade" id="Photo" tabindex="-1" role="dialog" aria-labelledby="Photo" aria-hidden="true"> 
            <div class="modal-dialog modal-md">
                <div class="modal-content"> 
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title text-center">Partager une photo</h4>
                </div>

                <div class="modal-body text-center">
                    <h4 class="m-t-0">Edition</h4>
                    <form>
                        
                        <div class="form-group">
                            <label class="sr-only">Veuillez entrer votre texte ici</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-pencil-square-o"></span></div>
                                <textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Texte"></textarea>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="sr-only">Photo</label>
                            <div class="input-group">
                               <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
                               <center><h5><input type="file" name="upl" multiple=""></h5>
                                   <ul>
                                <!-- The file uploads will be shown here -->
                              </ul></center>  
                        </form>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="sr-only">Date de publication</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-calendar"></span></div>
                                <input type="date" class="form-control" placeholder="jj/mm/aaaa">
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
                            <label class="sr-only">Emotion</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-smile-o"></span></div>
                                <select class="form-control custom-select">
                                    <option selected="">Humeur</option>
                                    <option>Content(e)</option>
                                    <option>Fier(e)</option>
                                    <option>Enervé(e)</option>
                                    <option>Fatigué(e)</option>
                                    <option>Motivé(e)</option>
                                     <option>Déçu(e)</option>
                                </select>
                            </div>
                        </div>
                    <div class="bouton">
                        <br><a href="tableau_de_bord.php">POSTER</a><br><br><br>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
        <!--fenetre video-->
        <div class="modal fade" id="Video" tabindex="-1" role="dialog" aria-labelledby="Video" aria-hidden="true"> 
            <div class="modal-dialog modal-md">
                <div class="modal-content"> 
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title text-center">Partager une vidéo</h4>
                </div>

                <div class="modal-body text-center">
                    <h4 class="m-t-0">Edition</h4>
                    <form>
                        
                        <div class="form-group">
                            <label class="sr-only"></label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-pencil-square-o"></span></div>
                                <textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Veuillez entrer votre texte ici"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="sr-only">Video</label>
                            <div class="input-group">
                               <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
                               <center><h5><input type="file" name="upl" multiple=""></h5>
                                   <ul>
                                <!-- The file uploads will be shown here -->
                              </ul></center>  
                        </form>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="sr-only">Date de publication</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-calendar"></span></div>
                                <input type="date" class="form-control" placeholder="jj/mm/aaaa">
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
                            <label class="sr-only">Emotion</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-smile-o"></span></div>
                                <select class="form-control custom-select">
                                    <option selected="">Humeur</option>
                                    <option>Content(e)</option>
                                    <option>Fier(e)</option>
                                    <option>Enervé(e)</option>
                                    <option>Fatigué(e)</option>
                                    <option>Motivé(e)</option>
                                     <option>Déçu(e)</option>
                                </select>
                            </div>
                        </div>
                    <div class="bouton">
                        <br><a href="tableau_de_bord.php">POSTER</a><br><br><br>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
        <!--fenetre lien-->
        <div class="modal fade" id="Lien" tabindex="-1" role="dialog" aria-labelledby="Lien" aria-hidden="true"> 
            <div class="modal-dialog modal-md">
                <div class="modal-content"> 
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title text-center">Partager un lien </h4>
                </div>

                <div class="modal-body text-center">
                    <h4 class="m-t-0">Edition</h4>
                    <form>
                        
                        <div class="form-group">
                            <label class="sr-only"></label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-pencil-square-o"></span></div>
                                <textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Veuillez entrer votre texte ici"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="sr-only">Lien</label>
                            <p>Copier le lien URL : </p>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-code"></span> </div>
                                
                               <input class="form-control" type="url" name="lien">
                           </div>
                       </div>
                    
                        
                        <div class="form-group">
                            <label class="sr-only">Date de publication</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-calendar"></span></div>
                                <input type="date" class="form-control" placeholder="jj/mm/aaaa">
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
                            <label class="sr-only">Emotion</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-smile-o"></span></div>
                                <select class="form-control custom-select">
                                    <option selected="">Humeur</option>
                                    <option>Fier(e)</option>
                                    <option>Content(e)</option>
                                    <option>Enervé(e)</option>
                                    <option>Fatigué(e)</option>
                                    <option>Motivé(e)</option>
                                     <option>Déçu(e)</option>
                                </select>
                            </div>
                        </div>
                    <div class="bouton">
                       <center>< <br><a href="tableau_de_bord.php">POSTER</a><br><br><br></center>
                        </div>
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

