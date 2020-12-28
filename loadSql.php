   //データベースに登録するページ
   //クライアントには表示されない
   
   
   <?php
    session_start();
    
    $name = $_SESSION["name"];
    $year = $_SESSION["year"];
    $month = $_SESSION["month"];
    $day = $_SESSION["day"];
    $sex = $_SESSION["sex"];
    $pass = $_SESSION["pass"];
    $mail = $_SESSION["mail"];

    $d = mysql_connect("localhost","root","") or die("接続失敗");
    print "接続成功<br>";

    mysql_select_db("kokohosi",$d);
    $r = mysql_query("INSERT INTO user VALUES('$name','$year','$month','$day','$sex','$pass','$mail')");

    if ($r){
      print "INSERT成功<br>";
    }else{
      print "INSERT失敗<br>";
    }

    mysql_close($d) or die("切断失敗");
    print "切断成功";
?>

//ユーザーページへ遷移する
<script>
  window.onload = function(){
    window.location.href = 'userPage.php'
}
</script>
