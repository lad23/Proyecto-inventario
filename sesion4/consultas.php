<?php

include('conexion.php');


//$sql = "INSERT INTO registros(rut, nombre, apellido, email, contraseña) VALUES ('189658749', 'mario', 'hugo', 'mario@hugo.cl', 'mario')";

// if ($Conn->query($sql) === TRUE) {
//     echo "REGISTRO GUARDADO CORRECTAMENTE";
//   } else {
//     echo "Error: " . $sql . "<br>" . $Conn->error;
//   }


//   $sql = "UPDATE registros SET nombre= 'pablo', contraseña ='Jpablo', email ='pablo@hugo.cl' WHERE rut = '189658749'";


//   if($Conn->query($sql)===TRUE){
//     echo "EL REGISTRO FUE ACTUALIZADO CORRECTAMENTE";
//   }else{
//     echo "Error: " .$sql ."<br>". $Conn->error;
//   }


//   $sql = "DELETE FROM registros WHERE rut = '189658749'";

//   if($Conn->query($sql)===TRUE){
//     echo "EL REGISTRO SE ELIMINO CON EXITO";
//   }else{
//     echo "Error: ". $sql ."<br>". $Conn->error;
//   }

  $sql = "SELECT * FROM registros";

  $result = $Conn->query($sql);

  if($result->num_rows > 0){
    

  while($fila=mysqli_fetch_assoc($result)){
    echo "RUT: " .$fila['rut']."-";
    echo "nombre: " .$fila['nombre']."-";
    echo "apellido: " .$fila['apellido']."-";
    echo "email: " .$fila['email'].'<br>';
  }

  }else{
    echo "No se obtuvieron resultados";
  }

?>