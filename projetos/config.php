<?php
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('BASE', 'concessionariageo');
	define('PORT', 3307);
	

	$conn = new MySQLi(HOST,USER,PASS,BASE,PORT);