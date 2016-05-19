<!doctype html>
<html>
     <meta charset="utf-8">
<body>

<?php

//基本运算符
    $x=10;
    echo $x;
    echo "<br>";
    
    $y =20;
    $y +=100;
    echo $y;
    echo "<br>";
    
    $z = 50;
    $z -=25;
    echo $z;
    echo "<br>";
    
    $i =5;
    $i *=6;
    echo $i;
    echo "<br>";
    
    $j=10;
    $j /=5;
    echo $j;
    echo "<br>";
    
    $k = 15;
    $k %=4+5;
    echo $k;
    echo "<br>";
    
    
    //串接字符串 php的串接以 .
    
    $txt1 = "aaaa";
    $txt2 = $txt1 . "bbbb";
    echo $txt2;
    echo "<br>";
    
    //串接赋值
    
    $x = "hello";
    $x .="world!";
    echo $x ;
     echo "<br>";
     
     // ++$x 前递增
     $x = 10;
     echo ++$x ;//输出11；
     echo "<br>"; 
     //$x++
     $y =10;
     echo  $y++;//输出10;
      echo "<br>";
     //--$x
     $z = 5;
     echo --$z;//输出4；
      echo "<br>";
     //$x--
     $i= 5;
     echo $i--;
      echo "<br>";
      
      
     $x =100;
     $y = 100;
     
     //== 等于 
     var_dump($x==$y);
      echo "<br>";
      
      //=== 判断类型是否相等
      var_dump($x===$y);
      echo "<br>";
      
      // != 不等于
      var_dump($x!=$y);
       echo "<br>";
       
       //！== 类型相同 返回 false 
       var_dump($x!==$y);
         echo "<br>";
       
       $a=50;
       $b=90;
       
       var_dump($a > $b);
         echo "<br>";
         
         var_dump($a < $b);
         
       
       //php数组运算符
       
       $x = array("a" => "red" ,"b" => "green");
       $y = array("c" => "blue" ,"d" => "yellow");
       $z = $x + $y ;//$x + $ y 的联合
       
       var_dump($z);
       echo "<br>";
       var_dump($x==$y);//false
       var_dump($x === $y );//true
       var_dump($x != $y);//false;
       var_dump($x <> $y);//true ; 不相等的符号
       var_dump($x !== $y);//true
       
       
       
     
  
?>

</body>
</html>