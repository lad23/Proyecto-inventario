<!DOCTYPE html>
<html>
<head>
    <title> Insertar PHP en código HTML </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <div class="Contenedor">
            <h1>Funciones y estructuras de control en PHP</h1>
        <div class="izquierda">
        <?php
        
            function operaciones($var1, $var2, $var3){
            
                $resultado = 0;
                if($var2 == "+"){
                    $resultado = $var1 + $var3;
                    echo  "El resultado de: $var1 + $var3 = ";
                
                }else if($var2 == "-"){
                    $resultado = $var1 - $var3;
                    echo  "El resultado de: $var1 - $var3 = ";
                
                }else if($var2 == "/"){
                    $resultado = $var1 / $var3;
                    echo  "El resultado de: $var1 / $var3 = ";
                }
                return $resultado;    
            }
        
            $r = operaciones(12, "/", 3);
            echo "$r </br></br>";

            echo "Laa tabla de multiplicar del numero $r es: <br> ";

            for($i = 1; $i < 11; $i++){

                echo $r. 'X'. $i. '=' .$r * $i. '<br>';
            }
        
        ?> 
        </div>
        <div class="centro">
            <?php
                $r2 = operaciones(20, "-", 4);
                echo "$r2 </br></br>";

                echo "Los numeros pares entre el 0 y el $r2 son: <br>";

                $i=0;
                while($i <= $r2){
                    if($i % 2 ==0 ){
                        echo $i.'<br>';
                    }
                    $i++;
                };
                
            ?>
        </div>
        <div class="derecha">
            <?php
                $r3 = operaciones($r, "+", $r2);
                echo "$r3 </br></br>";

                echo "Los numeros impares entre el 0 y el $r3 son: <br>";

                $i=0;
                do{
                    if($i % 2 !=0){
                        echo $i .'<br>';
                    }
                    $i++;
                }while($i < $r3);     


            ?>
        </div>
    </div>

    <?php
    
    // $r=4;
    // for($i=1; $i<11; $i++){
        
    //   echo  $r.'x'. $i. '=' .$r * $i.'<br>';
    // }


    // $r1 =8;

    // for($i=1; $i<11; $i++){

    //     echo $r1.'x'. $i.'='.$r1*$i.'<br>';
    // }
    
    // ?>
        
</body>
</html>