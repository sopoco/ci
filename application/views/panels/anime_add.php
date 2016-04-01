					<div id="anime" class="tab-pane fade">

						<div class="panel-body">

			  				<div class="col-xs-4 col-md-4">
							    <div class="panel panel-primary" >
							    	<div class="panel-heading">Agregar</div>
							    		<div class="panel-body">

											<?= form_open("panel/insertAnime");?>

			     					 		<?
			     					 			$nombreAnimeAdd = array(
			     					 				'name' => 'nombreAnimeAdd',
			     					 				'placeholder' => 'Ingrese Nombre',
			     					 				'style' => 'width:100%',
			     					 				'class' => 'form-control'
			     					 				);

			     					 			$capAnimeAdd = array(
			     					 				'name' => 'capAnimeAdd',
			     					 				'placeholder' => 'Ingrese el Numero de Capitulos',
			     					 				'style' => 'width:100%',
			     					 				'class' => 'form-control'
			     					 				);

			     					 			$hddAnimeAdd = array(
			     					 				'name' => 'hddAnimeAdd',
			     					 				'class' => 'dropdown'
			     					 				);


			     					 			$addBotonAnime = array(
			     					 				'name' => 'insertAnime',
			     					 				'value' => 'Agregar',
			     					 				'class' => 'btn btn-primary pull-right'
			     					 				);

			     					 			$ddHdd = array(
			     					 				'NAS' =>'NAS',
			     					 				'WD 2 Tb' =>'WD 2 Tb',
			     					 				'Seagate 1 Tb' =>'Seagate 1 Tb'
			     					 				);

			     					 		 ?>

			     					 		 <div class="form-group">
				     					 		<?= form_label('Nombre: ', 'lblnameAnime'); ?>
				     					 		<?= form_input($nombreAnimeAdd); ?>
				     					 	</div>		

			     					 		 <div class="form-group">
				     					 		<?= form_label('Nº de Capitulos: ', 'lblcapAnime'); ?>
				     					 		<?= form_input($capAnimeAdd); ?>
				     					 	</div>	

			     					 		 <div class="form-group">
				     					 		<?= form_label('HDD: ', 'lblHddAnime'); ?>
				     					 		<?= form_dropdown($hddAnimeAdd,$ddHdd); ?>
				     					 	</div>				   	 	
	     					 

			     					 		<div class="form-group">
			     					 			<?= form_submit($addBotonAnime); ?>
			     					 		</div>


			     					 		<?=form_close(); ?>



							    		</div>			
							    </div>
							</div>
