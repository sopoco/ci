<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<meta name="viewport" content="width=device-witdh, user-scalable=no, initial-scale=1.0, maximun-scale=2.0, minimun-scale=10">
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/sopo.css">

		<script src="<?php echo base_url(); ?>js/jquery.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>


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

			
			<div class="row" id="tablaSerie">
				<div class="col-xs-4 col-md-6">
					<table class="table table-bordered table-hover table-condensed">
						<tr class="info">
							<td align=center> <font size=3> <b>#</b> </font> </td>
							<td align=center> <font size=3> <b>Nombre</b> </font> </td>
							<td align=center> <font size=3> <b>Temporadas</b> </font> </td>
							<td align=center> <font size=3> <b>Finalizada</b> </font> </td>
							<td align=center> <font size=3> <b>HDD</b> </font> </td>

						</tr>
							<?php $cont=1; ?>
							<?php if (!empty($series)): ?>
	    						<?php foreach ($series as $item): ?>
									<tr>
										<td align=center> <b><?php print_r($cont); ?></b> </td>
										<td> <?php print_r($item['nombre']);?> </td>
										<td align=center> <?php print_r($item['temporadas']);?> </td>
										<td align=center> <?php print_r($item['finalizada']);?> </td>
										<td align=center> <?php ?> </td>
									</tr>
									<?php $cont=$cont+1; ?>
								<?php endforeach ?>
							<?php endif; ?>
					</table>	
				</div>
			</div>



		</body>
	</html>