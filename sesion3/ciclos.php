<?php 


//repetiran instruccones 1 o n veces 

$numero = 1;

while($numero <= 10){
    echo 'numero: ' .$numero. '<br>';
    $numero++;
}

// Do while repetira almenos una isntruciones y luego evaluara al condicion
$num = 0;
do{
    echo 'numero: '.$num . '<br>';
    $num++;
}while($num < 10);

// instruccion for

for($i =0; $i <10; $i++){
    echo 'numero: '.$i.'<br>';
}



?>