<html>
    <head>
    <title>Actividad02</title>
    </head>
    <body>
        <h1>Actividad02</h1>

        <h2>Tu color es: </h2>
    
    <?php
    
    $red1=$_POST['red'];
    $green1=$_POST['green'];
    $blue1=$_POST['blue'];

    function validar ($red, $green, $blue){
        if($red<0 || $green<0 || $blue<0){
            echo "El numero que introduces tienes que ser mayor que 0";
            return false;
        }elseif($red>255 || $green>255 || $blue>255){
            echo "El numero que introduces tiene que ser menor de 255";
            return false;      
        }else{
            return true;
        }
    }

    $value = validar($red1,$green1,$blue1);

    if ($value==true) {
        echo "<div>". sprintf('#%02x%02x%02x', $red1,$green1,$blue1)."</div>";
        echo "<div style= 'height:100px; background-color:rgb($red1,$green1,$blue1);'></div>";
    }
?>    