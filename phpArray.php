<!doctype html>
<html>
     <meta charset="utf-8">
<body>

<?php

    //数组在单个变量中存储多个值:
    $cars=array("Volvo","BMW","saab");
    echo "I like " .$cars[0].",".$cars[1].",".$cars[2];
    
    
    /**
     在php中，有三种数组类型:
     索引数组 带有数字索引的数组
     关联数组 带有指定建的数组
     多位数组 包含一个或多个数组的数组
     */
     
     //索引数组
    $cas = array("a","b","c");
    
    //手动分配索引
    $cas[0] = "aa";
    $cas[1] = "bb";
    $cas[2] = "cc";
    $cas[4] = "ee";
    echo "I like " .$cas[0].",".$cas[1].",".$cas[2]."m".$cas[4]."--";
    echo "<br>";
    
    //获得数组的长度 count(); 函数
    
    echo count($cas);
    
    //循环遍历出数组的所有值
    $lenth = count($cas);
    
    for($x= 0; $x< $lenth ; $x++){
        echo $cas[$x];
        echo "<br>";
    }
    
    //php关联数组
    //第一种方法
    $age = array("a"=>"1" ,"b"=>"2","c"=>"3");
    //第二种方法
    $age["a"] = "11";
    $age["b"] = "22";
    $age["c"] = "33";
    
    foreach($age as $x){
        echo "$x <br>";
         if($x=="22"){
            break;
        }
    }
    
    //遍历出关联 以及 Kay
    
    foreach($age as $x => $x_value){
        echo "Key=".$x."Value = ".$x_value;
        echo "<br>";
    }
    
    
    


?>

</body>
</html>