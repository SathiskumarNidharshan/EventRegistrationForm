<?php

include "config.php";
include 'connect.php';
if (isset($_POST['submit'])){
    s
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $company=$_POST['company'];
    $email=$_POST['email'];
    $areacode=$_POST['areacode'];
    $phonenumber=$_POST['phonenumber'];
    $subject=$_POST['subject'];
    $areyouanexistingcustomer=$_POST['areyouanexistingcustomer'];

}

$sql="INSERT INTO 'registration' ('firstName','lastName','company','email','areaCode','phoneNumber','subject','areyouanexistingCustomer') VALUES
		('$firstname','$lastname','$company','$email','$areacode','$phonenumber','$subject','$areyouanexistingcustomer')";

$result=mysqli_query($connection, $sql);
		
		if($result==TRUE){
			echo "New record created successfully";
		}
		else{
			echo "Error" .$sql. "<br>".$conn->error;
		}
		
		$conn->close();
		
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Assign Php Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
.name{
	width: 125px;
    color: black;
    font-size: 15px;
    font-weight: 700;
}
input {
    outline: none;
    margin: 10;
    border: none;
    width: 100%;
    font-size: 14px;
    font-family: inherit
}
.input--style-5 {
    background: #e5e5e5;
    line-height: 50px;
    border-radius: 5px;
    padding: 0 22px;
    font-size: 16px;
    color:black;
	
}
.input-group-desc {
    position: relative;
	color:#adb5bd;
}
.row {
    display: flex;
    flex-wrap: wrap;
}
.form-row {
    display: flex;
    align-items: center;
    margin-bottom: 40px;
}
.form-row .name {
    width: 125px;
    color: black;
    font-size: 15px;
    font-weight: 700;
}
.label {
    color: black;
    font-size: 15px;
    font-weight: 700;
}
</style>
</head>
<body>
<div class="container p-12 my-3 pt-2 bg-dark text-white d-flex justify-content-center">
  <h4>EVENT REGISTRATION FORM</h4>
</div>
<form method="POST" action="">
<div class="container">
  <div class="row pt-4">
    <div class="col-sm-2">
	<div class="name">Name</div>
	</div>
    <div class="col-sm">
	<div class="input-group-desc">
		<input class="input--style-5" type="text" name="firstname" >
		<label class="label--desc ">First Name</label>	
	</div>
	</div>
	
    <div class="col-sm">
	<div class="input-group-desc">
		<input class="input--style-5" type="text" name="lastname" >
		<label class="label--desc">Last Name</label>
	</div>
	</div>
	
  </div>
  
  <div class="row pt-4">
    <div class="col-sm-2">
	<div class="name">Company</div>
	</div>
    <div class="col-sm-10">
	<div class="input-group">
	<input class="input--style-5" type="text" name="company">
	</div>
	</div>
  </div>
  
  <div class="row pt-4">
    <div class="col-sm-2">
	<div class="name">Email </div>
	</div>
    <div class="col-sm-10">
	<div class="input-group">
	<input class="input--style-5" type="email" name="email" >
	</div>
	</div>
  </div>
  
  <div class="row pt-4">
    <div class="col-sm-2">
	<div class="name">Phone</div>
	</div>
    <div class="col-sm-2"><div class="input-group-desc">
		<input class="input--style-5" type="text" name="areacode">
		<label class="label--desc">Area Code</label>
	</div>
	</div>
	
	<div class="col-sm-8">
	<div class="input-group-desc">
		<input class="input--style-5" type="text" name="phonenumber">
		<label class="label--desc">Phone Number</label>
	</div>	
	</div>
  </div>
  <div class="row pt-4">
    <div class="col-sm-2">
	<div class="name">Subject</div>
	</div>
    <div class="col-sm-10">
	<div class="input-group">
	<input class="input--style-5" type="text" name="subject">
	</div>
	</div>
  </div>
  
  <div class="row pt-5">
    <div class="col-sm-6">
		<label class="label label--block" name="areyouanexistingcustomer" required="">Are you an existing customer?</label>
		
	</div>
	
	<div class="container  d-flex justify-content-left">
   	<div class="row mb-3">
        <div class="col-12">
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="yes" id="radioYes" checked value="yes" >
                <label class="form-check-label" for="radioYes">Yes</label>
            </div>
            <div class="form-check form-check-inline ms-3">
                <input type="radio" class="form-check-input" name="yes" id="radioNo" value="no" >
                <label class="form-check-label" for="radioNo">No</label>
            </div>
        </div>
	</div>
	</div>
	
</div>
	
	
	<div class="container  d-flex justify-content-left">
		<button type="submit" class="btn btn-danger" onclick="Register()">Register</button>
	</div>
	
</div>


</form>
</div>
</body>
</html>