								<div class="col-xs-4 col-md-4">
							    	<div class="panel panel-primary">
			      						<div class="panel-heading">Editar</div>
			     						 <div class="panel-body">

			     						 	<? $updateSerie = array(); ?>
			     						 	<?php if (!empty($nombreSerie)): ?>
				     						 	<?php foreach ($nombreSerie as $serie): ?>
												    <?php $updateSerie[$serie['nombre']] =  $serie['nombre']; ?>
												<?php endforeach ?>
											<?php endif; ?>


			     						 	<?= form_open('panel/loadSerie');?>

			     						 	<?
			     						 		$ddSerie = array(
			     						 			'name' => 'loadSerie',
			     						 			'class' => 'dropdown'
			     						 		);

			     						 		$editloadSerie = array(
			     					 				'name' => 'btnLoadSerie',
			     					 				'value' => 'Cargar',
			     					 				'class' => 'btn btn-primary btn-xs' 
			     					 				);
			     						 	?>

											<div class="form-group">
			     						 		<?= form_label('Serie:  ', 'lblloadSerie'); ?>			     						 
			     						 		<?= form_dropdown($ddSerie,$updateSerie); ?>
			     						 		<?= form_submit($editloadSerie); ?>
			     						 	</div>
			     						 	
			     						 	<?=form_close(); ?>
