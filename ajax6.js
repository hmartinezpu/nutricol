
var xmlhttp4;
function loadDoc5(string,url,cfunc)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp5=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp5=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp5.onreadystatechange=cfunc;
xmlhttp5.open("POST",url,true);
xmlhttp5.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp5.send(string);
}


