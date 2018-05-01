<?php 
$title="Nouveau Message";
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
                        <li class="active">Nouveau Message</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
            </div>
    	<div class="row">
                <div class="col-lg-4">
                        <section class="panel">
                                <div class="panel-body">
                                    <a href="nouveau_message.php"  class="btn btn-compose">
                                        Nouveau message
                                    </a>
                                    <ul class="nav nav-pills nav-stacked mail-nav">
                                        <li class="active"><a href="messagerie.php"> <img src="images/charlotte_decary.jpg" style="width: 15%" > Charlotte Decray  <span class="label label-danger pull-right inbox-notification">1</span></a></li>
                                        <li><a href="messagerie.php"> <img src="images/emmanuelle.jpg" style="width: 15%" >  Emmanuelle Thiroloix</a></li>
                                </div>
                        </section>
                </div>
		    	<div class="col-lg-8">
		                <section class="panel">
		                    <header class="panel-heading wht-bg">
		                       <h4 class="gen-case"> Compose Mail
		                           <form action="#" class="pull-right mail-src-position">
		                            <div class="input-append">
		                                <input type="text" class="form-control " placeholder="Search Mail">
		                            </div>
		                        </form>
		                       </h4>
		                    </header>
		                    <div class="panel-body">
		                        <div class="compose-btn pull-right">
		                            <button class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Send</button>
		                            <button class="btn btn-sm"><i class="fa fa-times"></i> Discard</button>
		                            <button class="btn btn-sm">Draft</button>
		                        </div>
		                        <div class="compose-mail">
		                            <form role="form-horizontal" method="post">
		                                <div class="form-group">
		                                    <label for="to" class="">To:</label>
		                                    <input type="text" tabindex="1" id="to" class="form-control">

		                                    <div class="compose-options">
		                                        <a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();" href="javascript:;">Cc</a>
		                                        <a onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();" href="javascript:;">Bcc</a>
		                                    </div>
		                                </div>

		                                <div class="form-group hidden">
		                                    <label for="cc" class="">Cc:</label>
		                                    <input type="text" tabindex="2" id="cc" class="form-control">
		                                </div>

		                                <div class="form-group hidden">
		                                    <label for="bcc" class="">Bcc:</label>
		                                    <input type="text" tabindex="2" id="bcc" class="form-control">
		                                </div>

		                                <div class="form-group">
		                                    <label for="subject" class="">Subject:</label>
		                                    <input type="text" tabindex="1" id="subject" class="form-control">
		                                </div>

		                                <div class="compose-editor">
		                                    <textarea class="wysihtml5 form-control" rows="9"></textarea>
		                                    <input type="file" class="default">
		                                </div>
		                                <div class="compose-btn">
		                                    <button class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Send</button>
		                                    <button class="btn btn-sm"><i class="fa fa-times"></i> Discard</button>
		                                    <button class="btn btn-sm">Draft</button>
		                                </div>

		                            </form>
		                        </div>
		                    </div>
		                </section>
            	</div>
        </div>
	 </section>
    </section>



	<?php include('include/js.inc.php'); ?>

</body>
</html>