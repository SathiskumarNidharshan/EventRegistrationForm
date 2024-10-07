<?php
    include 'config.php';

    if (isset($_POST['update'])){
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $company=$_POST['company'];
        $email=$_POST['email'];
        $areaCode=$_POST['areaCode'];
        $phoneNumber=$_POST['phoneNumber'];
        $subject=$_POST['subject'];
        $areyouanexistingCustomer=$_POST['areyouanexistingCustomer'];


        $sql="UPDATE 'registration' SET 'firstName'='$firstName','lastName'='$lastName','company'='$company','email'='$email','areaCode'='$areaCode','phoneNumber'='$phoneNumber','subject'='$subject','areyouanexistingCustomer'='$areyouanexistingCustomer'";

        $result=$conn->query($sql);

        if(result==TRUE){
            echo "Record updated successfully..";
        }else{
            echo "Error".$sql."<br>".$conn->error;
        }
    }

    if(isset($_GET['id'])){
        $user_id=$_GET['id'];

        $sql="SELECT*FROM 'registration' WHERE 'id'=$user_id'";

        $result=$conn->query($sql);

        if($result->num_nows>0){
            while($row==$result->fetch_assoc()){
                $firstName=$row['firstName'];
                $lastName=$row['lastName'];
                $company=$row['company'];
                $email=$row['email'];
                $areaCode=$row['areaCode'];
                $phoneNumber=$row['phoneNumber'];
                $subject=$row['subject'];
                $areyouanexistingCustomer=$row['areyouanexistingCustomer'];
                $id=$row['id'];
            }
        }
    }
?>

<h2>User Update Form</h2>
<form method="POST" action="">
<div class="container">
  <div class="row pt-4">
    <div class="col-sm-2">
	<div class="name">Name<span class="text-danger">*</span></div>
	</div>
    <div class="col-sm">
	<div class="input-group-desc">
		<input class="input--style-5" type="text" name="firstName" value="<?php echo isset($_POST['firstName']) ? $_POST['firstName'] : ''; ?>" >
		<label class="label--desc ">First Name</label>	
		<span class="text-danger"><?php echo $firstName_error; ?></span>
	</div>
	</div>
	
    <div class="col-sm">
	<div class="input-group-desc">
		<input class="input--style-5" type="text" name="lastName" value="<?php echo isset($_POST['lastName']) ? $_POST['lastName'] : ''; ?>">
		<label class="label--desc">Last Name</label>
		<span class="text-danger"><?php echo $lastName_error; ?></span>
	</div>
	</div>
	
  </div>
  
  <div class="row pt-4">
    <div class="col-sm-2">
	<div class="name">Company<span class="text-danger">*</span></div>
	</div>
    <div class="col-sm-10">
	<div class="input-group">
	<input class="input--style-5" type="text" name="company" value="<?php echo isset($_POST['company']) ? $_POST['company'] : ''; ?>">
	<span class="text-danger"><?php echo $company_error; ?></span>
	</div>
	</div>
  </div>
  
  <div class="row pt-4">
    <div class="col-sm-2">
	<div class="name">Email <span class="text-danger">*</span></div>
	</div>
    <div class="col-sm-10">
	<div class="input-group">
	<input class="input--style-5" type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" >
	<span class="text-danger"><?php echo $email_error; ?></span>
	</div>
	</div>
  </div>
  
  <div class="row pt-4">
    <div class="col-sm-2">
	<div class="name">Phone<span class="text-danger">*</span></div>
	</div>
    <div class="col-sm-2"><div class="input-group-desc">
		<input class="input--style-5" type="text" name="areaCode" value="<?php echo isset($_POST['areaCode']) ? $_POST['areaCode'] : ''; ?>">
		<label class="label--desc">Area Code</label>
		<span class="text-danger"><?php echo $areaCode_error; ?></span>

	</div>
	</div>
	
	<div class="col-sm-8">
	<div class="input-group-desc">
		<input class="input--style-5" type="text" name="phoneNumber" value="<?php echo isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : ''; ?>">
		<label class="label--desc">Phone Number</label>
		<span class="text-danger"><?php echo $phoneNumber_error; ?></span>
	</div>	
	</div>
	
  </div>
  <div class="row pt-4">
    <div class="col-sm-2">
	<div class="name">Subject<span class="text-danger">*</span></div>
	</div>
    <div class="col-sm-10">
	<div class="input-group">
	<input class="input--style-5" type="text" name="subject" value="<?php echo isset($_POST['subject']) ? $_POST['subject'] : ''; ?>">
	<span class="text-danger"><?php echo $subject_error; ?></span>
	</div>
	</div>
  </div>
  
  <div class="row pt-5">
    <div class="col-sm-6">
		<label class="label label--block" name="areyouanexistingCustomer" required="">Are you an existing customer?<span class="text-danger">*</span></label>
		
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
</body>
</html>

<?php



?>