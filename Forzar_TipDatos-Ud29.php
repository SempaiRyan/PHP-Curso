<!DOCTYPE html>
<html lang="es">

<head>
    <title>forzar tipo de datos</title>
    <meta charset="utf-8" />

</head>

<body>
    <?php

    //Pedimos que realize la operacion
    $div = 10 / 3;
    print $div . "<br>";


    //En otra variable pedimos su conversion a Entero
    //Podemos agg en este tip de Operador (int) no hace la conversion, sino en la variable nueva $entero 
    $entero = (int) $div;
    print $entero . "<br>";


    //otra funcion pedimos que nos muestre el tipo de valor y su resultado
    var_dump($div) . "<br>";
    print "<br>";


    //Pedimos que nos muestre el tipo de valor y su resultado para entero
    var_dump($entero);
    print "<br>";
    print "<br>";
    print "<br>";


    //Con esta funcion fuerza el resultado
    print intval(10 / 3);
    settype($div, "integer");
    var_dump($div);
    print "<br>";
    print "<br>";


    print gettype($div);


    ?>

</body>

</html>