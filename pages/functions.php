<?php

function open_db()
	{
		$dbhandle = mysqli_connect("localhost","bharath","balamani","work");
		
		if(mysqli_connect_errno()){
			echo "Failed to connect to mysql".mysqli_connect_error();
		}
		else{
			return $dbhandle;
		}
	}


function close_db($dbhandle){
		mysqli_close($dbhandle);
		return true;
	}
	

?>
