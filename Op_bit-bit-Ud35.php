<?php
$values =array(0,1,2,4,8);
$test= 1+4;
$formato = '(%1$2d= %1$04b)= (%2$2d = %2$04b)'
    . '%3$s (%4$2d = %4$04b)' . "<br>";

echo "AND bit a bit <br>";

foreach ($values as $value) {
    $result = $value & $test;
    printf($formato, $result, $value, '&', $test);
}
///Revisar el video clase 35 Ud. Esta de locos , pero se entiende
?>