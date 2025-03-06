<!DOCTYPE html>
<body>
<head>
    <meta charset="utf-8">
    <title> Belajar Php </title>
</head>
</body>

    <h1> loop PHP</h1>

 <?php

$i = 0;

/* while($i < count($hewan)){

    echo $hewan[$i]. "<br>";
    $i++;
} */
 
do{
    echo $hewan[$i]. "<br>";
    $i++;
}while($i < count($hewan));



    ?>
</body>
</html>