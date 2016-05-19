  <?php 
   
   
   function check_input($txt){
       $txt = trim($txt);//去掉不必要的字符 
       $txt = stripslashes($txt);//stripslashes去掉反斜杠//字符
       $txt = htmlspecialchars($txt);
       echo "your attribute:_".$txt ."<br>";
       return $txt;
   }
   
   //保存错误信息
   $nameErr = $emailErr = $genderErr = $websiteErr = "";
   $name = $email = $website = $comment = $gender = "";
   
   if($_SERVER["REQUEST_METHOD"]=="POST"){
       
       
       if(empty($_POST["name"])){
           $nameErr =  "name error" ;
       }else{
           $name = check_input($_POST["name"]);
       }
       
          if(empty($_POST["email"])){
           echo "邮箱为空" ;
       }else{
           if(strspn($_POST["email"],"@")!=0){
               
           $email = check_input($_POST["email"]);
           }else{
               echo "邮箱格式不正确";
           }
           
       }
       
          if(empty($_POST["website"])){
           echo "网站为空" ;
       }else{
           $website = check_input($_POST["website"]);
       }
       
          if(empty($_POST["comment"])){
           echo "名字输入为空" ;
       }else{
           $comment = check_input($_POST["comment"]);
       }
       
          if(empty($_POST["gender"])){
           echo "名字输入为空" ;
       }else{
           $gender = check_input($_POST["gender"]);
       }
       
       
       $name = check_input($_POST["name"]);
       $email = check_input($_POST["email"]);
       $website = check_input($_POST["website"]);
       $comment = check_input($_POST["comment"]);
       $gender = check_input($_POST["gender"]);
   }
   
   
   
   ?>