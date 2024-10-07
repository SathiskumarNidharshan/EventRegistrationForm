
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