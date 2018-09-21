<div class="panel panel-default wow rotateInUpRight" style="margin-top: 20px;box-shadow:5px 5px  rgba(0,0,0,.5);border: none;">
	<form method="POST" action="controllers/enviar.php" class="form-horizontal">
		<div class="panel-heading bg-aqua">
			<h3 class="panel-title"><span class="texto-blanco">Enviar correo</span> </h3>
		</div>	
		<div class="panel-body">
			<div class="form-group">
				<label for="hola" class="col-sm-2 control-label hidden-xs">Empleador:</label>
				<div class="col-sm-9 col-xs-10 col-xs-offset-1 input-group">
					<span class="input-group-addon " id="app-input-form">
						<div class="app-div-redes">
							<i class="fa fa-user texto-blanco"></i>		
						</div>
					</span>
					<input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre" required>
				</div>
				<div class="center">
					<span class="help-block hidden" id="help-nombre">Ej: Pedro Perez</span>
				</div>
			</div>
			<div class="form-group">
				<label for="correo" class="col-sm-2 control-label hidden-xs">Correo:</label>
				<div class="col-sm-9 col-xs-10 col-xs-offset-1 input-group">
					<span class="input-group-addon" id="app-input-form">
						<div class="app-div-redes">
							<i class="fa fa-envelope texto-blanco"></i>		
						</div>
					</span>
					<input name="email" type="email" class="form-control" id="correo" placeholder="Correo" required>
				</div>
				<div class="center">
					<span class="help-block hidden" id="help-correo">Ej: pedro12321@gmail.com</span>	
				</div>
			</div>
			<div class="form-group">
				<label for="hola" class="col-sm-2 control-label hidden-xs">Telefono:</label>
				<div class="col-sm-9 col-xs-10 col-xs-offset-1 input-group">
					<span class="input-group-addon " id="app-input-form">
						<div class="app-div-redes">
							<i class="fa fa-phone texto-blanco"></i>		
						</div>
					</span>
					<input name="telefono" type="number" class="form-control" id="telefono" placeholder="(+XX) XXX-XXX-XXX"  required >
				</div>
				<div class="center">
					<span class="help-block hidden" id="help-telefono">Ej: (+Codigo del pais) xxx-xxx-xxx</span>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label hidden-xs">Asunto:</label>
				<div class="col-sm-9 col-xs-10 col-xs-offset-1 input-group">
					<span class="input-group-addon " id="app-input-form">
						<div class="app-div-redes">
							<i class="fa fa-commenting texto-blanco"></i>		
						</div>
					</span>
					<input name="asunto" class="form-control" id="asunto" placeholder="Asunto" required>
				</div>
				<div class="center">
					<span class="help-block hidden" id="help-asunto">Asunto o motivos para Sugerencias</span>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label hidden-xs">Mensaje:</label>
				<div class="col-sm-9 col-xs-10 col-xs-offset-1">
					<textarea name="mensaje" id="mensaje" class="form-control" placeholder="Mensaje" required id="" cols="30" rows="10"></textarea>
					<span class="help-block hidden" id="help-mensaje">Mensaje de motivo y caracteristica de empleo</span>
				</div>
			</div>
		</div>
		<div class="panel-footer">
			<div class="form-group">
				<div class="col-sm-3 col-sm-offset-8 col-xs-12">
					<button class="btn btn-primary btn-block" id="enviar" data-toggle='tooltip' data-placement="right" title="Enviar">Enviar</button>

				</div>
			</div>	
		</div>
	</form>
</div>
<script>
	$(document).ready(function(){
		var nombre=$('#nombre');
		var correo=$('#correo');
		var telefono=$('#telefono');
		var asunto=$('#asunto');
		var mensaje=$('#mensaje');
		


		$('#enviar').click( function(){
			if (nombre.val()==''){
				nombre.css('border','1.5px solid #FE4242');
				$('#help-nombre').removeClass('hidden');
				return;
			}else {
				nombre.css('border','');
				$('#help-nombre').addClass('hidden');
			}

			if (correo.val()==''){
				correo.css('border','1.5px solid #FE4242');
				$('#help-correo').removeClass('hidden');
				return;
			}else{
				correo.css('border','');
				$('#help-correo').addClass('hidden');
			}

			if (telefono.val()==''){
				telefono.css('border','1.5px solid #FE4242');
				$('#help-telefono').removeClass('hidden');
				return;
			}else {
				telefono.css('border','');
				$('#help-telefono').addClass('hidden');
			}

			if (asunto.val()==''){
				asunto.css('border','1.5px solid #FE4242');
				$('#help-asunto').removeClass('hidden');
				return;
			}else {
				asunto.css('border','');
				$('#help-asunto').addClass('hidden');
			}
			
			if (mensaje.val()==''){
				mensaje.css('border','1.5px solid #FE4242');
				$('#help-mensaje').removeClass('hidden');
				return;
			}else {
				mensaje.css('border','');
				$('#help-mensaje').addClass('hidden');
			}
		});
		
	});
</script>