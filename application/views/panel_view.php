<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<meta name="viewport" content="width=device-witdh, user-scalable=no, initial-scale=1.0, maximun-scale=2.0, minimun-scale=10">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/sopo.css">
	</head>
	
		<body>

			<div class="row">
				<div class="container" style="padding-top: 1em;">
					<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

					    <div class="navbar-header">
					    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex6-collapse">
								<span class="sr-only">Toggle navigation</span>
						    	<span class="icon-bar"></span>
						    	<span class="icon-bar"></span>
						    	<span class="icon-bar"></span>
					    	</button>
					      	<a class="navbar-brand" href="#">SoPo</a>
					    </div>

					    <div class="collapse navbar-collapse navbar-ex6-collapse" >
					    	<ul class="nav navbar-nav">
					    		<li><a href="<?php echo base_url() ?>panel">Inicio </a></li>
								<li class="dropdown">
				                	<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Backup <span class="caret"></span></a>
				                	<ul class="dropdown-menu dropdown-menu-left" role="menu">
					                  	<li><a href="#"></a></li>
					                    	<li><a class="dropdown-toggle" href="#">Anime</a></li>
					                    	<li><a class="dropdown-toggle" href="#">Series</a></li>
					                    	<li><a class="dropdown-toggle" href="#">Peliculas</a></li>
					                    	<li><a class="dropdown-toggle" href="#">Isos</a></li>
					                </ul>
				                </li>

								<li><a href="#">Calendario </a></li>
					        	<li><a href="<?php echo base_url() ?>login/logout"> <span class="glyphicon glyphicon-log-out"></span> Cerrar sesión </a></li>
					    	</ul>

					    </div>
					</nav>	
				</div>	
			</div>

