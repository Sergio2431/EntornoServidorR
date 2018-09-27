<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 01</title>
</head>
<body>

<h1>Actividad 01</h1>


<div style="background-color: rgb(0,0,0)">rgb(0,0,0)</div>

<?php
$w = 0;

do{
    echo "<div style='background-color: rgb(0,$w,0)'>0,$w,0</div>";
    ++$w;
} while ($w <= 255);

$w = 0;

do{
    echo "<div style='background-color: rgb($w,0,0)'>$w,0,0</div>";
    ++$w;
} while ($w <= 255);

$w = 0;

do{
    echo "<div style='background-color: rgb(0,0,$w)'>0,0,$w</div>";
    ++$w;
} while ($w <= 255);

$w = 0;
$x = 0;

while ($w <= 255 && $w <= 255){
    echo "<div style='background-color: rgb(0,$w,$x)'>0,$w,$x</div>";
    ++$w;
    ++$x;
}

$w = 0;
$x = 0;

while ($w <= 255 && $w <= 255){
    echo "<div style='background-color: rgb($x,$w,0)'>$x,$w,0</div>";
    ++$w;
    ++$x;
}

$w = 0;
$x = 0;

while ($w <= 255 && $w <= 255){
    echo "<div style='background-color: rgb($x,0,$w)'>$x,0,$w</div>";
    ++$w;
    ++$x;
}

$w = 0;
$x = 0;
$z = 0;

while ($w <= 255 && $w <= 255){
    echo "<div style='background-color: rgb($x,$z,$w)'>$x,$z,$w</div>";
    ++$w;
    ++$x;
    ++$z;
}
?>
</body>
</html>