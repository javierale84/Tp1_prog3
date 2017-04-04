<?php

class Fabrica
{
   private $_empleados=array();
   private $_razonSocial;

    public function __construct($rSocial)
    {
        $this->_razonSocial=$rSocial;
       
    }

    public function AgregarEmpleado($empleado)
    {
        if(array_push($this->_empleados,$empleado))
        {
            $this->EliminarEmpleadosRepetidos();
            return true;
        }
        return false;
    }


    public function CalcularSueldos()
    {
        $sueldos=0;

        foreach($this->_empleados as $item)
        {
            $sueldos+=$item->getSueldo();
        }

        return $sueldos."<br>";
    }





    public function EliminarEmpleado($empleado)
    {
        //Search, busco la coinicdencia de los elementos del array y guardo la posicion del objeto persona en una variable

        $posicion=array_search($empleado,$this->_empleados);

      echo "Se elimina al empleado:".$empleado->ToString()." De la posicion: ".$posicion;
        if($posicion!==false)
    {
        unset($this->_empleados[$posicion]);
        //print_r($this->_empleados);
        //var_dump($this->_empleados);

        return true;
    }
    return false;
    }

    private function EliminarEmpleadosRepetidos()
    {
        $this->_empleados=array_values(array_unique($this->_empleados,SORT_REGULAR));
    }

    public function ToString()
    {
        $lista="";

        foreach($this->_empleados as $item)
        {
            $lista=$lista."-".$item->ToString()."<br>";
        }

        return "<br> Razon Social: ".$this->_razonSocial."<br>".$lista;
    }

}





?>