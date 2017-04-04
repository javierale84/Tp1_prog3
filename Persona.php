<?php 



abstract class Persona
{
 private   $_apellido;
 private   $_dni;
 private   $_nombre;
 private   $_sexo;

    public function __construct($nombre,$apellido,$dni,$sexo)
    {
        $this->_nombre=$nombre;
        $this->_apellido=$apellido;
        $this->_dni=$dni;
        $this->_sexo=$sexo;
    }

    public function getApellido()
    {
        return $this->_apellido;
    }

     public function getNombre()
    {
        return $this->_nombre;
    }

     public function getDni()
    {
        return $this->_dni;
    }

     public function getSexo()
    {
        return $this->_sexo;
    }


     public function ToString ()
    {
        return "Nombre:".$this->getNombre()."-".
               "Apellido:".$this->getApellido()."-".
               "DNI:".$this->getDni()."-".
               "Sexo:".$this->getSexo();

    }

    public abstract function Hablar ($idioma);

   
    

    
    





}







?>