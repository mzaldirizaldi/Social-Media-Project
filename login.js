/*global alert*/
/* eslint-env browser */
/* eslint-disable no-unused-vars */
function submit(){
     var a = new XMLHttpRequest();var x = document.getElementById("a");a.onreadystatechange = function(){if(this.readyState == 4 && this.status == 200){if(this.responseText == 1){window.open('homepage.html', '_self');}else{{x.innerHTML = this.responseText;b.style.display="block"}}}};a.open("GET", "login.php?a="+email.value+"&b="+password.value, true);a.send();}
function close1(){
 var modal = document.getElementById("b");
if (modal.style.display === "block") { modal.style.display = "none"; } else { modal.style.display = "none"; }}