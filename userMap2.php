<?php
$mail = $_POST["mail"];
$store_id = $_POST['store_id'];
$lat = $_POST["lat"];
$lng = $_POST['lng'];


    $d = mysql_connect("localhost","root","") or die("接続失敗");

    
    
    mysql_select_db("kokohosi",$d);

    $q = mysql_query("SELECT * FROM pin WHERE mail = '$mail' AND store_id = '$store_id'");

    $get_data = mysql_fetch_array($q);

    if(strlen($get_data['mail']) > 0){
      mysql_query("UPDATE pin SET lat = '$lat',lng = '$lng' WHERE mail = '$mail' AND store_id = '$store_id'");
    }else{
      $r = mysql_query("INSERT INTO pin VALUES('$mail','$store_id','$lat','$lng')");
    }
 ?>
 
 <!DOCTYPE html>
 <html lang="jp">
 <head>
   <meta charset="UTF-8">
   <title>ここほしマップ</title>
 </head>
 <body>
   <h1>登録ありがとうございました！</h1>
   <p><img src="Images/thanks.jpg"></p>
   <p><a href="userPage.php">マイページにもどる</a>
    <link rel="stylesheet" type="text/css" href="userMap2.css" /></p>
  </body>

 </html>
 