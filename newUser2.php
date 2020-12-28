<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
    <title>ここほしマップ</title>
  </head>
  
  <body>

   <?php   //postされたデータを受け取る
    session_start();
    
    $name = (string)$_POST['name'];
    
    $mail = $_POST['email'];
    
    $sex =  $_POST['group1'];
    
    $pass = $_POST['password'];
    
    $year = $_POST['year'];
    
    $month = $_POST['month'];
    
    $day = $_POST['date'];
    
    $_SESSION["name"] = $name;
    $_SESSION["mail"] = $mail;
    $_SESSION["sex"] = $sex;
    $_SESSION["pass"] = $pass;
    $_SESSION["year"] = $year;
    $_SESSION["month"] = $month;
    $_SESSION["day"] = $day;

?>
   
    <h3>名前</h3>
    <p id="name"></p>
    <h3>メールアドレス</h3>
    <p id="mail"></p>
    <h3>性別</h3>
    <p id="sex"></p>
    <h3>生年月日</h3>
    <p id="year"></p>
    <p id="month"></p>
    <p id ="day"></p>
    <h3>パスワード</h3>
    <p id="pass"></p>
    <h3>間違いがない場合は確定ボタンを押してください</h3>
    <input type="button" onclick="location.href='loadSql.php'" value="確定">
    <input type="button" onclick="location.href='newUser.html'" value="戻る">
    
    
    <script>//postで受けっとった値を表示
      let name = '<?php echo $name;?>';
      let sex ='<?php echo $sex;?>';
      let mail='<?PHP echo $mail;?>';
      let pass='<?php echo $pass;?>';
      let year = '<?php echo $year;?>';
      let month = '<?php echo $month;?>';
      let day = '<?php echo $day;?>';

      document.getElementById('name').innerHTML = name;
      
      if(sex === 1){
      document.getElementById('sex').innerHTML = "男性";
      }else{
      document.getElementById('sex').innerHTML = "女性";
      }
      
      
      document.getElementById('mail').innerHTML = mail;

      document.getElementById('pass').innerHTML = pass;
      
      document.getElementById('year').innerHTML = year;
      
      document.getElementById('month').innerHTML = month;
      
      document.getElementById('day').innerHTML = day;
    </script>
    
    
  </body>
  
</html>




