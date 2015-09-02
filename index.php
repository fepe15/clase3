<?php
require_once("ClassEmpleado.php");
require_once("ClassFabrica.php");
$empleado = new Empleado("Roberto", "Lopez", "353535", "Masculino", "123", "1500");
echo $empleado->ToString();
$empleado2 = new Empleado("Roberta", "Lopez", "33354125","Femenino", "456", "3000");
echo "<br>". $empleado2->Hablar("Español");



/*$fabrica = new Fabrica("algo");
$fabrica->AgregarPersona($empleado);
$fabrica->AgregarPersona($empleado2);
echo $fabrica->ToString();

echo $fabrica->CalcularSalario();*/



?>
