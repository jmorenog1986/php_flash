<?php
class Persona{
    private $documento;
    private $nombres;
    private $apellidos;
    private $email;
    private $clave;

    function __construct(){

    }


    function get_documento(){
        return $this->documento;
    }
    function get_nombres(){
        return $this->nombres;
    }
    function get_apellidos(){
        return $this->apellidos;
    }
    function get_email(){
        return $this->email;
    }
    function get_clave(){
        return $this->clave;
    }

    function set_documento($valor){
        $this->documento =$valor;
    }
    function set_nombres($valor){
        $this->nombres =$valor;
    }
    function set_apellidos($valor){
        $this->apellidos =$valor;
    }
    function set_email($valor){
        $this-> email=$valor;
    }
    function set_clave($valor){
        $this->clave =$valor;
    }


}

?>
