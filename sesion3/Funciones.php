<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcioens</title>
</head>
<body>

<?php

// DECLARACION D ELA FUNCION //
function MostrarMsj($texto)
{
    echo "<strong>El texto mostrado es gracias a: </strong>";
    echo $texto;
    
}

//LLAMADO A LA FUNCION ENTREGANDO PARAMETROS //
MostrarMsj("mi primera funcion en PHP<br>");

MostrarMsj("Segundo llamado de la funcion Mostrar mensaje");

?>


</body>
</html>