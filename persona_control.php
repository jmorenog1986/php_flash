<?php
include_once 'persona.php';

class PersonaControl extends Persona{


    function __construct(){
        Persona::set_documento($_POST['documento']);
        Persona::set_nombres($_POST['nombres']);
        Persona::set_apellidos($_POST['apellidos']);
        Persona::set_email($_POST['email']);
        Persona::set_clave($_POST['clave']);
        switch($_POST['accion']){
            case "guardar":
                $this->guardar();
            break;
            case "actualizar":
                $this->actualizar();
            break;
            case "eliminar":
                $this->eliminar();
            break;
            case "consultar":
                $this->consultar();
            break;
        }

    }

    function guardar(){
        $sql="insert into personas values ('".Persona::get_documento()."','".Persona::get_nombres()."','".Persona::get_apellidos()."','".Persona::get_email()."',md5('".Persona::get_clave()."'))";
       $this->conexionQuery($sql);
    }
    function actualizar(){
        $sql="update personas set nombres='".Persona::get_nombres()."', apellidos='".Persona::get_apellidos()."', email='".Persona::get_email()."', clave=md5('".Persona::get_clave()."') where documento='".Persona::get_documento()."'";
       $this->conexionQuery($sql);
    }
    function eliminar(){
        $sql="delete from personas where documento='".Persona::get_documento()."'";
        $this->conexionQuery($sql);
    }
    function consultar(){
        header("location:consultra_personas.php"); 
    }


    function conexionQuery($sql){
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
            if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
    }

}

new PersonaControl();

?>