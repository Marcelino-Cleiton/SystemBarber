<!DOCTYPE html>
<html lang-"pt-br">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content ="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="description" content="System Barber , Agenda Online para Barbearias">
	<meta name="author" content="Cleiton Marcelino">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="<?php echo base_url('application/assets/imagens/favicon.ico') ?>" type="image/x-icon"/>

	<link href="<?php echo base_url('application/assets/template/metro/assets/jquery-ui/jquery-ui-1.10.2.custom.min.js')?>" rel="stylesheet" id="style_color">
	<!--Start gray theme initialized-->
	<link href="<?php echo base_url('application/assets/template/metro/css/style-purple.css')?>" rel="stylesheet" id="style_color"/>
	<!--End gray theme initialized-->
	<link href="<?php echo base_url('application/assets/template/metro/assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('application/assets/template/metro/assets/bootstrap/css/bootstrap-responsive.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('application/assets/template/metro/assets/bootstrap/css/bootstrap-fileupload.css')?>"rel="stylesheet">
    <link href="<?php echo base_url('application/assets/template/metro/assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('application/assets/template/metro/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('application/assets/template/metro/css/style-responsive.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('application/assets/template/metro/css/style-default.css')?>" rel="stylesheet" id="style_color">
    <link href="<?php echo base_url('application/assets/template/metro/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('application/assets/template/metro/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')?>" rel="stylesheet" type="text/css">
    <!--Start gray theme initialized-->
	<link href="<?php echo base_url('application/assets/template/metro/css/style-gray.css')?>" rel="stylesheet" id="style_color">
	<!--End gray theme initialized--> 
	<script src="<?php echo base_url('application/assets/template/metro/js/jquery-1.8.3.min.js')?>" type="text/javascript"></script>



</head>
<body class="fixed-top">	
	<div id="header" class="navbar navbar-inverse navbar-fixed-top">

		<div class="navbar-inner">
				

			<div class="container-fluid">
				<header>
						<div class="sidebar-toggle-box hidden-phone">
                   				<div class="icon-reorder tooltips" data-placement="right" data-original-title="Menu"></div>
               			</div>
               			<a class="brand" href="<?php echo base_url('controllers/home')?>"><h4>System Barber</h4></a>
						
					<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   	<span class="icon-bar"></span>
                   	<span class="icon-bar"></span>
                   	<span class="icon-bar"></span>
                   	<span class="arrow"></span>
               		</a>
        				<nav>
						<div class="top-nav ">
							
            			<ul class="nav pull-right top-menu" >
							<li class="dropdown mtop5"><a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip"  href="<?php echo base_url('controllers/home')?>" data-original-title="Home">Home</a></li> 
							<li class="dropdown mtop5"><a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="<?php echo base_url('controllers/contato')?>" data-original-title="Contato">Contato</a></li>
							<li class="dropdown mtop5"><a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="<?php echo base_url('controllers/login')?>" data-original-title="Login">Login</a> </li>
						
						</ul>
						</div>
						</nav>
					
				</header>
			</div>
		</div>
	</div>

	