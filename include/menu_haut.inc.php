<section id="container" >
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

      <a href="tableau_de_bord.php" class="logo">
      <img src="images/logo.png" alt="">
    </a>

    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">2</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">Vous avez 4 nouveaux messages</p>
                </li>
                <li>
                    <a href="messagerie.php">
                        <span class="photo"><img alt="avatar" src="images/charlotte_decary.jpg"></span>
                                <span class="subject">
                                <span class="from">Charlotte Decary</span>
                                <span class="time">Maintenant</span>
                                </span>
                                <span class="message">
                                    Coucou je suis Charlotte!
                                </span>
                    </a>
                </li>
                
                <li>
                    <a href="messagerie.php">
                        <span class="photo"><img alt="avatar" src="images/mika.jpg"></span>
                                <span class="subject">
                                <span class="from">Mika</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Holà, on en est où dans le PSTE?
                                </span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">2</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-exclamation"></i></span>
                        <div class="noti-info">
                            <a href="#"> Charlotte a publier un post!</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-user"></i></span>
                        <div class="noti-info">
                            <a href="#"> Vous avez une demande de contact</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
        <li id="header_user_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-user"></i>
                <span class="badge bg-success">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Ajout de relation</p>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="photo"><img alt="avatar" src="images/léa_blanchard.jpg"></span>
                        <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-check" ></a>
                                <a href="javascript:;" class="fa fa-times" ></a>
                        </span>
                        <div class="noti-info">
                            <p> Léa Blanchard</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="photo"><img alt="avatar" src="images/smoothie.jpg"></span>
                        <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-check" ></a>
                                <a href="javascript:;" class="fa fa-times" ></a>
                        </span>
                        <div class="noti-info">
                            <p> Smoothie Leloroux</p>
                        </div>
                        
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="photo"><img alt="avatar" src="images/marine.jpg"></span>
                        <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-check" ></a>
                                <a href="javascript:;" class="fa fa-times" ></a>
                        </span>
                        <div class="noti-info">
                            <p> Marine Thiroloix</p>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search"  placeholder=" Rechercher">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="modification_information.php">
                <img alt="" src="images/antoine_lame.jpg">
                <span class="username">Antoine Lamé</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="modification_information.php"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="tableau_de_bord.php"><i class="fa fa-cog"></i> Tableau de bord</a></li>
                <li><a href="connexion.php"><i class="fa fa-key"></i> Déconnecter</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->

