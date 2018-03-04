<?php
include 'db.inc.php';
//session_start();

			if(isset($_POST['submit'])){
			
				
					$name = $_POST['name'];
					$gender = $_POST['gender'];
					$age = $_POST['age'];
					$bloodgroup = $_POST['bloodgroup'];
					$state = $_POST['state'];
					$district = $_POST['district'];
					$city = $_POST['city'];
					$address = $_POST['address'];
					$mobileno = $_POST['mobileno'];
					$description = $_POST['description'];

					//checking whether the fields are filled

					if(empty($name) || empty($age) || empty($bloodgroup) ||  empty($state) || empty($district) || empty($city) || empty($address) ||empty($mobileno) || empty($description)){

						header("Location: ../receiver.php?submit=empty");
						exit();

					}

					else{



											$query = "INSERT INTO receiver VALUES ('', '$name', '$gender', $age', '$bloodgroup', '$state', '$district', '$city', '$address', '$mobileno', '$description');";
											mysqli_query($con, $query);
											header("Location: ../receiver.php?submit=success");
											exit();

						}

				}