<?php
session_start();

$mail = htmlspecialchars($_POST['email'],ENT_QUOTES);
$pass = htmlspecialchars($_POST['password'],ENT_QUOTES);

$d = mysql_connect("localhost","root","");
mysql_select_db("kokohosi",$d);

$pass_sql = mysql_query("SELECT * FROM company WHERE id='$mail'");

$getUser = mysql_fetch_array($pass_sql);

if(strlen($getUser['pass']) > 0){
  if($getUser['pass']=== $pass){
    print("一致");
    print $getUser['pass'];
    $_SESSION["company_name"] = $getUser['name'];
    $_SESSION["id"] = $getUser['id'];
    $_SESSION["pass"] = $getUser['pass'];
    header("location: company_page.php");
  }
  else{
    session_destroy();
?>
<script>
   alert("IDかパスワードが違います")
   window.location.href ='company_login.html';
</script>
 
 <?php
  }
}
else{
    session_destroy();
    ?>
<script>
   alert("ユーザー登録されていません");
   window.location.href = 'company_login.html';
</script>
<?php
}
?>