<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$company=$_POST['company'];
$email=$_POST['email'];
$areacode=$_POST['areacode'];
$phonenumber=$_POST['phonenumber'];
$subject=$_POST['subject'];
if (isset($_POST['areyouanexistingcustomer'])){
$areyouanexistingCustomer=$_POST['areyouanexistingcustomer'];
}

//Database connection
$conn= new mysqli('localhost','root','','sample');
if ($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt=$conn->prepare('INSERT INTO registration(firstName,lastName,company,email,areaCode,phoneNumber,subject,areyouanexistingCustomer)
	values(?,?,?,?,?,?,?,?)');
	$stmt->bind_param("ssssiiss",$firstname,$lastname,$company,$email,$areacode,$phonenumber,$subject,$areyouanexistingcustomer);
	$stmt->execute();
	echo "Registration successfully..";
	$stmt->close();
	$conn->close();
}
?>