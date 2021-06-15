function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function relocate_home()
{
     location.href = "login.html";
}
var doc = document.getElementById("background");
var color = ["black", "blue", "brown", "green"];
var i = 0;
function change() {
  doc.style.backgroundColor = color[i];
  i++;
  
  if(i > color.length - 1) {
    i = 0;
  }
}
setInterval(change, 1000); 

