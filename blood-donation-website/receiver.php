<?php 
	include 'header.php';
	session_start();
?>
<div class="container">
<div class="custom">
	<h4>Enter the details</h4>
<form action="includes/receiver_content.inc.php" method="post">
	<label>Name of Patient</label>
	<input type="text" name="name" placeholder="Enter name of the patient"/>

				<br/>
				
	<label>Gender </label>
				<input type="radio" name="gender" value="male"/>Male
				<input type="radio" name="gender" value="female"/>Female

	<label style="margin-left:30px;" >Age</label>
				<select class="custom_select_age" name="age">
					<option value="18-25">18-25</option>
					<option value="25-40">25-40</option>
					<option value="40+">40+</option>
				</select>

				<br/>

	<div class="custom_r_inline">
	<label>Blood Group </label>
				<select class="custom_select_bg" name="bloodgroup">
					<option value="Delhi">A+</option>
					<option value="Delhi">O-</option>
					<option value="Delhi">AB+</option>
					<option value="Delhi">AB-</option>
					<option value="Delhi">B+</option>
				</select>

	<label>State </label>
				<select class="custom_select" name="state">
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
				</select>
				
				<label>District </label>
				<select class="custom_select" name="district">
					<option value="Delhi">Ghaziabad</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
				</select>
				
				<label>City</label>
				<select class="custom_select" name="city">
					<option value="Delhi">Shalimar Garden</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
					<option value="Delhi">Delhi</option>
				</select>
	</div>

				<br/>

				<label>Address</label>
				<input type="text" name="address" placeholder="Enter your Addressr"/>

				<br/>

				<label>Contact Number</label>
				<input type="number" name="mobileno" placeholder="Enter your Mobile Number"/>
				
				<br/>
				<label>Text Area</label>
				<textarea cols="60" rows="6" name="description" placeholder="Enter your message here" class=""></textarea>

				<br/>

				<input type="submit" name="submit" value="Submit"/>

</form>
</div>
</div>
<?php 
	include 'footer.php';
?>