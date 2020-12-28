<?php
session_start();

$mail = $_POST['email'];
$pass = $_POST['password'];

$d = mysql_connect("localhost","root","");
mysql_select_db("kokohosi",$d);

$pass_sql = mysql_query("SELECT pass FROM user WHERE mail='$mail'");

$r = mysql_fetch_array($pass_sql);
print($r['pass']);
print($pass);

if(strlen($r['pass']) > 0){
  if($r['pass']=== $pass){
    print("一致");
    header("location: userPage.php");
  }else{
    print("不一致");
  }
}
?>