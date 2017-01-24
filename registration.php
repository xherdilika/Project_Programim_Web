<?php
  Include('db.php');
  if(isset($_REQUEST['submit'])!='');
  {
    $sql="insert into Perdorues(username,email,password) values('".$_REQUEST['username']."','".$_REQUEST['email']."', '".$_REQUEST['password']."')";
    $res = mysql_query($sql);
    if($res){
      echo "Rregjistrimi u kry";

    }else {
      echo "Ka nje problem o bish";
    }
  }
 ?>
