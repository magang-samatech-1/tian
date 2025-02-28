<!DOCTYPE html>
<body>
<head>
    <meta charset="utf-8">
    <title> Belajar Php </title>
</head>
</body>

    <h1> Associative PHP</h1>

 <?php

$data = array (
    array ("programmer", "21", "males"),
    array ("desainer", "24", "rajin"),
    array ("manager", "34", "males banget")
);

$data[2][0] ="proyek manager";
echo $data[2][0];


?>

</body>
</html>