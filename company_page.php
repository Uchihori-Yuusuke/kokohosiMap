<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sample</title>
  <link rel="stylesheet" href="userPage.css">
</head>
<header>
      <ul>
      <li class="topName">ここ欲しマップ</li>
      <a href="topSite.html" ><li id = "logout" class="logout">ログアウト</li></a>
      <li class="user_name" id="user_name"></li>

    </ul>
</header>
<body>
  <script type="text/javascript" src="userPage.js"></script>
  <h2 class="count_pin_title">登録した店の数は<span id="count_pin" class="count_pin"></span>個です</h2>
  <h2 class="title2">需要を知りたい店をえらんでください</h2>
  <form action="companyMap.php" method="post" name="form1">
  <ul>
    <li class="parent" onclick="func1(this)"><span>▶</span>小売業
      <ul id="kouri">
      </ul>
    </li>
    <li class="parent" onclick="func1(this)"><span>▶</span>飲食店
      <ul id="restaurant">
      </ul>
    </li>
    <li class="parent" onclick="func1(this)"><span>▶</span>娯楽
      <ul id="goraku">
      </ul>
    </li>
    <li class="parent" onclick="func1(this)"><span>▶</span>サービス業
      <ul id="sarbisu">
      </ul>
    </li>
      <li class="parent" onclick="func1(this)"><span>▶</span>その他
      <ul id="sonota">
      </ul>
    </li>
  </ul>
  </form>
</body>
</html>


<?php
session_start();
$name = $_SESSION["company_name"];
$id = $_SESSION["id"];

$d = mysql_connect("localhost","root","");
mysql_select_db("kokohosi",$d);

$store_sql = mysql_query("SELECT * FROM store");

while ($store_data = mysql_fetch_array($store_sql)){
  $store_name = $store_data['store_name'];
  $parent = $store_data['parent'];
  $store_id = $store_data['store_id'];
?>
  <script>
    store_name = '<?php echo $store_name;?>';
    parent = '<?php echo $parent;?>';
    store_id = '<?php echo $store_id;?>';
    user_name = '<?php echo $name;?>';
    document.getElementById("user_name").innerHTML = user_name + "さん";
    var parent = document.getElementById(parent);
    
    parent.insertAdjacentHTML('afterbegin',`<li class=\"store_name\" onclick=\'func2(${store_id})\'>${store_name}</li><input type=\"radio\" name=\"radio1\" value=${store_id} id=\"${store_id}\" class=\"radio\">`);
    
    function func2(store_id){
      console.log(store_id);  //画面遷移する
      store_id.checked = true;
      document.form1.submit();
    }
    
    
</script>
<?php
}
?>