
var xmlhttp1;
function loadDoc1(string,url,cfunc)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp1=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp1=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp1.onreadystatechange=cfunc;
xmlhttp1.open("POST",url,true);
xmlhttp1.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp1.send(string);
}


