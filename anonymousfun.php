<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Belajar Php </title>
</head>
</body>

    <h1> Fungsi PHP</h1>

 <?php
$a = 20000;
$b = 30;
function menghitung(){
global $a, $b;

$c = $a + $b;
return $c;
}
//echo menghitung();

$ngetik = function($text){
    echo $text;
};

$greeting = $ngetik;

$greeting (' selamat datang semuanya 123');


?>


<body>

</html>