<!DOCTYPE html>
<body>
<head>
    <meta charset="utf-8">
    <title> Belajar Php </title>
</head>
</body>

    <h1> Associative PHP</h1>

 <?php

$data = array ("nama " => "tian",
               "umur"  => 22 ,  
               "kerja" => "pengangguran"
);
$data2 = array ("istri " => "belum ada",
               "laptop"  => "lenovo" ,  
);
print_r (array_merge ( $data, $data2));

?>

</body>
</html>