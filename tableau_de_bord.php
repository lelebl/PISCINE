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

                    <a href="#"><i class="fa fa-camera"></i></a>
                    <a href="#"><i class="fa fa-film"></i></a>
                    <a href="#"><i class="fa fa-paperclip"></i></a>
                    </div>
                    <br> <textarea class="wysihtml5 form-control" rows="9"></textarea><br>
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

        <div class="row">
            <!--heure-->
            <div class="col-lg-6">
                <section class="panel">
                <header class="panel-heading">
                    Notification <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-cog"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                    </span>
                </header>
                <div class="panel-body">
                    
                    <div class="alert alert-danger">
                        <span class="alert-icon"><i class="fa fa-facebook"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> mentioned you in a post </li>
                                <li class="pull-right notification-time">7 Hours Ago</li>
                            </ul>
                            <p>
                                Very cool photo jack
                            </p>
                        </div>
                    </div>
                    <div class="alert alert-success ">
                        <span class="alert-icon"><i class="fa fa-comments-o"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender">You have 5 message unread</li>
                                <li class="pull-right notification-time">1 min ago</li>
                            </ul>
                            <p>
                                <a href="#">Anjelina Mewlo, Jack Flip</a> and <a href="#">3 others</a>
                            </p>
                        </div>
                    </div>
                    <div class="alert alert-warning ">
                        <span class="alert-icon"><i class="fa fa-bell-o"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender">Domain Renew Deadline 7 days ahead</li>
                                <li class="pull-right notification-time">5 Days Ago</li>
                            </ul>
                            <p>
                                Next 5 July Thursday is the last day
                            </p>
                        </div>
                    </div>
                </div>
                </section>
            </div>
            <!--heure-->

            <!--notifications-->
            <div class="col-lg-6">
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
                           <br>
                       </center> 
                        </ul>

                        <ul class="clock-category">
                            <li>
                                <a href="#" class="active">
                                    <i class="ico-clock2"></i>
                                    <span>Clock</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ico-alarm2 "></i>
                                    <span>Alarm</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ico-stopwatch"></i>
                                    <span>Stop watch</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class=" ico-clock2 "></i>
                                    <span>Timer</span>
                                </a>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
            <!--notifications-->
        </div>

        <div class="row">
            <!--mini statistics start-->
                <div class="col-lg-3">
                    <div class="mini-stat clearfix">
                        <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
                        <div class="mini-stat-info">
                            <span>320</span>
                            New Order Received
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="mini-stat clearfix">
                        <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
                        <div class="mini-stat-info">
                            <span>22,450</span>
                            Copy Sold Today
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="mini-stat clearfix">
                        <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
                        <div class="mini-stat-info">
                            <span>34,320</span>
                            Dollar Profit Today
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="mini-stat clearfix">
                        <span class="mini-stat-icon green"><i class="fa fa-eye"></i></span>
                        <div class="mini-stat-info">
                            <span>32720</span>
                            Unique Visitors
                        </div>
                    </div>
                </div>
            <!--mini statistics end-->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                     <div class="panel-heading"> Votre fil d'actualités </div>
                          <div class="panel-body">
                             <div class="timeline">
                                    <article class="timeline-item alt">
                                        <div class="text-right">
                                            <div class="time-show first">
                                                <a href="#" class="btn btn-primary">Today</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item alt">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <span class="arrow-alt"></span>

                                                    <span class="timeline-icon red">
                                                         <i class="fa fa-check"></i>
                                                    </span>
                                                    <span class="timeline-date">08:25 am</span>
                                                    <h1 class="red">1 hour ago</h1>
                                                    <p>Purchased new stationary items for head office </p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item ">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon green">
                                                        <i class="fa fa-beer"></i>
                                                    </span>
                                                    <span class="timeline-date">10:00 am</span>
                                                    <h1 class="green">2 hours ago</h1>
                                                    <p>Completed Coffee meeting with <a href="#">Stive Martin</a> regarding the Product Promotion</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item alt">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <span class="arrow-alt"></span>
                                                    <span class="timeline-icon blue">
                                                        <i class="fa fa-tags"></i>
                                                    </span>
                                                    <span class="timeline-date">11:35 am</span>
                                                    <h1 class="blue">10 hours ago</h1>
                                                    <p>3 new photo Uploaded on facebook fan page</p>
                                                        <div class="album">
                                                            <a href="#">
                                                                <img alt="" src="images/sm-img-1.jpg">
                                                            </a>
                                                            <a href="#">
                                                                <img alt="" src="images/sm-img-2.jpg">
                                                            </a>
                                                            <a href="#">
                                                                <img alt="" src="images/sm-img-3.jpg">
                                                            </a>
                                                            <a href="#">
                                                                <img alt="" src="images/sm-img-1.jpg">
                                                            </a>
                                                            <a href="#">
                                                                <img alt="" src="images/sm-img-2.jpg">
                                                            </a>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon purple">
                                                        <i class="fa fa-map-marker"></i>
                                                    </span>
                                                    <span class="timeline-date">3:20 pm</span>
                                                    <h1 class="purple">4:30</h1>
                                                    <p>Outdoor visit at California State Route 85 with John Boltana & Harry Piterson regarding to setup a new show room.</p>
                                                    <p>
                                                        <i class=" fa fa-exclamation-sign"></i> New task added for <span><a href="#" class="purple">Denial Collins</a></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item alt">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <span class="arrow-alt"></span>

                                                    <span class="timeline-icon light-green">
                                                        <i class="fa fa-user-md"></i>
                                                    </span>
                                                    <span class="timeline-date">07:49 pm</span>
                                                    <h1 class="light-green">10 June | Friday</h1>
                                                    <p>Jonatha Smith</a> added new milestone <span><a href="#" class="light-green">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item alt">
                                        <div class="text-right">
                                            <div class="time-show">
                                                <a href="#" class="btn btn-default">Yesterday</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon yellow">
                                                        <i class="fa fa-comments-o"></i>
                                                    </span>
                                                    <span class="timeline-date">3:20 pm</span>
                                                    <h1 class="yellow">4:30</h1>
                                                    <p>Montly Regular Medical check up at Greenland Hospital by the doctor <span><a href="#" class="yellow">  Berry Moor </a></span> </p>

                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item alt">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <span class="arrow-alt"></span>

                                                    <span class="timeline-icon ">
                                                        <i class="fa fa-download"></i>
                                                    </span>
                                                    <span class="timeline-date">07:49 pm</span>
                                                    <h1 class="">4:55</h1>
                                                    <p>Download the new updates of SAP ERP Solution</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <span class="arrow"></span>

                                                    <span class="timeline-icon blue">
                                                        <i class="fa fa-user-md"></i>
                                                    </span>
                                                    <span class="timeline-date">07:49 pm</span>
                                                    <h1 class="blue">10 June | Friday</h1>
                                                    <p>Jonatha Smith added new milestone <span><a class="blue" href="#">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item alt">
                                        <div class="text-right">
                                            <div class="time-show">
                                                <a href="#" class="btn btn-default">20 December 2013</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item alt">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <span class="arrow-alt"></span>

                                                    <span class="timeline-icon ">
                                                        <i class="fa fa-download"></i>
                                                    </span>
                                                    <span class="timeline-date">07:49 pm</span>
                                                    <h1 class="">13 March | Sunday</h1>
                                                    <p>Download the new updates of SAP ERP Solution</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <span class="arrow"></span>

                                                    <span class="timeline-icon red">
                                                        <i class="fa fa-user-md"></i>
                                                    </span>
                                                    <span class="timeline-date">07:49 pm</span>
                                                    <h1 class="red">5:33</h1>
                                                    <p>Jonatha Smith added new milestone <span><a class="red" href="#">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                             </div>
                          </div>
                        </div>
                    </div>
                </div>

	</section>
</section>
	
  <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->

<?php include('include/right_side_bar.php');
 include('include/js.inc.php'); ?>
</body>

