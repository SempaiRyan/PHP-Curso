<?php
/* Simbolos de Operadores de comparacion

== Igual , TRUE si $a es = $b despues 
de la manipulacion de tipos

!= Diferente ,TRUE si $a  es igual a $b y son
del mismo tipo


<> Diferente, TRUE si $a no es igual a $b
despues de la manipulacion de tipos

!== Diferencia Estricta (No identico)
TRUE si $a no es igual a $b, o si no son del
mismo tipo

---------------------
< Menor que

>Mayor que

<=Menor o igual que

>= Mayor o igual que

------------
COMPARACIONES
<=> Nave Espacial
?? $c (Funsion Null)
**/
//Igual igual
$a=10 ;
$b="10";
print $a==$b;
print "<br>";
print "<br>";

//Comparacion estricta
$a=10 ;
$b="10";
if ($a===$b) {  
    print "Son iguales";
}else{
    print "diferentes";
}
print "<br>";
print "<br>";

//Diferencia

$a=10 ;
$b=110;
if ($a<>$b) {  
    print "diferentes";
}else{
    print " Son iguales";
}
print "<br>";
print "<br>";



$a=18 ;
$b=11;
if ($a>$b) {  
    print "A es Mayor que B";
}else{
    print "A NO es Mayor que B";
}
print "<br>";
print "<br>";

// = ES UNA ASIGNACION  
//DATO PARA RECORDAR



$a=18 ;
$b=11;
if ($a==$b) {  
    print "A es Mayor que B";
}else{
    print "A NO es Mayor que B";
}

?>