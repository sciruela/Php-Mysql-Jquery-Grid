<?php

$firstname = $_REQUEST['first_name'];
$lastname = $_REQUEST['last_name'];
$address = $_REQUEST['address'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];

include 'conn.php';

$sql = "insert into person(first_name,last_name,address,phone,email) values('$firstname','$lastname','$address','$phone','$email')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>