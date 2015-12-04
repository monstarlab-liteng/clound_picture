<?php
$east=$_POST['east'];
$west=$_POST['west'];
//var_dump($east);
//var_dump($west);
//if(  empty($east) && empty($west)   ){
?>
<form action="pictures_list.php" method="post">
    <p>East:<input type="text" name="east"></p>
        <p>West:<input type="text" name="west"></p>
<p><input type="submit" name="submit" value="提交">
</form>
<?php
if  (!empty($east) && !empty($west)){
   echo "不能两个都输入!";   
}
else{
    if($east>180||$west>180){echo "所输数字不能大于180";}
    
    
 if ($east<0||$west<0){echo "不能小于0!";
      }
      if($east==0||$west=0){
          echo "0时区";
      }
      
      
//if ($east=0||$west=0) {
          //echo "此时区是0时区!";}
    else {
$value = !empty($east)? $east:$west;
$a=$value;
$tz_string = !empty($east) ? '东':'西';
$c=($a+7.50)/15;
$b=floor($c);
//echo $c."<br>".$b;
if ($b==0){
echo "此时区是零时区";}
else if ($b>0){
    echo "此时区是".$tz_string.$b."区";
}
}
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

