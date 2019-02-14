<?php
$cn = mysqli_connect("localhost", "root", "", "cscnewu");

function ms($value)
{
	global $cn;
	return mysqli_real_escape_string($cn, $value);
}

?>