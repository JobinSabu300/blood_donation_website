<?php

				if(isset($_POST['signup'])){

					include_once 'db.inc.php';

					$firstname = $_POST['firstname'];
					$lastname = $_POST['lastname'];
					$bloodgroup = $_POST['bloodgroup'];
					$donatedbloodbefore = $_POST['donatedbloodbefore'];
					$gender = $_POST['gender'];
					$age = $_POST['age'];
					$state = $_POST['state'];
					$district = $_POST['district'];
					$city = $_POST['city'];
					$mobileno = $_POST['mobileno'];
					$email = $_POST['email'];
					$password = $_POST['password'];
					$cpassword = $_POST['cpassword'];

					//checking whether the fields are filled

					if(empty($firstname) || empty($lastname) || empty($bloodgroup) || empty($donatedbloodbefore) || empty($gender) || empty($age) || empty($state) || empty($district) || empty($city) || empty($mobileno) || empty($email) || empty($password) || empty($cpassword)){

						header("Location: ../index.php?signup=empty");
						exit();

					}

					else{


					//checking for password matching

					if($cpassword != $password){
						echo '<script type="text/javascript">alert("passwords dont match");</script>';
					}

					else{

						//check for first name and last name validity
						if(!preg_match("/^[a-zA-z]*$/", $firstname) || !preg_match("/^[a-zA-z]*$/", $lastname) ){
							header("Location: ../index.php?signup=invalid");
							exit();
						}

						else{

							if(is_null($bloodgroup) & is_null($age)){
								header("Location: ../index.php?signup=invalidbg");
							exit();
							}

							else{

								//Check if email is valid
								if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
								header("Location: ../index.php?signup=email&first=$first&last=$last&uid=$uid");
								exit();
								}
								else{

									//checking for mobile no
									if(!preg_match('/^[0-9]{10}+$/', $mobileno)){
										header("Location: ../index.php?signup=invalidmn&first=$first&last=$last&uid=$uid");
										exit();
									}
									else{

										//checking for uniqness of emailid
										$query = "SELECT * FROM user WHERE email='$email';";
										$query_run = mysqli_query($con, $query);

										if(mysqli_num_rows($query_run)>0){
											header("Location: ../index.php?signup=usertaken&first=$first&last=$last&uid=$uid");
										exit();
										}
										else{

											$query = "INSERT INTO user VALUES ('', '$firstname', '$lastname', '$bloodgroup', '$donatedbloodbefore', '$gender', '$age', '$state', '$district', '$city', '$mobileno', '$email', '$password');";
											mysqli_query($con, $query);
											header("Location: ../index.php?signup=success");
											exit();

										}
									}
								}

							}

						}
						

					}

					}

				}
