<!DOCTYPE html>
<html>
	<head>
		<title>Bienvenidos</title>
	</head>
	<body>
		<form method="post" action="persona_control.php">
			<label for="documento">documento</label>
			<input type="text" name="documento" id="documento"><br>
			<label for="nombres">nombres</label>
			<input type="text" name="nombres" id="nombres"><br>
			<label for="apellidos">apellidos</label>
			<input type="text" name="apellidos" id="apellidos"><br>
			<label for="email">email</label>
			<input type="text" name="email" id="email"><br>
			<label for="clave">clave</label>
			<input type="password" name="clave" id="clave"><br>
			<button type="submit" name="accion" value="guardar" >guardar</button>
			<button type="submit" name="accion" value="eliminar" >eliminar</button>
			<button type="submit" name="accion" value="actualizar" >actualizar</button>
			<button type="submit" name="accion" value="consultar" >consultar</button>
		</form>

	</body>
</html>


