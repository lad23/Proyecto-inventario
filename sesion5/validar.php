<?php 

include("conexion.php"  );

// DEECLARAMOS Y ASIGNAMOS LAS VARIBLES, HACEMOS REFERENCIA AL INPUT DEL FORMULARIO 
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM registros WHERE  rut = '$usuario' AND contraseña = '$pass' ";

$result = $Conn->query($sql);


//devuelve la cantidad de filas que coinciden con la condicion 
if($result->num_rows > 0){

    while($fila=mysqli_fetch_assoc($result)){

        echo $fila['rut'].'-'.$fila['nombre'].'-'.
        $fila['apellido'].'-'.$fila['email'].'-'.
        $fila['contraseña'];
    }

}else{
    header("Location:formulario.php?error=si");
}


?>