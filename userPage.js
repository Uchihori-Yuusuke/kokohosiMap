

function func1(e) {
  e.classList.toggle("active");
  console.log(e);
  var child = e.getElementsByTagName("span");
  if(child[0].innerHTML == "▶"){
    child[0].innerHTML = "▼";
  }else{
    child[0].innerHTML = "▶";
  }
  console.log(child[0].innerHTML);
  var e_value = e.innerHTML;
  console.log(e_value);
}