 function func() {
  // ここに#buttonをクリックしたら発生させる処理を記述する
  var mail = getMail();
  var pass = getPass();
  var form = formTrue(mail,pass);//フォームの空欄チェックメソッドを呼び出す
  

  
};

function getMail(){  //メールアドレスを取得
  var input_email = document.getElementById("email").value;
  return input_email;
}

function getPass(){  //パスワードを取得
  var input_pass = document.getElementById("password").value;
  return input_pass;
}

function formTrue(mail,pass){
  //フォームに空欄がないかチェック
  if(mail.length===0 ||pass.length === 0) {
    console.log("1");
    alert("空欄があります");
    return;
  }
  else{
    console.log("3");
    document.form1.submit();//空欄がない場合次画面へ遷移する
  }
}