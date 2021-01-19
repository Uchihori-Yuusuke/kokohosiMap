var map;
var lat;
var lng;
var ham_flag = 0;
var lat_lng5 = [];
var markers = [];
const imagePath = "https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m";
var pin_flag = 0;
var markerClusterer;

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
    zoom: 7,
    center: new google.maps.LatLng(lat,lng),
    disableDefaultUI:true,
    zoomControl: true,
    clickableIcons:true,
  });
  

  pin();
  
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
       /*lat = e.latLng.lat();
       lng = e.latLng.lng();
       this.panTo(e.latLng);*/
      }
  });
  

  
  
  
  
}


function change_botton(){
  if(pin_flag === 0){
    clearMarkers();
/*    for (var i = 0; i < markers.length; i++) {
      markerCluster.removeMarker(markers[i]);
    }*/
    //markers = [];
    markerClusterer.clearMarkers();
    pin_flag = 1;
    console.log(0);
  }else{
    showMarkers();
    //pin();
     markerClusterer = new MarkerClusterer(map, markers, {imagePath: imagePath});
    pin_flag = 0;
    console.log(1);
  }
}

function setMapOnAll(map1) {
  for (let i = 0; i < markers.length; i++) {
    markers[i].setMap(map1);
    
  }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
  setMapOnAll(null);
}

// Shows any markers currently in the array.
function showMarkers() {
  setMapOnAll(map);
}

function deleteMarkers() {
  clearMarkers();
  markers = [];
  console.log(markers);
}

function cmanGetErr(argErr){//現在位置取得に失敗したときに呼びだされる関数

}


function pin(){
  
    var lat_lng1 = lat_lng.split('[').join('');
    var lat_lng2 = lat_lng1.split(']').join('');
    var lat_lng3 = lat_lng2.split('"').join('');
    var lat_lng4 = lat_lng3.split(',');
  
    for(var i = 0; lat_lng4.length > i + 1; i = i + 2){
    lat_lng5.push(Number(lat_lng4[i]),Number(lat_lng4[i + 1]));
    }
    var lat_h = 0;
    var lng_h = 1;
    for(var j = 0; lat_lng5.length/2 > j; j++){
      
    var pin_location = { lat: lat_lng5[lat_h], lng: lat_lng5[lng_h] };
      lat_h = lat_h + 2;
      lng_h = lng_h + 2;
    var marker = new google.maps.Marker({
    position: pin_location,
    map: map,
  });
      markers.push(marker);
    }
  
  lat_h = 0;
  lng_h = 1;
  
 markerClusterer = new MarkerClusterer(map, markers, {imagePath: imagePath});

}

