<?php

$id = intval($_REQUEST['id']);
$firstname = $_REQUEST['first_name'];
$lastname = $_REQUEST['last_name'];
$address = $_REQUEST['address'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];

include 'conn.php';

$sql = "update person set first_name='$firstname',last_name='$lastname',address='$address',phone='$phone',email='$email' where id=$id";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>
