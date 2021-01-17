var map;
var lat;
var lng;
var ham_flag = 0;
var lat_lng5 = [];

// Initialize and add the map
function initMap() {
  // The location of Uluru
  console.log(lat_lng);
  var lat_lng1 = lat_lng.split('[').join('');
  var lat_lng2 = lat_lng1.split(']').join('');
  var lat_lng3 = lat_lng2.split('"').join('');
  var lat_lng4 = lat_lng3.split(',');
  
  for(var i = 0; lat_lng4.length > i + 1; i = i + 2){
      lat_lng5.push(Number(lat_lng4[i]),Number(lat_lng4[i + 1]));
  }

  console.log(lat_lng5);
  
  console.log(lat_lng4);
  

  const uluru = { lat: lat_lng5[0], lng: lat_lng5[1] };
//  const uluru = { lat: -25.344, lng: 131.036 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru,
  });
  // The marker, positioned at Uluru
  console.log(lat_lng5.length);
    for(var i = 0; lat_lng5.length > i + 1; i++){
        const uluru = { lat: lat_lng5[i], lng: lat_lng5[i + 1] };
    const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
  }

  
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
    }
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
       }else{
        
      }
  });

}

function humMenu(){
  ham.classList.toggle('clicked');
  menu_wrapper.classList.toggle('clicked');
}
  

