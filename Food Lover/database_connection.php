<?php

        $servername = "localhost";
		$username = "root";
		$pass = "";
		$dbname = "restaurant2.sql";
		
		//create Connection
		$conn = new mysqli($servername ,$username ,$pass ,$dbname );
		
		//Check Connection
		if($conn->connect_error){
			die("Connection Field : " . $conn->connect_error);
		}

?>