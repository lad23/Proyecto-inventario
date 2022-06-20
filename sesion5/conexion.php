<?php 

$Conn = new mysqli("localhost", "root", "", "registro_usuarios");

if($Conn->connect_errno){
    echo "fallo al conectar: (". $Conn->connect_errno. ")" . $Conn->connect_errno;
}


$Conn -> set_charset("utf-8");


?>