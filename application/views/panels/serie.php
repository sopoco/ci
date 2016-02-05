			<div class="row" id="addBackup">

				<div class="panel-group">
					<div class="panel panel-default">
				    	<div class="panel-heading">
				      		<h4 class="panel-title">
				        		<a data-toggle="collapse" href="#collapse1">Series</a>
				      		</h4>
				    	</div>

					    <div id="collapse1" class="panel-collapse collapse">
					    	<div class="panel-body">
			  					<div class="col-xs-3 col-md-3">
							    	<div class="panel panel-primary">
			      						<div class="panel-heading">Agregar</div>
			     					 	<div class="panel-body">


			     					 		<?= form_open("panel/insertSerie");?>

			     					 		<?
			     					 			$nombre = array(
			     					 				'name' => 'nombre',
			     					 				'placeholder' => 'Ingrese Nombre',
			     					 				'style' => 'width:100%',
			     					 				'class' => 'form-control'
			     					 				);

			     					 			$temp = array(
			     					 				'name' => 'temporada',
			     					 				'placeholder' => 'Ingrese el Nº de Temp',
			     					 				'style' => 'width:100%',
			     					 				'class' => 'form-control'
			     					 				);

			     					 			$finalizada = array(
			     					 				'name' => 'finalizada',
			     					 				'value' => '1'
			     					 				);

			     					 			$addBoton = array(
			     					 				'name' => 'insertSerie',
			     					 				'value' => 'Agregar',
			     					 				'class' => 'btn btn-primary'
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

			     					 		<div class="form-group">
			     					 			<?= form_submit($addBoton); ?>
			     					 		</div>

			     					 		<?=form_close(); ?>

			     					 	</div>
			     					</div>
			  					</div>

			   					<div class="col-xs-3 col-md-3">
							    	<div class="panel panel-primary">
			      						<div class="panel-heading">Editar</div>
			     						 <div class="panel-body">
			     						 	<?= form_open("panel/updateSerie");?>

			     						 	<?

			     						 		$dropdownSerie = array(
			     						 			'name' => 'selectSerie',
			     						 			'class' => 'dropdown'
			     						 			);

			     						 		$editNombre = array(
			     					 				'name' => 'updateNombre',
			     					 				'placeholder' => 'Ingrese Nombre',
			     					 				'style' => 'width:100%',
			     					 				'class' => 'form-control'
			     					 				);

			     					 			$editTemp = array(
			     					 				'name' => 'updateTemporada',
			     					 				'placeholder' => 'Ingrese el Nº de Temp',
			     					 				'style' => 'width:100%',
			     					 				'class' => 'form-control'
			     					 				);

			     					 			$editFinalizada = array(
			     					 				'name' => 'updateFinalizada',
			     					 				'value' => '1'
			     					 				);

			     					 			$editBoton = array(
			     					 				'name' => 'updateSerie',
			     					 				'value' => 'Editar',
			     					 				'class' => 'btn btn-primary'
			     					 				);

			     					 			$editloadSerie = array(
			     					 				'name' => 'loadSerie',
			     					 				'value' => 'Cargar',
			     					 				'class' => 'btn btn-primary btn-xs' 
			     					 				);

			     						 	?>


			     						 	<div class="form-group">
			     						 		<?= form_label('Serie:  ', 'lblupdateSerie'); ?>
			     						 		<?=form_dropdown($dropdownSerie,array('' => '-- Choose --') + array_column($nombreSerie,'nombre'),'');?>
			     						 		<?= form_submit($editloadSerie); ?>
			     						 	</div>

			     						 	<div class="form-group">
				     					 		<?= form_label('Nombre: ', 'lbleditname'); ?>
				     					 		<?= form_input($editNombre); ?>
				     					 	</div>

				     					 	<div class="form-group">
			     					 			<?= form_label('Nº de Temporadas: ', 'lbleditseason'); ?>
			     					 			<?= form_input($editTemp); ?>
			     					 		</div>

			     					 		<div class="form-group">
			     					 			<?= form_label('Finalizada: ', 'lbleditfinish'); ?>
			     					 			<?= form_checkbox($editFinalizada, FALSE); ?>
			     					 		</div>

			     					 		<div class="form-group">
			     					 			<?= form_submit($editBoton); ?>
			     					 		</div>

			     						 	<?=form_close(); ?>
			     						 </div>
			    					</div>
	  							</div>

			   					<div class="col-xs-3 col-md-3">
							    	<div class="panel panel-primary">
			      						<div class="panel-heading">Eliminar</div>
			     						 <div class="panel-body">Panel Content</div>
			    					</div>
	  							</div>
	  							
					    	</div>
						</div>
					</div>
				</div>
  			</div>




  			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>
		</body>
</html>
