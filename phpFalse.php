<!doctype html>
<html>
     <meta charset="utf-8">
<body>

<?php
$t = date("H");

echo $t;
echo "<br>";

if($t<"20"){
    echo "Have a Good day!";
    echo "<br>";
}


$t = date("H");

if($t <"20"){
    echo "Have a good day!";
    echo "<br>";
}else{
    echo "Have a good night!";
    echo "<br>";
}


if($t<"10"){
    echo "Have a good morning!";
       echo "<br>";
    
}else if($t < "20"){
    echo "Have a good day!";
       echo "<br>";
}else{
    echo "Have a good night!";
       echo "<br>";
}







  
?>

</body>
</html>