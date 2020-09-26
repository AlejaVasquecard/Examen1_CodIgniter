<div class="container">
	<br>
	<div class="row">
		<a class="btn btn-info" href="<?php echo site_url('agenda'); ?>"> Ver listado de citas</a>
	</div>
	<div class="row">
		<div class="col-md-10">
			<h5> Diligenciar el formulario para agendar su cita</h5>
			<div class="card bg-info text-white">
				<div class="card-header">
					<h5>Agendar cita</h5>
				</div>
			</div>
			<div class="card-body">
				<form action="<?php echo site_url('agenda/create'); ?>" method="post">

					<div class="row">
						<div class="col-md-6">
							<label for="name">Nombre</label>
							<input type="text" name="name" id="name"
								   class="form-control"
								   placeholder="Nombre" required
								   maxlength="100">
						</div>
						<div class="col-md-6">
							<label for="lastN">Apellido</label>
							<input type="text" id="lastN" name="apellido"
								   class="form-control"
								   required
								   maxlength="100"
								   placeholder="Apellidos">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label for="ced">Cedula</label>
							<input type="number" id="ced" name="cedula"
								   required
								   maxlength="20"
								   class="form-control"
								   placeholder="Cedula">
						</div>
						<div class="col-md-6">
							<label for="fechaN">Fecha de nacimiento</label>
							<input type="date" id="fechaN" name="nacimiendo"
								   class="form-control"
								   required
								   placeholder="Fecha de nacimiento">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label for="ciudad">Ciudad</label>
							<input type="text" id="ciudad"
								   required
								   maxlength="50"
								   name="ciudad" class="form-control"
								   placeholder="Ciudad">
						</div>
						<div class="col-md-6">
							<label for="bario">Barrio</label>
							<input type="text" id="bario" required
								   maxlength="50" name="barrio"
								   class="form-control"
								   placeholder="Barrio">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<label for="cel">Celular</label>
							<input type="number" id="fechaC" min="0"
								   name="celular" minlength="10" maxlength="10"
								   class="form-control"
								   placeholder="Celular">
						</div>
						<div class="col-md-4">
							<label for="fechaC">Fecha de la cita</label>
							<input type="date" id="fechaC" name="cita"
								   class="form-control"
								   placeholder="Fecha cita">
						</div>
						<div class="col-md-4">
							<label for="">Hora de la cita</label>
							<input type="time" name="hora" class="form-control"
								   placeholder="Hora de la cita">
						</div>
					</div>
					<br>
					<input type="submit" class="btn btn-success" value="Guardar">
				</form>
			</div>
			
		</div>
	</div>
</div>

