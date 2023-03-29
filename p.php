<!DOCTYPE html>
<html>
	<head>
		<title>Bienvenidos</title>
	</head>
	<body>
    <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "prueba";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }


            $conn->set_charset("utf8");
            $sql = "SELECT * FROM personas where documento=".$_GET['u'];
                $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {

            ?>
                <form method="post" action="persona_control.php">
                    <label for="documento">documento</label>
                    <input type="text" name="documento" id="documento" value="<?php echo $row['documento']; ?>"><br>
                    <label for="nombres">nombres</label>
                    <input type="text" name="nombres" id="nombres" value="<?php echo $row['nombres']; ?>"><br>
                    <label for="apellidos">apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" value="<?php echo $row['apellidos']; ?>"><br>
                    <label for="email">email</label>
                    <input type="text" name="email" id="email" value="<?php echo $row['email']; ?>"><br>
                    <label for="clave">clave</label>
                    <input type="password" name="clave" id="clave"><br>
                    <button type="submit" name="accion" value="guardar" >guardar</button>
                    <button type="submit" name="accion" value="eliminar" >eliminar</button>
                    <button type="submit" name="accion" value="actualizar" >actualizar</button>
                    <button type="submit" name="accion" value="consultar" >consultar</button>
                </form>

            <?php
            }
            } else {
            echo "0 results";
            }

            $conn->close();

            ?>




		

	</body>
</html>
