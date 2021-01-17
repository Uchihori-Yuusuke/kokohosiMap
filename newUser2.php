<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="newUser2.css">
    <title>ここほしマップ</title>
  </head>
  <header>
      <h2 class="topName">ここホシ</h2>
  </header>
  <body>

   <?php   //postされたデータを受け取る
    session_start();
    
    $name = htmlspecialchars($_POST['name'],ENT_QUOTES);
    
    $mail = htmlspecialchars($_POST['email'],ENT_QUOTES);
    
    $sex =  htmlspecialchars($_POST['group1'],ENT_QUOTES);
    
    $pass = htmlspecialchars($_POST['password'],ENT_QUOTES);
    
    $year = htmlspecialchars($_POST['year'],ENT_QUOTES);
    
    $month = htmlspecialchars($_POST['month'],ENT_QUOTES);
    
    $day = htmlspecialchars($_POST['date'],ENT_QUOTES);
    
    $_SESSION["name"] = $name;
    $_SESSION["mail"] = $mail;
    $_SESSION["sex"] = $sex;
    $_SESSION["pass"] = $pass;
    $_SESSION["year"] = $year;
    $_SESSION["month"] = $month;
    $_SESSION["day"] = $day;

?>
   <h2 class="title">確認</h2>
    <h3>名前</h3>
    <p id="name" class="form"></p>
    <h3>メールアドレス</h3>
    <p id="mail" class="form"></p>
    <h3>性別</h3>
    <p id="sex" class="form"></p>
    <h3>生年月日</h3>
    <ul>
    <li><p id="year" class="form"></p></li>
    <li><p id="month" class="form"></p></li>
    <li><p id ="day" class="form"></p></li>
    </ul>
    <h3>パスワード</h3>
    <p id="pass"  class="form"></p>
    <h3>間違いがない場合は確定ボタンを押してください</h3>
    <ul>
    <li><input type="button" onclick="location.href='loadSql.php'" value="確定" class=button></li>
    <li><input type="button" onclick="location.href='newUser.html'" value="戻る" class="button">
    </li>
    </ul>
    
    <script>//postで受けっとった値を表示
      let name = '<?php echo $name;?>';
      let sex ='<?php echo $sex;?>';
      let mail='<?PHP echo $mail;?>';
      let pass='<?php echo $pass;?>';
      let year = '<?php echo $year;?>';
      let month = '<?php echo $month;?>';
      let day = '<?php echo $day;?>';

      document.getElementById('name').innerHTML = name;
      
      console.log(sex);
      
      if(sex == 1){
      document.getElementById('sex').innerHTML = "男性";
      }else{
      document.getElementById('sex').innerHTML = "女性";
      }
      
      
      document.getElementById('mail').innerHTML = mail;

      document.getElementById('pass').innerHTML = pass;
      
      document.getElementById('year').innerHTML = year + "年";
      
      document.getElementById('month').innerHTML = month + "月";
      
      document.getElementById('day').innerHTML = day + "日";
    </script>
    
    
  </body>
  
</html>




