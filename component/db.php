<?php
$cn = mysqli_connect("localhost", "root", "", "dbcm");

function ms($value)
{
	global $cn;
	return mysqli_real_escape_string($cn, $value);
}

?>
