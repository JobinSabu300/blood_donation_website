<?php
	include 'includes/db.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Jobin Sabu">

    <title>Donate Blood Save Life</title>
	
	<!-- Favicon CSS -->
	<link rel="shortcut icon" type="image/png" href="img/fa.png"/>
	<link rel="shortcut icon" type="image/png" href="img/fa.png"/>
	
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  
	<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
	<link rel="stylesheet" href="receive.css" type="text/css"/>
  </head>
  <body>
  
	<!--NAVIGATION-->
<nav role="navigation" class="custom-nav navbar navbar-default">
	<div class="container">
        <div class="col-sm-1">
		<div class="navbar-header">
			<a href="" class="navbar-brand"><img style="max-width:100px; margin-top: -7px;" alt="Blood Bank" src="logo.png"></a>
		</div>
    </div>

<div  class="col-sm-11 col-xs-12">
        <div class="custom-nav-btn">
        	
        	<form action="includes/login.inc.php" method="post">
        	
        	
       				<input id="nav-field-1" type="text" name="email"  placeholder="Enter Email id"/>
       			
       				<input id="nav-field-2"  type="password" name="password" placeholder="Enter password"/>
       			
             	<input type="submit" name="login" value="login"/>
             </form>

       		</div>
    	</div>
    </div>
</div>
</nav>
<!--END NAVIGATION-->
