<?/*php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$company=$_POST['company'];
$email=$_POST['email'];
$areacode=$_POST['areacode'];
$phonenumber=$_POST['phonenumber'];
$subject=$_POST['subject'];



//Database connection
$conn= new mysqli('localhost','root','','regvalid');
if ($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt=$conn->prepare('INSERT INTO regi(firstName,lastName,company,email,areaCode,phoneNumber,subject)
	values(?,?,?,?,?,?,?)');
	$stmt->bind_param("ssssiis",$firstname,$lastname,$company,$email,$areacode,$phonenumber,$subject);
	$stmt->execute();
	echo "Registration successfully..";
	$stmt->close();
	$conn->close();
}*/
?>

<?php

$connection=mysqli_connect("localhost","root","");

$db=mysqli_select_db($connection,"regvalid");

if(isset($_POST['registeruser'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $company=$_POST['company'];
    $email=$_POST['email'];
    $areacode=$_POST['areacode'];
    $phonenumber=$_POST['phonenumber'];
    $subject=$_POST['subject'];



    $sql="insert into regi (firstName,lastName,company,email,areaCode,phoneNumber,subject) values('$firstname','$lastname','$company','$email','$areacode','$phonenumber','$subject')";

    if(mysqli_query($connection,$sql)){
        echo '<script>location.replace("view.php")</script>';
    }else{
        echo "Something error".$connection->error;
        }
    }
?>