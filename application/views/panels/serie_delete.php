								<div class="col-xs-4 col-md-4">
							    	<div class="panel panel-primary">
			      						<div class="panel-heading">Eliminar</div>
			     						 <div class="panel-body">
			     						 	
			     						 	<? $serie2 = array(); ?>
			     						 	<?php if (!empty($nombreSerie)): ?>
				     						 	<?php foreach ($nombreSerie as $serie): ?>
												    <?php $serie2[$serie['nombre']] =  $serie['nombre']; ?>
												<?php endforeach ?>
											<?php endif; ?>

			     					 		<?= form_open('panel/deleteSerie');?>

			     						 	<?

			     						 		$dropdownSerie = array(
			     						 			'name' => 'selectSerie',
			     						 			'size'        => '11',
			     						 			'type'         => 'text',
			     						 			'class' => 'dropdown'
			     						 			);

			     								$editloadSerie = array(
			     					 				'name' => 'btndeleteSerie',
			     					 				'value' => 'Borrar',
			     					 				'class' => 'btn btn-primary btn-md pull-right' 
			     					 				);
			     						 	?>

											<div class="form-group">
			     						 		<?= form_label('Serie:  ', 'lblupdateSerie'); ?>			     						 
											</div>








											
										<!--	<?= print_r($nombreSerie[0]['nombre']);  ?> -->

			     					 		<div class="form-group">
			     						 		<?= form_dropdown($dropdownSerie, $serie2); ?>

			     						 	<!--	<?= form_dropdown($dropdownSerie,array_column($nombreSerie,'nombre')); ?> -->
			     						 	</div>
			     						 	
											<?= form_submit($editloadSerie); ?>

			     					 		<?=form_close(); ?>



			     						 </div>
			    					</div>
	  							</div>


			   					<div class="col-xs-4 col-md-4">
							    	<div class="panel panel-primary">
			      						<div class="panel-heading">Editar</div>
			     						 <div class="panel-body">Panel Content</div>
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
				</div
  			</div>


  			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>
		</body>
</html>






