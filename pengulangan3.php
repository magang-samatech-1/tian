<!DOCTYPE html>
<body>
<head>
    <meta charset="utf-8">
    <title> Belajar Php </title>
</head>
</body>

    <h1> loop PHP</h1>

 <?php

$data = ['nama' =>'tian',
         'umur' =>22,
         'sifat' =>'rajin menabung']; 

foreach ($data as $key => $value){
    echo $value . "<br>";
}

?>

</body>
</html>