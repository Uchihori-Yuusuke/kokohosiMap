<?php
session_start();

$mail = htmlspecialchars($_POST['email'],ENT_QUOTES);
$pass = htmlspecialchars($_POST['password'],ENT_QUOTES);

$d = mysql_connect("localhost","root","");
mysql_select_db("kokohosi",$d);

$pass_sql = mysql_query("SELECT * FROM user WHERE mail='$mail'");

$getUser = mysql_fetch_array($pass_sql);

if(strlen($getUser['pass']) > 0){
  if($getUser['pass']=== $pass){
    print("一致");
    print $getUser['pass'];
    $_SESSION["name"] = $getUser['name'];
    $_SESSION["mail"] = $getUser['mail'];
    $_SESSION["sex"] = $getUser['sex'];
    $_SESSION["pass"] = $getUser['pass'];
    $_SESSION["year"] = $getUser['bd_year'];
    $_SESSION["month"] = $getUser['bd_month'];
    $_SESSION["day"] = $getUser['bd_month'];
    header("location: userPage.php");
  }
  else{
    session_destroy();
?>
<script>
   alert("メールアドレスかパスワードが違います")
   window.location.href ='login.html';
</script>
 
 <?php
  }
}
else{
    session_destroy();
    ?>
<script>
   alert("ユーザー登録されていません");
   window.location.href = 'login.html';
</script>
<?php
}
?>