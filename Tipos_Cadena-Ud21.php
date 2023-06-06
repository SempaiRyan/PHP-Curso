<?php
/* Cadenas o String
Solo admite 256 caracteres
PHP 7 soporta Unicode

NoeDoc (PHP 5.3) 
se necesita poner <<<'EOT'

VIDEO 21 PHP
*/
print "'Hola desde PHP' <br>";
print 'Hola desde "PHP" <br>';

$nombre= "Pedro Picapiedra";

print <<<EOD
Mi nombre es: $nombre <br>
Mas Informacion
EOD;

///NEW DOC
print <<<'EOD'
Mi nombre es: $nombre <br>
Mas Informacion
EOD;

?>