<?php
session_start();
$name = $_SESSION["name"];
$id = $_SESSION["id"];
$store_id = $_POST['radio1'];
 ?>

 <html>
  <head>
    <title>Add Map</title>
    <meta charset="utf-8">
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUHUufeKu4tWEja0nWqsB7RZf6jzuAzF4&callback=initMap"
      defer
    ></script>

  </head>
      <div class="button_margin">
    <input type="button" id="button" value="ここにする！" class="button" onclick=" bottonClick()">
    </div>
  <body id="body">
    <div class="ham" id="ham">
	<span class="ham_line ham_line1"></span>
	<span class="ham_line ham_line2"></span>
	<span class="ham_line ham_line3"></span>
</div>
<div class="menu_wrapper" id="menu_wrapper">
	<div class="menu">
    	<ul>
        	<li><h3 href="#1" id="username" class="username"></h3></li>
        	<li><p></p></li>
        	<li><a href="userPage.php" class="hum_meny">戻る</a></li>
        	<li><p></p></li>
        	<li><a href="topSite.html" class="hum_meny">ログアウト</a></li>
        	<li><p></p></li>
        	<li><a href="" class="hum_meny">ヘルプ</a></li>
    	</ul>
	</div>
</div>
   <script src="userMap.js"></script>
    <!--The div element for the map -->
    <div id="map"></div>

    <form name="form1" action="userMap2.php" method="post">
       <input type="text" id="store_id" name="store_id">
       <input type="email" id="mail" name="mail" class="mail">
       <input type="text" id="lat" name="lat" class="lat" width="100px">
       <input type="text" id="lng" name="lng" class="lng" width="100px">
        
    
    <script>
      let name = '<?php echo $name;?>';
      let id='<?PHP echo $id;?>';
      let store_id ='<?php echo $store_id;?>';
      
      document.getElementById('mail').value = mail;

      document.getElementById('store_id').value = store_id;
      
      document.getElementById('username').innerHTML = name + "さん";
      </script>
    
    </form>
    <link rel="stylesheet" type="text/css" href="userMap.css" />
  </body>
</html>