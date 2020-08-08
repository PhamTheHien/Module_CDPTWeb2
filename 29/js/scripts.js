$(document).ready(function () {
  $('[data-toggle="popover"]').popover();
  var acc = document.getElementsByClassName("btn");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("content");
  });
}
 
});

