<?php
session_start();
$name = $_SESSION["company_name"];
$store_id = $_POST['radio1'];
$lat_lng = array();
$age1 = $_POST["age1"];
$age2 = $_POST["age2"];
$sex = $_POST["sex"];
$how = $_POST["how"];

$d = mysql_connect("localhost","root","");
mysql_select_db("kokohosi",$d);

$pin_sql = mysql_query("SELECT * FROM pin WHERE store_id='$store_id'");

while($getPin = mysql_fetch_array($pin_sql)){
  array_push($lat_lng,array($getPin['lat'],$getPin['lng']));
}
$lat_lng = json_encode($lat_lng);
 ?>

 <html>
  <head>
    <title>Add Map</title>
    <meta charset="utf-8">
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUHUufeKu4tWEja0nWqsB7RZf6jzuAzF4&callback=initMap&libraries=&v=weekly&libraries=visualization"
      defer
    ></script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  </head>
  <body id="body">
    <div class="ham" id="ham">
	<span class="ham_line ham_line1"></span>
	<span class="ham_line ham_line2"></span>
	<span class="ham_line ham_line3"></span>
</div>
      <div class="button_margin">
    <input type="button" id="button" value="マップ切り替え" class="button" onclick=" change_botton()">
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
   <script src="companyMap.js"></script>
    <!--The div element for the map -->
    <div id="map"></div>

        
    
    <script>
      let name = '<?php echo $name;?>';
      let store_id ='<?php echo $store_id;?>';
      let lat_lng = '<?php echo $lat_lng;?>';
      //console.log(lat_lng);

      document.getElementById('username').innerHTML = name + "さん";
      </script>
    <link rel="stylesheet" type="text/css" href="userMap.css" />
  </body>
</html>