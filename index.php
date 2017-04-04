<?php


require "Persona.php";
require "Empleado.php";
require "Fabrica.php";



$Empleado1=new Empleado("Luis","Perez",30999888,"M",0123,25000);
$Empleado2=new Empleado("Miguel","Lopez",22949568,"M",0125,32000);
$Empleado3=new Empleado("Natalia","Gucci",123,"F",34,38000);



 
echo $Empleado1->ToString().$Empleado1->Hablar("Ingles");

echo $Empleado2->ToString().$Empleado2->Hablar("Español");
echo $Empleado3->ToString().$Empleado3->Hablar("Italiano");

//Creo una fabrica

$Fabrica1= new Fabrica("Fabrica de pastas");

//Agrego dos empleados
$Fabrica1->AgregarEmpleado($Empleado1);
$Fabrica1->AgregarEmpleado($Empleado2);
//Muestro los dos empleados
echo $Fabrica1->ToString();
//Muestro el total de sueldos
echo "Total Sueldos: ".$Fabrica1->CalcularSueldos();
//Elimino al segundo empleado
$Fabrica1->EliminarEmpleado($Empleado2);
//Muestro la fabrica sin el segundo empleado
echo $Fabrica1->ToString();
//muestro el total de sueldos
echo "Total Sueldos: ".$Fabrica1->CalcularSueldos();
//Agrego nuevamente al empleado 1
$Fabrica1->AgregarEmpleado($Empleado1);
//Muestro para verificar que no se haya agregado dos veces
echo $Fabrica1->ToString();
//Muestro total de sueldos
echo "Total Sueldos: ".$Fabrica1->CalcularSueldos();

?>