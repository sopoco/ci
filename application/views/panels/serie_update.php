
											
			     						 	<?=form_open('panel/updateSerie');?>
											<?
			     					 			$updateNombre = array(
			     					 				'style' => 'width:100%',
			     					 				'class' => 'form-control',
			     					 				'readonly'=>'true'
			     					 				);

			     					 			$updateTemp = array(
			     					 				'style' => 'width:100%',
			     					 				'class' => 'form-control'
			     					 				);

			     					 			$updateBoton = array(
			     					 				'name' => 'updateSerie',
			     					 				'value' => 'Actualizar',
			     					 				'class' => 'btn btn-primary pull-right'
			     					 				);
											?>

											<div class="form-group">
				     					 		<?= form_label('Nombre: ', 'lblname'); ?>
				     					 		<?= form_input('nombreEdit',$infoSerie['nombre'],$updateNombre); ?>
				     					 	</div>				   	 	

				     					 	<div class="form-group">
			     					 			<?= form_label('Nº de Temporadas: ', 'lblseason'); ?>
			     					 			<?= form_input('temporadaEdit',$infoSerie['temporadas'],$updateTemp); ?>
			     					 		</div>			     					 	

			     					 		</br>
			     					 		<div class="form-group">
			     					 			<?= form_label('Finalizada: ', 'lblfinish'); ?>

			     					 			<?php if ($infoSerie['finalizada'] == 'Si'): ?>
			     					 				<? $checked = TRUE; ?>
			     					 			<?php else: ?>
			     					 				<? $checked = FALSE; ?>
			     					 			<?php endif; ?>	

			     					 			<?= form_checkbox('finalizadaEdit','1', $checked); ?>		     					 		
			     					 		</div>

			     					 		<div class="form-group">
			     					 			<?= form_submit($updateBoton); ?>
			     					 		</div>

											<?=form_close();?>
										
			     						</div>
			    					</div>
	  							</div>
					    	</div>
	  				</div>