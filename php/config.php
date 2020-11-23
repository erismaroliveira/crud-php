<?php
	define("HOST", "localhost");
	define("USER", "root");
	define("PASS", "");
	define("BASE", "guia_adv");

	$conn = new mysqli(HOST, USER, PASS, BASE) or die(mysql_error($conn));

?>