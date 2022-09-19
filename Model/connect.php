<?php 

	class ketnoi{
		function moketnoi(&$conn){
			$conn = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
			//set charset utf8
			mysqli_set_charset($conn,'utf8');
			// Check connection
			if (!$conn) {
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
  				exit();
			}else{
				return $conn;
			}
		}
		function dongketnoi($conn){
			mysqli_close($conn);
		}
	}

 ?>