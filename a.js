/*var p = prompt("Enter USN: ","");
if (p=='is042') {
	document.write("welcome")
}
else 
	document.write(p);
*/
if (typeof(Storage) === "undefined") {
	alert("not supported");
}
	//alert("yes");

function art() {
	this.name = "rakesh";
	this.age = "23";
}
function artists() {
	this.artist = new art();
}
var text = new artists();
var t = JSON.stringify(text);
document.write(t);
document.write("<br/>");
var x = JSON.parse(t);
document.write(x.artist.name);

/*var x = document.getElementById("demo");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    document.write("Geolocation is not supported by this browser.");
  }
}

function showPosition(position) {
  document.write("Latitude: " + position.coords.latitude +
    "<br>Longitude: " + position.coords.longitude);
}
*/
document.write("<br/>");
var c = document.cookie;
document.write(c);
var i = 0;
document.write("<br/>");
var d = decodeURIComponent(c);
var dd = d.split(';');
dd.forEach(function(){document.write(dd[i++]+"<br>");});