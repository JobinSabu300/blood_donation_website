<?php
require 'db.inc.php';
session_start();

	if(isset($_POST['login'])){

		

		$email = $_POST['email'];
		$password = $_POST['password'];
		
		
		$query = "SELECT * FROM user where email='$email' AND password='$password';";
		$query_run = mysqli_query($con, $query);

				if(mysqli_num_rows($query_run)>0){
					$_SESSION['email'] = $email;
					header("Location: ../receiver.php");
					exit();	
				}

				else{
					header("Location: ../index.php?login=invalid");
					exit();
				}
		}

		
		


	