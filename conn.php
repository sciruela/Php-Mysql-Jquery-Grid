<?php

$conn = @mysql_connect('127.0.0.1','root','');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('Proofs', $conn);

?>