<!doctype html>
<html>
     <meta charset="utf-8">
<body>

<?php
$t = date("H");

switch($t){
    
    case "19":
        echo "现在7点";
        break;
        
    case "20":
        echo "现在8点";
        break;
        
    case "21";
        echo "现在9点";
        break;
}


  $y = "a1";    
  
  echo (strlen($y)!=5);
    while(strlen($y)!=5){
        echo $y.="s";
        
    }    
    
    
    
    for($x=10; $x<20; $x++){
        echo "输出的数字为 $x <br>";
    }


    $color = array("red","green","blue","yellow");

    foreach($color as $value){
        echo "输出 $value <br>";
    }




  
?>

</body>
</html>