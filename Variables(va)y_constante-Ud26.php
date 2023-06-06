

<!DOCTYPE html>

<head>
    <title>Variables de variables y constante</title>
    <meta charset="UTF-8" />
</head>

<body>
    <?php
    $cdmx=22000000;
    $guadalajara=4000000;
    $monterrey=1400000;

    //variables de variables
    $cuidad="cdmx";
    print "<p>La poblacion de la cuidad $cuidad es de ${$cuidad} </p>";


    $cuidad="guadalajara";
    print "<p>La poblacion de la cuidad $cuidad es de ${$cuidad} </p>";

    $cuidad="monterrey";
    print "<p>La poblacion de la cuidad $cuidad es de ${$cuidad} </p>";

    //CONSTANTE CREAMOS

    define("TASA_CAMBIO",18.35);
    $deuda=12345;
    print "Tu deuda en dolares es de ".($deuda*TASA_CAMBIO);

    /*
    define("TASA_CAMBIO",18.35,true);
    $deuda=12345;
    print "Tu deuda en dolares es de ".($deuda*Tasa_Cambio);
**/
?>

</body>

</html>