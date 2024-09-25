// Popup Open
function popupOpen() {
  document.getElementById("popup").style.display = "block";
  document.getElementById("overlay").style.display = "block";
}
// Popup Close
function popupClose() {
  document.getElementById("popup").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}
// text popup
var string =
  "!! NOUS INFORMONS QUE CE SITE FACTICE EST UN PROJET D'APPRENTISSAGE";
var array = string.split("");
var timer;
function frameLooper() {
  if (array.length > 0) {
    document.getElementById("textRgpd").innerHTML += array.shift();
  } else {
    clearTimeout(timer);
  }
  loopTimer = setTimeout("frameLooper()", 80);
}
frameLooper();
