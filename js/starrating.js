/**
 * Star Rating 
 * 
 * This function is for the rating of each product in the productitem.php
 * 
*/



window.onload = function() {
var elemList = document.getElementsByClassName("0");
for (i in elemList) {
    elemList[i].innerHTML = "<p>Not Applicable</p>";
}

var elemList = document.getElementsByClassName("1");
for (i in elemList) {
    elemList[i].innerHTML = `
    <span class="fa fa-star orange"></span>
    <span class="fa fa-star lightgrey"></span>
    <span class="fa fa-star lightgrey"></span>
    <span class="fa fa-star lightgrey"></span>
    <span class="fa fa-star lightgrey"></span>`;
}


var elemList = document.getElementsByClassName("2");
for (i in elemList) {
    elemList[i].innerHTML =`
<span class="fa fa-star orange"></span>
<span class="fa fa-star orange"></span>
<span class="fa fa-star lightgrey"></span>
<span class="fa fa-star lightgrey"></span>
<span class="fa fa-star lightgrey"></span>`;
}

var elemList = document.getElementsByClassName("3");
for (i in elemList) {
    elemList[i].innerHTML = `
<span class="fa fa-star orange"></span>
<span class="fa fa-star orange"></span>
<span class="fa fa-star orange"></span>
<span class="fa fa-star lightgrey"></span>
<span class="fa fa-star lightgrey"></span>`;
}
var elemList = document.getElementsByClassName("4");
for (i in elemList) {
    elemList[i].innerHTML = `
<span class="fa fa-star orange"></span>
<span class="fa fa-star orange"></span>
<span class="fa fa-star orange"></span>
<span class="fa fa-star orange"></span>
<span class="fa fa-star lightgrey"></span>`;
}

var elemList = document.getElementsByClassName("5");
for (i in elemList) {
    elemList[i].innerHTML = `
<span class="fa fa-star orange"></span>
<span class="fa fa-star orange"></span>
<span class="fa fa-star orange"></span>
<span class="fa fa-star orange"></span>
<span class="fa fa-star orange"></span>`;
}
}


 
