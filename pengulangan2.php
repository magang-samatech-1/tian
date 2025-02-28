<!DOCTYPE html>
<body>
<head>
    <meta charset="utf-8">
    <title> Belajar Php </title>
</head>
</body>

    <h1> loop PHP</h1>

 <?php

$hewan = ['anjng', 'babi', 'cicak', 'domba', 'buaya'];

for($i=0; $i<count($hewan) -1; $i++)
{
    echo "---------";
    echo $hewan [$i];
    echo "--------- <br>";

}
foreach($hewan as $h){
    echo "---------";
    echo "$h";
    echo "--------- <br>";

}

?>

</body>
</html>