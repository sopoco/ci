								<div class="col-xs-4 col-md-4">
							    	<div class="panel panel-primary">
			      						<div class="panel-heading">Eliminar</div>
			     						 <div class="panel-body">

			     						 	<? $deleteSerie = array(); ?>
			     						 	<?php if (!empty($nombreSerie)): ?>
				     						 	<?php foreach ($nombreSerie as $serie): ?>
												    <?php $deleteSerie[$serie['nombre']] =  $serie['nombre']; ?>
												<?php endforeach ?>
											<?php endif; ?>

			     					 		<?= form_open('panel/deleteSerie');?>

			     						 	<?

			     						 		$dropdownSerie = array(
			     						 			'name' => 'selectSerie',
			     						 			'size' => '11',
			     						 			'type' => 'text',
			     						 			'class' => 'form-control'
			     						 			);

			     								$editloadSerie = array(
			     					 				'name' => 'btndeleteSerie',
			     					 				'value' => 'Borrar',
			     					 				'class' => 'btn btn-primary btn-md pull-right' 
			     					 				);
			     						 	?>

											<div class="form-group">
			     						 		<?= form_label('Serie:  ', 'lbldeleteSerie'); ?>			     						 
			     						 		<?= form_dropdown($dropdownSerie, $deleteSerie); ?>
			     						 	</div>
			     						 	
											<?= form_submit($editloadSerie); ?>

			     					 		<?=form_close(); ?>

			     						 </div>
			    					</div>
	  							</div>


			   

