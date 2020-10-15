/*global alert*/
/* eslint-env browser */
/* eslint-disable no-unused-vars */
function submit(){
     var a = new XMLHttpRequest();var b = document.getElementById("b");var x = document.getElementById("a");a.onreadystatechange = function(){if(this.readyState == 4 && this.status == 200){x.innerHTML = this.responseText;b.style.display="block"}};a.open("GET", "register.php?b="+email.value+"&a="+email.value+"&c="+username.value+"&d="+password.value, true);a.send();}
function close1(){
 var modal = document.getElementById("b");
if (modal.style.display === "block") { modal.style.display = "none"; } else { modal.style.display = "none"; }}