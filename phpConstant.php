<!doctype html>
<html>
     <meta charset="utf-8">
<body>

<?php

 $x = true;
 var_dump($x);
 echo "<br>";
 
 $x = false;
 var_dump($x);
 echo "<br>";
 
 $x = 047;
 var_dump($x);
  
  //下面d离职中 测试不同的数组 php var——dump(); 会返回变量的数据类型和值
  //声明变量
  $cars = array("volvo","BMW","SAAB");
  var_dump($cars);
  
  
  //对象是存储数据和有关如何处理数据的信息的数据类型。
  //在php中，必须明确的声明对象。
  //首先我们必须声明对象的泪。对此。我们使用class关键词。类是包含属性和方法的结构
  //然后我们在对象类中定义数据类型，然后再该类的实例中使用此数据类型；
  
  class Car{
      
      var $color;
      function Car($color="green"){
          $this->color = $color;
          
      }
      
      
      function what_color(){
          
          return $this->color;
      }
      
      
  }
  
  $x = "Hello word";
  $x = null;
  var_dump($x);
    
    echo "<br>";
    
    $x ="aaaaaaaaaaaaaaaaaaaaaaa";
    
    //strlen 返回字符串的长度
    echo strlen($x);

  //strops() 函数用于检索字符串内指定的字符或者文本 
  //如果找到匹配 则会返回首个匹配的字符位置 如果未找到匹配 则将返回 FALSE ;
  //下例检索字符串“hello word”中的文本 worl ；
  
     echo "<br>";
  //检索 x 里面是否包含 word 
  echo strpos($x,"a");
  
  //常量类似变量 但是常量一旦被定义就无法更改或撤销定义 
  
  /**
    
   php 常量
    常量是单个值的标识符 在脚本中无法改变该值
    有效的常量名以字符或下划线开头 常量名称前面没有 $符号
    
    与变量不同 常量贯穿整个脚本是全局自动的
    d    */
    
    /**
      如需设置常量，请使用 define()函数 - 它使用 三个参数
      首个参数定义常量的名称
      第二个参数定义常量的值
      可选的第三个参数规定常量名是否对大小写敏感 默认是 false 敏感
     */

    define("GREETING","Welcome to w3school.cn");
    
            
    echo "<br>";
    echo GREETING;
    
    define("hao","haohaoaaa",true)
    
    
  
?>

</body>
</html>