<?php
//Variables Enteras
//El valor de la variable depende (32 o 64 bts)
//En php si encuentra un numero limite se convierte en float
$num=12345679;
$num=-12345678  ; //
$num=0123456 ; // octal 0-7
$num=0xFFAADDD ; // Hexadecimal 0-9 a-f
$num=0b1010101; // Binarios 0-1


//Sistema 32 bts
$num=2147483647;
print var_dump($num);

$num=114141314117177711911;
print var_dump($num);


?>