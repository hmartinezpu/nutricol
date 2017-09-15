
var xmlhttp2;
function loadDoc2(string,url,cfunc)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp2=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp2=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp2.onreadystatechange=cfunc;
xmlhttp2.open("POST",url,true);
xmlhttp2.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp2.send(string);
}


