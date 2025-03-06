<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Belajar Php </title>
</head>
</body>

    <h1> Fungsi PHP</h1>

 <?php

function print_text($text, $angka)
{
    $text = "gudang" . $text . " " .$angka;
    echo "---------";
    echo "text";
    echo "---------";
}
function jarak(){
echo "<br>";
}
{
print_text("koding", 21);
jarak();
print_text("perawat", 21);
jarak();
print_text("mengemudi", 213);
jarak();

}
?>

<body>

</html>