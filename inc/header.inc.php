<!DOCTYPE html>
<html>
	
  <head>
  		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
  		<meta name="author" content="kohai.net" />
  		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
  
  		<title>// OTTO </title>
      <!-- Bootstrap -->
      <link href="bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
      <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
      <link href="css/bootflat.css" rel="stylesheet" media="screen">
      <link href="css/bootflat-extensions.css" rel="stylesheet" media="screen">


      <link href="css/style.css" rel="stylesheet" media="screen">
      <link href="css/jquery.mmenu.all.css" rel="stylesheet" media="screen">
      <link type="text/css" rel="stylesheet" href="css/extensions/jquery.mmenu.widescreen.css" media="(min-width: 960px)" />

      
      <link rel="shortcut icon" href="images/favicon.ico">

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
  		<script src="js/jquery.icheck.js"></script>

      <script src="js/jquery.bootstrap-growl.min.js"></script>

      
      <script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>
   		<script type="text/javascript">
  			$(function() {
  
  				var pos 	= 'mm-top mm-right mm-bottom',
  					zpos	= 'mm-front mm-next';
  
  				var $html 	= $('html'),
  					$menu	= $('nav#menu'),
  					$both	= $html.add( $menu );
  
  				$menu.mmenu();
  
            $('input').iCheck({
              checkboxClass: 'icheckbox_flat',
              radioClass: 'iradio_flat',
              increaseArea: '20%'
          })

        });
  		</script>   


      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
  <body>

        <!-- Menu / Nav =============================-->      
			<nav id="menu">
				<ul>
					<li ><h1><i class="logo fa fa-power-off"></i></h1></li>
					<li class="Selected"><a href="index.php"><h3><i class="fa fa-bar-chart-o"></i> Dashboard </h3></a></li>
					<li><a href="clients.php"><h3><i class="fa fa-user"></i> Clients </h3></a></li>
					<li><a href="factures.php"><h3><i class="fa fa-credit-card"></i> Factures </h3></a></li>
					<li><a href="config.php"><h3><i class="fa fa-cog"></i> Config </h3></a></li>
				</ul>
			</nav>
		</div>


			<div id="header">
				<a id="mm-toggle" href="#menu"></a>
				  <i class="fa fa-power-off"></i>
          
        <!-- Small button group -->
        <div class="btn-admin btn-group pull-right">
          <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
            Admin <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            Se deconnecter
          </ul>
        </div>
                  
			</div>