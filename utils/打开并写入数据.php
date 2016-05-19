<!doctype html>
<html>
     <meta charset="utf-8">
<body>
    
 <?php
 
 //我们打开一个已存在的文件 "newfile.txt"，并向其中写入了//一些新数据：
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
 
 ?>
  
  


</body>
</html>