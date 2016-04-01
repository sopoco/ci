			<div class="row" id="addBackup">
				
				<ul class="nav nav-tabs">
	 				<li class="active"><a data-toggle="tab" href="#serie">Serie</a></li>
	  				<li><a data-toggle="tab" href="#anime">Anime</a></li>
	  				<li><a data-toggle="tab" href="#pelicula">Peliculas</a></li>
				</ul>

				<div class="tab-content">
	 				<div id="serie" class="tab-pane fade in active">
	 
	    					<div class="panel-body">
			  					<div class="col-xs-4 col-md-4">
							    	<div class="panel panel-primary" >
			      						<div class="panel-heading">Agregar</div>
			     					 	<div class="panel-body">

			     					 		<?= form_open("panel/insertSerie");?>

			     					 		<?
			     					 			$nombre = array(
			     					 				'name' => 'nombreAdd',
			     					 				'placeholder' => 'Ingrese Nombre',
			     					 				'style' => 'width:100%',
			     					 				'class' => 'form-control'
			     					 				);

			     					 			$temp = array(
			     					 				'name' => 'temporadaAdd',
			     					 				'placeholder' => 'Ingrese el Nº de Temp',
			     					 				'style' => 'width:100%',
			     					 				'class' => 'form-control'
			     					 				);

			     					 			$finalizada = array(
			     					 				'name' => 'finalizadaADD',
			     					 				'value' => '1'
			     					 				);

			     					 			$addBoton = array(
			     					 				'name' => 'insertSerie',
			     					 				'value' => 'Agregar',
			     					 				'class' => 'btn btn-primary pull-right'
			     					 				);

			     					 		 ?>

			     					 		 <div class="form-group">
				     					 		<?= form_label('Nombre: ', 'lblname'); ?>
				     					 		<?= form_input($nombre); ?>
				     					 	</div>				   	 	

				     					 	<div class="form-group">
			     					 			<?= form_label('Nº de Temporadas: ', 'lblseason'); ?>
			     					 			<?= form_input($temp); ?>
			     					 		</div>			     					 	

			     					 		<div class="form-group">
			     					 			<?= form_label('Finalizada: ', 'lblfinish'); ?>
			     					 			<?= form_checkbox($finalizada, FALSE); ?>
			     					 		</div>


			     					 	</br> </br> </br>
			     					 		<div class="form-group">
			     					 			<?= form_submit($addBoton); ?>
			     					 		</div>

			     					 		<?=form_close(); ?>

			     					 	</div>
			     					</div>
			  					</div>

			   					