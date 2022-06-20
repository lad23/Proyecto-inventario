<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir en  HTML</title>
</head>
<body>

    <?php
    
    echo "<h1>Hola Mundo! desde PHP</h1><br>";

    $norte = 5 ;
    $centro = 4;
    $sur = 6;
    $total_regiones = $norte + $centro + $sur;

    echo "<h2>En total en chile hay: $total_regiones regiones</h2><br><br><br>";

    echo "<h2>En el norte hay $norte regiones, en el centro $centro y en el sur $sur</h2>";
    
    
    ?>
    
</body>
</html>