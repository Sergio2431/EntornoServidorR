<?php

function negrita($elem){
    return "<b>".$elem."</b>";
}
//Creamos las variables
$nombre= (empty($_POST['nombre'])) ? 'El campo nombre esta vacio, rellenalo' : $_POST['nombre'];
$texto= (empty($_POST['texto'])) ? 'El campo texto esta vacio, rellenalo' : $_POST['texto'];
$palabras= (empty($_POST['palabras'])) ? 'El campo palabras esta vacio, rellenalo' : $_POST['palabras'];


//Dar alerta si los campos estan vacios

if ($nombre === 'El campo nombre esta vacio, rellenalo'
|| $texto === 'El campo texto esta vacio, rellenalo'
|| $palabras === 'El campo palabras esta vacio, rellenalo') {    
    echo "Alguno de los campos no se ha rellenado ";
}else {

    $arrayTexto = explode (" ",$texto);
    $arrayPalabras = explode(" ",$palabras);

    echo "<h2><b>$nombre</b></h2>";

    foreach ($arrayTexto as $value) {
        $encontrado = false;
            foreach ($arrayPalabras as $palabra) {
                if ($palabra === $value) {
                    $encontrado=true;
                }
            }
            if ($encontrado) {
                echo "<b>$value</b> ";
            }else {
                echo $value." ";
            }
        }           
}

?>