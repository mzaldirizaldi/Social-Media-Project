/*global alert*/
/* eslint-env browser */
/* eslint-disable no-unused-vars */
function submit(){
     var a = new XMLHttpRequest();var x = document.getElementById("a");a.onreadystatechange = function(){if(this.readyState == 4 && this.status == 200){x.innerHTML = this.responseText;}};a.open("GET", "post.php?a="+message.value+"&b="+username.value, true);a.send();}
function display(){
     var a = new XMLHttpRequest();var x = document.getElementById("a");a.onreadystatechange = function(){if(this.readyState == 4 && this.status == 200){x.innerHTML = this.responseText;}};a.open("GET", "display.php?a="+message.value+"&b="+username.value, true);a.send();}
