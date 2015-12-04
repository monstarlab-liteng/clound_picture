<html>
    <body>
        <?php
$name=$_POST["name"];
$password=$_POST["password"];
if ( !(isset($name)||isset($password))  ){  
?>
 <h1>Please Log IN</h1>
<form method='post' action='login.php'>
<p>name:<input type="text" name="name"></p> 
<p>password:<input type="text" name="password"></p>
        <p><input type="submit" name="submit" value="登录"></p>
</form>


        <?php
}else {
    $mysql=mysqli_connect("localhost","root","root");
    if(!mysql){
        echo 'wrong 1';
        exit;
    }
    $selected=mysqli_select_db($mysql,"cloud_picture");
    if(!$selected){
        echo "wrong 2";
        exit;    
    }
    $query="select count(*)from t_user where
        name='".$name."'and
            password='".$password."'";           
     $result=mysqli_query($mysql,$query);
         if(!$result){
             echo 'wrong 3';
             exit;
             }
     $row=mysqli_fetch_row($result);
         $count=$row[0];
             if($count>0){
                  echo 'Welcome!'."<br>".$name."!";
                 
                     }else {
                     echo 'Go away!';
                     }                   
}
?>
</body>
</html>





