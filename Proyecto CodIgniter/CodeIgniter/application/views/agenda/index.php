<div class="container">
	<?php
	 if (isset($cantidad) && $cantidad > 0 ) { ?>
		<div class="alert alert-success" role="alert">
			Se ha guardado el dato correctamente.
		</div>
		<?php
	}
	?>
	<br>
	<a class="btn btn-info"  href="<?php echo site_url('agenda/form'); ?>"> Solicitar cita</a>
	<div class="row">
		<div class="col-md-10">
			<h5><?php echo $title; ?></h5>
			<ul class="list-group">
				<?php foreach ($citas as $cita_item): ?>
					<li class="list-group-item active bg-info">
						<div class="row">
							<div class="col">
								<strong>Nombre: </strong>
							</div>
							<div class="col">
								<?php echo ' '.$cita_item['nombre'].' '
										.$cita_item['apellido']; ?>
							</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col">
								<strong>Fecha de la cita: </strong>
							</div>
							<div class="col">
								<?php echo ' '.$cita_item['fecha_cita'].' '
										.$cita_item['hora_cita']; ?>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<strong>Cedula: </strong>
							</div>
							<div class="col">
								<?php echo ' '.$cita_item['cedula']; ?>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<strong>Celular: </strong>
							</div>
							<div class="col">
								<?php echo ' '.$cita_item['celular']; ?>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<strong>Ciudad: </strong>
							</div>
							<div class="col">
								<?php echo ' '.$cita_item['ciudad']; ?>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<strong>Barrio: </strong>
							</div>
							<div class="col">
								<?php echo ' '.$cita_item['barrio']; ?>
							</div>
						</div>
						<br>
					</li>

				<?php endforeach; ?>
			</ul>
		</div>
			
			

	</div>
</div>
<br>
