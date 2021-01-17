<!DOCTYPE htmel>
<html>
<head>
  <meta charset="utf-8">
</head>
<title>Hello shop</title>
<body>
<?php
$staff_name=$_POST['name']; //前の画面から入力値を受け取り、$staff_nameに格納
$staff_pass=$_POST['pass']; //前の画面から入力値を受け取り、$staff_passに格納
$staff_pass2=$_POST['pass2']; //前の画面から入力値を受け取り、$staff_pass2に格納

$staff_name=htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8'); //文字列に変換（セキュリティ対策）
$staff_pass=htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8'); //文字列に変換（セキュリティ対策）
$staff_pass2=htmlspecialchars($staff_pass2,ENT_QUOTES,'UTF-8'); //文字列に変換（セキュリティ対策）

//$staff_nameがカラならエラーメッセージを表示する
//$staff_nameが入力されていれば、$staff_nameを表示する
if($staff_name==''){
  print 'スタッフ名が入力されていません。<br />';
}
else
{
  print 'スタッフ名：';
  print $staff_name;
  print '<br />';
}

//$staff_passがカラならエラーメッセージを表示する
if($staff_pass==''){
  print 'パスワードが入力されていません。<br />';
}

//$staff_pass、$staff_pass2が一致しなければ、エラーメッセージを表示する
if($staff_pass!=$staff_pass2){ //もしパスワード1とパスワード2の値が異なるなら
  print 'パスワードが一致しません。<br />';
}

//$staff_name、$staff_pass、$staff_pass2がカラなら、または、$staff_pass、$staff_pass2が一致しなければ、戻るボタンのみを表示する
//入力項目が適切なら、戻るボタンとOKボタンを表示する。
if($staff_name==''|| $staff_pass=='' || $staff_pass2=='' || $staff_pass!=$staff_pass2){
  print '<form>';
  print '<input type="button" onclick="history.back()" value="戻る">';
  print '<form>';
}
else
{
  $staff_pass=md5($staff_pass); //パスワードをMD5規約に則って32桁のランダム値に変換
  print '<form method="post" action="staff_add_done.php">';
  print '<input type="hidden" name="name" value="'.$staff_name.'">'; //'<input type="hidden" name="name" value="'と$staff_nameをドットで連結
  print '<input type="hidden" name="pass" value="'.$staff_pass.'">'; //hiddenにすることで画面に表示することなく次の画面に値を引き渡せる
  print '<br />';
  print '<input type="button" onclick="history.back()" value="戻る">';
  print '<input type="submit" value="OK">';
  print '</form>';
}
?>
</body>
</html>