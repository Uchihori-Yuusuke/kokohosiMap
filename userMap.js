var map;
var marker = null;
var lat;
var lng;
var ham_flag = 0;

// Initialize and add the map
function initMap() {
  navigator.geolocation.getCurrentPosition(cmanGetOk,cmanGetErr)//現在位置を取得するメソッド
  
const ham = document.getElementById('ham');
const menu_wrapper = document.getElementById('menu_wrapper');
const body = document.getElementById('body');
const button = document.getElementById('button');
ham.addEventListener('click', function() {
    
    if(ham_flag === 0){
      ham_flag = 1;
      humMenu();
      ham.style.display = "none";
      body.style.top = "0px";
      button.style.bottom = "60px";
    }
});

}

function humMenu(){
  ham.classList.toggle('clicked');
  menu_wrapper.classList.toggle('clicked');
}


function cmanGetOk(argPos){//現在位置の取得に成功したときに呼びだされる関数
  lat = argPos.coords.latitude;//緯度取得
  lng = argPos.coords.longitude;//経度取得
  //マップを生成
  map = new google.maps.Map(document.getElementById("map"), {
    zoom: 16,
    center: new google.maps.LatLng(lat,lng),
    disableDefaultUI:true,
    zoomControl: true,
    maxZoom:30,
    minZoom:15,
    clickableIcons:true,
    /*restriction: {
		latLngBounds: {
			north: lat + 0.3,
			south: lat - 0.3,
			west: lng + 0.3,
			east: lng - 0.3
		},
		strictBounds: true
	}*/
  });
  
    map.addListener('click',function(e){//マップをクリックしたときの処理
      const ham = document.getElementById('ham');
      const body = document.getElementById('body');
      const button = document.getElementById('button');
       if(ham_flag === 1){
         humMenu();
         ham_flag = 0;
         ham.style.display = "";
         body.style.top = "-60px";
         button.style.bottom = "0px";
       }else{
         lat = e.latLng.lat();
       lng = e.latLng.lng();
      //マーカーを設置
    this.panTo(e.latLng);
      if(marker != null){
        marker.setMap(null);
      }
    
     marker = new google.maps.Marker({
      position: e.latLng,
      map : map
    });
       }
       
      
    

  });
}

function bottonClick(){
  
  if(marker != null){
    var result = confirm('この地点を登録してもよろしいですか?');
    if(result){
      document.getElementById("lat").value = lat;
      document.getElementById("lng").value = lng;
     console.log(document.getElementById("lat").value); console.log(document.getElementById("lng").value);
      document.form1.submit();
    }
    else{
      
    }
  }else{
    alert("マーカーが設置されていません");
  }
  
  
}


function cmanGetErr(argErr){//現在位置取得に失敗したときに呼びだされる関数

}


