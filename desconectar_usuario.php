<?php 
session_start();

if ($_SESSION['login'])
{	
	session_destroy();
	echo '<script language = javascript>
	alert("Su sesi�n ha terminado correctamente");
	self.location = "index.html"
	</script>';}
else
{
	echo '<script language = javascript>
	alert("No ha iniciado ninguna sesi�n, por favor reg�strese")
	self.location = "index.html"
	</script>';}
?>




