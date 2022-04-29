<?php
/**Una Terminal de Ómnibus desea guardar y gestionar los viajes que arriban y parten de las diferentes
empresas de la provincia. Para ello la terminal guarda la colección de empresas de Ómnibus, las cuales
administran los diferentes viajes que se ofrecen, a diferentes destinos de la provincia de Neuquén. Cada
viaje tiene asignada una fecha, una hora de llegada, una hora de partida y el conductor responsable del
viaje. Para ello implementar las clases: Terminal, Empresa, Viaje y Responsable . */

include "Responsable.php";
include "Viaje.php";
include "Empresa.php";
include "Terminal.php";

//nombre, apellido, Nro de Documento, direccion, mail y telefono.
$nuevoResponsable1=new Responsable("raul","perez",19786543,"buenos aires 89","raulperez@gmal.com",299876543);
$nuevoResponsable2=new Responsable("pepe","argento",294657766,"french 467","pepe@gmal.com",290887866);
$nuevoResponsable3=new Responsable("alberto","isac",2847655,"pueyredon 34","alberto@gmal.com",18465733);
$losResponsables=[$nuevoResponsable1,$nuevoResponsable2,$nuevoResponsable3];
//destino, hora de partida, hora de llegada, número, importe, fecha,cantidad de asientos totales, cantidad de asientos disponibles, y una referencia a la persona responsable del viaje.


$nuevoViaje= new Viaje("buenos aires","13:30","15:30",1,10500,"26/04/2022",50,30);
$nuevoViaje->setObjResponsable($losResponsables);

echo "~~~~~~~~~~~~~~~~~~Viaje~~~~~~~~~~~~~~~~~~~~~\n " . $nuevoViaje . "\n";


?>