<?php
$nombre="James Bond";
$agente="007";
$titulo="Agente al servicio de su \"Magestad\"  ";
//Se escapa de su logica en analizador sintactico-secuencia de escape
print $nombre."    , ".$agente."   ,   ".$titulo;

//concatenar print $nombre.$agente.$titulo
//print $nombre."".$agente."".$titulo;
//shortcut

/// salto de Linea \n

$salida= $nombre. " Num. Agente: ";
$salida .=$agente. " <br> ";
$salida .=$titulo;

print $salida;

?>