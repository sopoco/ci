
											
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
			     					 				<? $cheked = TRUE; ?>
			     					 			<?php else: ?>
			     					 				<? $cheked = FALSE; ?>
			     					 			<?php endif; ?>	

			     					 			<?= form_checkbox('finalizadaEdit','1', $cheked); ?>		     					 		
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

					<div id="anime" class="tab-pane fade">
						<h3>Menu 1</h3>
						<p>Some content in menu 1.</p>
					</div>

					<div id="pelicula" class="tab-pane fade">
						<h3>Menu 2</h3>
						<p>Some content in menu 2.</p>
					</div>
				</div>
  			</div>


  			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>
		</body>
</html>
