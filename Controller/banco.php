<?php
	$server = "server";
	$user = "user";
	$pwr = "password";
	$BD = "BD";
	
	function open_database(){
		global $server, $user, $pwr, $BD;
		$conn = new mysqli($server, $user, $pwr, $BD);
		if($conn)
			return $conn;
	}
?>
