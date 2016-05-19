<!doctype html>
<html>
     <meta charset="utf-8">
<body>

<?php

function familyName($fname){
    echo "$fname Zhang.<br>";
}

familyName("wang");
familyName("hao");
    familyName("haohao");
familyName("haoge");
  familyName("haoye");
  
  function setHeight($minheight=50){
      echo "The height is: $minheight <br>";
  }
  
  setHeight(350);
  setHeight();//使用默认值 50
  setHeight(135);
  setHeight(80);
  
  
  function sum($x,$y){
      $z =$x-$y;
  }
  
  echo "5 - 10 = ".sum(5,10)."<br>";
  echo "7 - 13 =" .sum(7,13) ."<br>";
  echo "2 - 4 = ".sum(2,4) ."<br>";
  
?>

</body>
</html>