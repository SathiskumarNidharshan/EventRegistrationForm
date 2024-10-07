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
.error {color: #FF0000;}
</style>
</head>
<body>
<?php 

$firstname_error =  $lastname_error =  $company_error =  $email_error =  $areacode_error =  $phonenumber_error = $subject_error ="";
$firstname=$lastname=$company=$email=$areacode=$phonenumber=$subject="";



if (isset($_POST['registeruser'])){


$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);
$company = trim($_POST['company']);
$email = trim($_POST['email']);
$areacode = trim($_POST['areacode']);
$phonenumber = trim($_POST['phonenumber']);
$subject = trim($_POST['subject']);

    $firstname = trim($_POST['firstname']);
    if (empty ($_POST["firstname"])) {
        $firstname_error="First name is required";
    }else{
    $firstname=($_POST["firstname"]);
    if(!preg_match("/^[a-zA-Z' ]*$/",$firstname)){
            $firstname_error = "Only letters and white space allowed";
        }
    }
    

    if(empty($_POST["lastname"])){
        $lastname_error="Last name is required";
    }else{
        $lastname=($_POST["lastname"]);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$lastname)){
            $lastname_error = "Only letters and white space allowed."; 
        }
    }

    if(empty($_POST["company"])){
        $company_error="Company name is required";
    }else{
        $company=($_POST["company"]);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$company)){
            $company_error = "Only letters and white space allowed."; 
        }
    }

    if (empty($email)){
        $email_error = "Email is required";
    }
    else{
        $email=($_POST["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_error = "Invalid email format";
    }
    }

    if (empty($areacode)){
        $areacode_error = "Area code is required";
    }else{
        $areacode=($_POST["areacode"]);
        /*if(!preg_match('/^[0-9]{9}+$/', $areacode)){
            $areacode_error = " Area code with 2 digits ";
        }*/
    }


    if (empty($phonenumber)){
        $phonenumber_error = "Phone number is required";
    }else{
        $phonenumber=($_POST["phonenumber"]);
        if(!preg_match('/^[0-9]{9}+$/', $phonenumber)){
            $phonenumber_error = " Phone number with 9 digits ";
        }
    }

    if(empty($_POST["subject"])){
        $subject_error="Subject is required";
    }else{
        $subject=($_POST["subject"]);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$subject)){
            $subject_error = "Only letters and white space allowed."; 
        }
    }
    }  

    ?>

   
<div class="container p-12 my-3 pt-2 bg-dark text-white d-flex justify-content-center">
  <h4>EVENT REGISTRATION FORM</h4>
</div>

<form method="post" action="">
<div class="container">
  <div class="row pt-4">
    <div class="col-sm-2">
	<div class="name">Name</div>
	</div>
    <div class="col-sm">
	<div class="input-group-desc">
		<input class="input--style-5" type="text" name="firstname"  >
		<label class="label--desc ">First Name</label>	<br>
		<span class="error"><?php echo $firstname_error; ?></span>
	</div>
	</div>
	
    <div class="col-sm">
	<div class="input-group-desc">
		<input class="input--style-5" type="text" name="lastname"  >
		<label class="label--desc">Last Name</label><br>
		<span class="error"><?php echo $lastname_error; ?></span>
	</div>
	</div>
	
  </div>
  
  <div class="row pt-4">
    <div class="col-sm-2">
	<div class="name">Company</div>
	</div>
    <div class="col-sm-10">
	<div class="input-group">
	<input class="input--style-5" type="text" name="company"   >
	<span class="error"><?php echo $company_error; ?></span>
	</div>
	</div>
  </div>
  
  <div class="row pt-4">
    <div class="col-sm-2">
	<div class="name">Email</div>
	</div>
    <div class="col-sm-10">
	<div class="input-group">
	<input class="input--style-5" type="email" name="email"  >
	<span class="error"><?php echo $email_error; ?></span>
	</div>
	</div>
  </div>
  
  <div class="row pt-4">
    <div class="col-sm-2">
	<div class="name">Phone</div>
	</div>
    <div class="col-sm-2"><div class="input-group-desc">
		<input class="input--style-5" type="text" name="areacode" >
		<label class="label--desc">Area Code</label>	<br>
		<span class="error"><?php echo $areacode_error; ?></span>

	</div>
	</div>
	
	<div class="col-sm-8">
	<div class="input-group-desc">
		<input class="input--style-5" type="text" name="phonenumber" >
		<label class="label--desc">Phone Number</label>	<br>
		<span class="error"><?php echo $phonenumber_error; ?></span>
	</div>	
	</div>
	
  </div>
  <div class="row pt-4">
    <div class="col-sm-2">
	<div class="name">Subject</div>
	</div>
    <div class="col-sm-10">
	<div class="input-group">
	<input class="input--style-5" type="text" name="subject"  >
	<span class="error"><?php echo $subject_error; ?></span>
	</div>
	</div>
  </div>
  
  <div class="row pt-5">
    <div class="col-sm-6">
		<label class="label label--block" name="areyouanexistingCustomer" required="">Are you an existing customer?</label>
		
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
		<button type="submit" class="btn btn-danger" onclick="Register()" name="registeruser">Register</button>
	</div>
	
</div>
</form>
</div>
</body>
</html>

<?php 
include "validation.php";
?>