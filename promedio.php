<?php
$i=0;
$acumulable=0;
$calificaciones= array(100,80,70,90,100,95,98);
echo" Miguel Angel Izquierdo Medrano";
echo "<br>";
echo"Tarea de promedio con arreglos";
echo "<br>";
echo "<br>";

foreach($calificaciones as $calificaciones){
		$i++;
	$acumulable=$acumulable+$calificaciones;

echo "la calificacion ". $i." = ". $calificaciones;
echo "<br>";
}

$promedio=$acumulable/$i;
echo"El promedio total es :". $promedio;


?>