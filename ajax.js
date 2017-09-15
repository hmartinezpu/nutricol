
var xmlhttp;
function loadDoc(string,url,cfunc)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=cfunc;
xmlhttp.open("POST",url,true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send(string);
}

var xmlhttp8;
function loadDoc8(string,url,cfunc)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp8=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp8=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp8.onreadystatechange=cfunc;
xmlhttp8.open("POST",url,true);
xmlhttp8.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp8.send(string);
}

