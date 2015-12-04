<?php

if(empty($_GET[submit]))  

{  

?>  
<form enctype="multipart/form-data" 
      action="<?php $_SERVER['PHP_SELF']?>?submit=1" method="post">  
Send this file: <input name="filename" type="file">  
<input type="submit" value="确定上传">  
</form>  
<?php   
}else{  
    $path="test";  


if(!file_exists($path))  
{  
  
    mkdir("$path", 0777);  
} 
$tp = array("image/gif","image/jpg","image/png");  
if(!in_array($_FILES["filename"]["type"],$tp))  
{  
    echo "格式不对";  
    exit;  
}
if($_FILES["filename"]["name"])     
{  
        $file1=$_FILES["filename"]["name"];  
        $file2 = $path.time().$file1;  
        $flag=1;  
}
if($flag) $result=move_uploaded_file($_FILES["filename"]["tmp_name"],$file2);  
if($result)  
{  
    
    echo "<script language='javascript'>";  
    echo "alert(\"上传成功！\");";  
    echo " location='add_picture.php?pname=$file2'";  
    echo "</script>";  
}


}  



