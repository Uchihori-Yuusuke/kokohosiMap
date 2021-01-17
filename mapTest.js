var map;
// Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: -25.344, lng: 131.036 };
  // The map, centered at Uluru
  map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru,
    disableDefaultUI:true,
  });
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({
    map: map, position: new google.maps.LatLng(uluru.lat, uluru.lng),
  });
  
  map.addListener('click',function(e){
    console.log(e.latLng.lat());
    console.log(e.latLng.lng());
    console.log(e.latLng.toString());
    this.panTo(e.latLng);
    var marker = new google.maps.Marker({
    map: map, position: e.latLng,
  });
    marker.addListener('click', function(){
        var infoWindow = new google.maps.InfoWindow({
  position: map.getCenter(),
  content: "This is a Info Window!"
})
infoWindow.open(map);
      });
  });
  
  const ham = document.getElementById('ham');
const menu_wrapper = document.getElementById('menu_wrapper');
ham.addEventListener('click', function() {
	ham.classList.toggle('clicked');
	menu_wrapper.classList.toggle('clicked');
});
}




