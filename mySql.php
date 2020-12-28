<?php
$d = mysql_connect("localhost","root","") or die("接続失敗");
print "接続成功<br>";

mysql_select_db("kokohosi",$d);
$r = mysql_query("INSERT INTO user VALUES('久田こ',1939,12,25,2,'12345678909a','1aaa3435427899')");

if ($r){
  print "INSERT成功<br>";
}else{
  print "INSERT失敗<br>";
}

mysql_close($d) or die("切断失敗");
print "切断成功";
?>