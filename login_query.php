<?php
	require_once'conn.php';
	$postdata = file_get_contents("php://input");
    $json = json_decode($postdata);
	$username = $json->username;
	$password = $json->password;
 
	$query=mysqli_query($conn, "SELECT * FROM `user` WHERE `username`='$username' && `password`='$password'") or die(mysqli_error());
	$row=mysqli_num_rows($query);
	$fetch=mysqli_fetch_array($query);
	if($row > 0){
		session_start();
		$_SESSION['user_id'] = $fetch['user_id'];
		echo "true";
	}else{
		echo "false";
	}
?>
