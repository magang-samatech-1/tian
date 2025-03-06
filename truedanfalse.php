<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Belajar Php </title>
</head>
</body>

    <h1> logika di PHP</h1>

 <?php

$uang_programmer = '1000';
$keyboard = '2000';
$uang_desainer = '4000';

if($uang_programmer > $keyboard) {
    echo 'dibeli!';
} else if($uang_programmer == $keyboard)    
    echo 'dibeli oleh designer';

    if ($uang_desainer >= $keyboard * 2) {
        echo 'dibeli duakali oleh designer';
}
else{
    echo 'ngga cukup';
}
?>

<body>

</html>