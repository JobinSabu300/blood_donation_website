<?php 
	include 'header1.php';
?>
<div class="container">
<div style="padding-top:20px;" class="row">
	<div class="col-md-7  hidden-xs" >
		<img src="pics/main_pic.png" width="60%" height="60%"/>
	</div>
	<div class="col-xs-12 col-md-5">
		<div>
			<h3><center>New here? Register</center></h3>
			<div class="custom-form">
			<form action="includes/signup.inc.php"" method="post" >
				
				<label>Name</label><br/>
				
				<input type="text" name="firstname" placeholder="Enter your first name" required/>

				<input type="text" name="lastname" placeholder="Enter your surname" required/>
				
				<br/>
				
				<label>Blood Group:</label>
				<select name="bloodgroup" required>
					<option disabled="" selected=""></option>
					<option value="Delhi">A+</option>
					<option value="Delhi">O-</option>
					<option value="Delhi">AB+</option>
					<option value="Delhi">AB-</option>
					<option value="Delhi">B+</option>
				</select>
				
				<br/>
				
				<label>Donated blood before?:</label>
				<input type="radio" name="donatedbloodbefore" value="yes" checked required/>Yes
				<input type="radio" name="donatedbloodbefore" value="no" required/>No
				
				<br/>
				
				<label>Gender:</label>
				<input type="radio" name="gender" value="male" checked/>Male
				<input type="radio" name="gender" value="female"/>Female
				
				<br/>
				
				<label>Age</label>
				<select name="age">
					<option disabled="" selected=""></option>
					<option value="18-25">18-25</option>
					<option value="25-40">25-40</option>
					<option value="40+">40+</option>
				</select>
				
				<br/>
				
				<label>Location:</label><br/>
				<select name="state">
					<option disabled="" selected="">State</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
				</select>
				

				<select name="district">
					<option disabled="" selected="" value="">District</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
				</select>
				
			
				<select name="city">
					<option disabled="" selected="" value="">City</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
				</select>
				
				<br/>

				<input type="number" name="mobileno" placeholder="Enter your Mobile Number" required/>
				
				<br/>

				<input type="email" name="email" placeholder="Enter your Email id" required/>
				
				<br/>

				<input type="password" name="password" placeholder="Enter Password" required/>
				
				<br/>
				
				<input type="password" name="cpassword" placeholder="Confirm Password" required/>
				
				<br/>
				
				<input type="submit" name="signup" value="Submit"/>
				
			</form>

			</div>
		</div>
	</div>
</div>
</div>

<?php 
	include 'footer.php';
?>