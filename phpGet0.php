<!doctype html>
<html>
     <meta charset="utf-8">
<body>

<form method="post" action ="<?php echo $_SERVER['PHP_SELF'];?>">
    Name:<input type="text" name = "fname">
    <input type ="submit">
    </from>
<br/>
    <a href="haotest.php?ver=1.0&adPositionId=9">发送get请求</a>
    
    

<?php
 $name =  $_REQUEST['fname'];
  echo $name;
  echo "<br>"
 
?>

</body>
</html>