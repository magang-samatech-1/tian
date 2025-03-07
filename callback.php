<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Belajar Php </title>
</head>
</body>

    <h1> Fungsi PHP</h1>

 <?php

function berteriak($callback){
    

    if (is_callable($callback)){
        call_user_func($callback, 'selamat datang');

    
}else {
    echo 'dia bukan fungsi';
}

}

$panggil = function($text){
echo $text;
};
berteriak ($panggil);

?>


<body>

</html>