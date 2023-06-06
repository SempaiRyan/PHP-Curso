<?php
//Num float 
$a=1234.5678;
$a=12345.2e4;
$a=7E-10;

//Decimal number
$e=1.23456789;
$d=1.2345678901;

/*if($e==$d) print "Son giales";
else print "Son diferentes";
**/

$epsilon =0.000001;
if(abs($e-$d)<$epsilon) print "Son Iguales";
else print "Son diferentes";
//< Menor que

?>