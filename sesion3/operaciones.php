<?php



function Operaciones($var1, $var2, $var3,)
    {

        $resultado = 0;

        if ($var2 == "+") {
            $resultado = $var1 + $var3;
            echo "El resultado de: $var1 + $var3 = ";
        } elseif ($var2 == "-") {
            $resultado = $var1 - $var3;
            echo "El resultado de : $var1 - $var3 = ";
        } elseif ($var2 == "/") {
            $resultado = $var1 / $var3;
            echo "El resultado de: $var1 / $var3 = ";
        } elseif ($var2 == "*") {
            $resultado = $var1 * $var3;
            echo "El resultado de: $var1 * $var3 = ";
        }

        return $resultado;
    }

    
    //Los resultados se guardan en RETURN y los guardamos en la variable retorno 
    $retorno = Operaciones(12, "/", 3);
    echo "$retorno <br>";
    
    $r2 = Operaciones(12, "-", 4);
    echo "$r2<br>";
    $r3 = Operaciones($retorno, "+", $r2);
    echo "$r3<br>";
    $r4 = Operaciones($retorno, "*", 4);
    echo $r4;
    ?>



