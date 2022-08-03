function myFunction() {
  var x = document.getElementById("navContent");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}
