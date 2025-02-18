<?php
function Conectar(){
if (! ($cnn=mysqli_connect("localhost","root","")))
{
	mysqli_error();
	exit();
}
if (!mysqli_select_db($cnn,"topografia"))
{
	exit();
}
return $cnn;
}
?>