<?php

/*and (Y) true a y b son verdadero

or (o) true si cualquiera de a o b es true

xor(o exclusivo)true si a o b es true,pero no ambos

not(no) true si a no es true

and( &&) true si tanto a como b son true

or( | | o exclusivo) 
true si cualquiera de  a o b es true
**/

$dinero=false;
$tiempo=true;

if ($dinero && $tiempo) {
    print "Voy al Cine";
    # code...
}else {
    print "Me quedare en casa";
}
print "<br>";
print "<br>";
print "<br>";


if ($dinero ||  $tiempo) {
    print "Voy al Cine";
    # code...
}else {
    print "Me quedare en casa";
}
