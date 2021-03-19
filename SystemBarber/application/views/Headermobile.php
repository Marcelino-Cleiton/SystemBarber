<!DOCTYPE html>
<html lang-"pt-br">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content ="IE=edge">
	<meta name="viewport" content="width=device-width, initial-sc ale=1">
	<meta name="description" content="System Barber , Agenda Online para Barbearias">
	<meta name="author" content="Cleiton Marcelino">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="<?php echo base_url('application/assets/imagens/favicon.ico') ?>" type="image/x-icon"/>
    <link href="<?php echo base_url('application/assets/css/jquery.mobile.theme-1.4.5.min.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('application/assets/css/jquery.mobile.external-png-1.4.5.min.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('application/assets/css/jquery.mobile.icons-1.4.5.min.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('application/assets/css/jquery.mobile.inline-png-1.4.5.min.css')?>" rel="stylesheet" type="text/css">

</head>
<body>
	<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<header>
				<div>
					<h1 class="container-fluid">System Barber</h1>
				</div>
				<div >
					<nav>
						<ul class="menuHorizontal">
						<li><a href="<?php echo base_url('controllers/home')?>">Home</a> 
						<li><a href="<?php echo base_url('controllers/contato')?>">Contato</a> 
						<li><a href="<?php echo base_url('controllers/login')?>">Login</a> 
						
						</ul>
					</nav>

				</div>
			</header>
		</div>	
	</div>	
