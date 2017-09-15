
var xmlhttp3;
function loadDoc3(string,url,cfunc)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp3=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp3=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp3.onreadystatechange=cfunc;
xmlhttp3.open("POST",url,true);
xmlhttp3.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp3.send(string);
}


