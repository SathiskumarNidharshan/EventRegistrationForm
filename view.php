<!DOCTYPE html>
<html lang="en">
<head>
  <title>Assign Php Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
        <h2>User Details</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Company</th>
                <th>Email</th>
                <th>Area Code</th>
                <th>Phone Number</th>
                <th>Subject</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            $connection=mysqli_connect("localhost","root","");

            $db=mysqli_select_db($connection,"regvalid");

            $sql="select*from regi";

            $run=mysqli_query($connection,$sql);

            $id=1;

            while($row=mysqli_fetch_array($run)){
                
                $firstname=$row['firstName'];
                $lastname=$row['lastName'];
                $company=$row['company'];
                $email=$row['email'];
                $areacode=$row['areaCode'];
                $phonenumber=$row['phoneNumber'];
                $subject=$row['subject'];
            
            
            ?>

            <tr>
                <td><?php echo $id?></td>
                <td><?php echo $firstname?></td>
                <td><?php echo $lastname?></td>
                <td><?php echo $company?></td>
                <td><?php echo $email?></td>
                <td><?php echo $areacode?></td>
                <td><?php echo $phonenumber?></td>
                <td><?php echo $subject?></td>
            </tr>

            <?php $id++ ; } ?>

        </tbody>
        </div>
    </div>
</body>
</html>

