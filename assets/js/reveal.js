// Opens the menu on click

function openMenu() {
  var x = document.getElementsByClassName("openMenu");
  for (var i=0;i<x.length;i+=1)
  if (x[i].style.display === "block") {
    x[i].style.display = "none";
  } else {
    x[i].style.display = "block";
  }
};

//Opens More Details on click
function reveal() {
  var x = document.getElementsByClassName("moreDetails");
  for (var i=0;i<x.length;i+=1)
  if (x[i].style.display === "block") {
    x[i].style.display = "none";
  } else {
    x[i].style.display = "block";
  }
};


