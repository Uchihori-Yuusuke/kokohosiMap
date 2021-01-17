 function func() {
  // ここに#buttonをクリックしたら発生させる処理を記述する
  var name = getName();
  var mail = getMail();
  var sex = getSex();
  var year = getYear();
  var month = getMonth();
  var day = getDay();
  var pass = getPass();
  var pass2 = getPass2();
  var form = formTrue(name,mail,sex,year,month,day,pass,pass2);//フォームの空欄チェックメソッドを呼び出す
  

  
};

function getName(){  //名前を取得
  var input_name = document.getElementById("name").value;
  return input_name;
}

function getMail(){  //メールアドレスを取得
  var input_email = document.getElementById("email").value;
  return input_email;
}

function getSex(){  //性別を取得
  check1 = document.form1.gender1.checked;
  check2 = document.form1.gender2.checked;
  var sex;
  if(check1 == true){
    sex = 1
  }else if(check2 == true){
    sex = 2
  }else{
    sex = 3
  }
  return sex;
}

function getYear(){  //生年取得を取得
  var input_year = document.getElementById("born_year").value;
  return input_year;
}

function getMonth(){  //生年取得を取得
  var input_month = document.getElementById("born_month").value;
  return input_month;
}

function getDay(){  //生年取得を取得
  var input_day = document.getElementById("born_date").value;
  return input_day;
}

function getPass(){  //パスワードを取得
  var input_pass = document.getElementById("password").value;
  return input_pass;
}

function getPass2(){  //パスワードを取得
  var input_pass2 = document.getElementById("password2").value;
  return input_pass2;
}

function formTrue(name,mail,sex,year,month,day,pass,pass2){
  //フォームに空欄がないかチェック
  if(name.length===0 || mail.length===0 || sex.length ===0|| year.length ===0 || day.length === 0 || month.length === 0 || pass.length === 0 || pass2.length === 0) {
    console.log("1");
    alert("空欄があります");
    return;
  }
  else if(year > 2021 || year < 1921 || month > 12 || month < 1 || day < 1 || day > 31){
          alert("生年月日が無効です");
          }
  else if(pass.length <= 7){
    console.log("2");
    alert("パスワードが短すぎます");
    return;
  }
  else if(pass !== pass2){
    alert("パスワードが一致しません");
    console.log("3")
    return;
  }
  else{
    console.log("4");
    document.form1.submit();//空欄がない場合次画面へ遷移する
  }
}