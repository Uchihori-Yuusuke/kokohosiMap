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

    $mail_sql = mysql_query("SELECT mail FROM user WHERE mail='$mail'");//ログインidのメールアドレスが既に存在しているか確認する
    $mail_data = mysql_fetch_array($mail_sql);
    $mail_data2 = $mail_data['mail'];

    if($mail === $mail_data2){
?>
      <script>
         console.log('<?php echo $mail_data2;?>');
         alert("このメールアドレスは既に使われています。");
         window.location.href ='newUser.html';
      </script>
    
<?php
    }else{
       
      
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
      
<?php
        }
?>

