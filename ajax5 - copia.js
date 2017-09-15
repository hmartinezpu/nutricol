
var xmlhttp4;
function loadDoc4(string,url,cfunc)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp4=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp4=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp4.onreadystatechange=cfunc;
xmlhttp4.open("POST",url,true);
xmlhttp4.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp4.send(string);
}


