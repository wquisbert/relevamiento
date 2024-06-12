<?php session_start(); ?>
<html>
<head>
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="Shortcut Icon" href="favicon.ico" type="image/x-icon" />
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Registro de Usuarios</h2>

		<form role="form" name="registro" action="php/registro.php" method="post">
		<div class="form-group">
                        <label for="exampleFormControlSelect1">LUGAR/ESTABLECMIENTO:</label>
                        <select class="form-control" name="lugar" id="lugar">
                        <option>>>SELECCIONE ESTABLECIMIENTO<<</option>
                        <option>HOSPITAL DE CLINICAS</option>
                        <option>HOSPITAL DE LA MUJER</option>
                        <option>HOSPITAL DEL NIÑO</option>
                        <option>INSTITUTO NACIONAL DEL TORAX</option>
                        <option>INSTITUTO DE GASTROENTEROLOGIA</option>
                        <option>INSTITUTO NACIONAL DE OFTALMOLOGIA</option>
                        <option>HOSPITAL DEL NORTE</option>
                        <option>HOSPITAL DEL SUR</option>
                        </select>
                    </div>
		  <div class="form-group">
		    <label for="usuario">Usuario:</label>
		    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a:</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a" required>
		  </div>
		  <div class="form-group">
		    <label for="confirm_password">Confirmar Contrase&ntilde;a:</label>
		    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a" required>
		  </div>

		  <button type="submit" class="btn btn-success">Registrarse</button>
		</form>
		</div>
		</div>
		</div>

	
	</body>
</html>