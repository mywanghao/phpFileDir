  <?php 
   
   
   function check_input($txt){
       $txt = trim($txt);//ȥ������Ҫ���ַ� 
       $txt = stripslashes($txt);//stripslashesȥ����б��//�ַ�
       $txt = htmlspecialchars($txt);
       echo "your attribute:_".$txt ."<br>";
       return $txt;
   }
   
   //���������Ϣ
   $nameErr = $emailErr = $genderErr = $websiteErr = "";
   $name = $email = $website = $comment = $gender = "";
   
   if($_SERVER["REQUEST_METHOD"]=="POST"){
       
       
       if(empty($_POST["name"])){
           $nameErr =  "name error" ;
       }else{
           $name = check_input($_POST["name"]);
       }
       
          if(empty($_POST["email"])){
           echo "����Ϊ��" ;
       }else{
           if(strspn($_POST["email"],"@")!=0){
               
           $email = check_input($_POST["email"]);
           }else{
               echo "�����ʽ����ȷ";
           }
           
       }
       
          if(empty($_POST["website"])){
           echo "��վΪ��" ;
       }else{
           $website = check_input($_POST["website"]);
       }
       
          if(empty($_POST["comment"])){
           echo "��������Ϊ��" ;
       }else{
           $comment = check_input($_POST["comment"]);
       }
       
          if(empty($_POST["gender"])){
           echo "��������Ϊ��" ;
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