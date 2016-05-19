<!doctype html>
<html>
     <meta charset="utf-8">
<body>
    
 <?php
 
 //使用 isset 检测是否设置了cookie
 if(isset($_COOKIE["user"])){
     echo "welcome user " .$_COOKIE["user"] ."<br>";
 }else{
     echo "welcome first login my website";
 }
 
 
    //取cookie
    echo $_COOKIE["user"];
    
    print_r($_COOKIE);
 
 ?>
  
  


</body>
</html>