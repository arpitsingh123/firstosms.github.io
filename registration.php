<?php
include ('connection.php');

if(isset($_REQUEST['rSignup'])){

  if(($_REQUEST['rName'] == "" ) || ($_REQUEST['rEmail'] == "") || ($_REQUEST['rPassword'] == ""))
  {
    $regmsg =  '<div class="alert alert-warning mt-2" role="alert"> All fields are required</div>';
  } else
  {
     $sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email = '".$_REQUEST['rEmail']."'";

     $result = $conn->query($sql);
     if($result->num_rows==1){
       $regmsg =  '<div class="alert alert-warning mt-2" role="alert"> Email ID Already Registered </div>';
     }else {

    $rName = $_REQUEST["rName"];
$rEmail = $_REQUEST['rEmail'];
$rPassword = $_REQUEST['rPassword'];

$sql = "INSERT INTO requesterlogin_tb(r_name, r_email, r_password) VALUES('$rName', '$rEmail', '$rPassword')";

if($conn->query($sql) == TRUE){
  $regmsg =  '<div class="alert alert-success mt-2" role="alert"> Account Successfully Created </div>';
}else {
  $regmsg =  '<div class="alert alert-danger mt-2" role="alert"> Unable To Create Account </div>';
               }
           }
       }
  }
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>

<div class="container pt-5" id="Registration">
    <h2 class="text-center">Create an account</h2>
    <div class="row mt-4 mb-4">
<div class="col-md-6 offset-md-3">

<form action="" class="shadow-lg p-4" method="post">
<div class="form-group">
<i class="fa fa-user"></i>
<label form="name" class="font-weight-bold pl-2">Name</label>
<input type="text" class="form-control" placeholder="Name" name="rName">
</div>

<div class="form-group">
<i class="fa fa-user"></i>
<label form="name" class="font-weight-bold pl-2">Email</label>
<input type="email" class="form-control" placeholder="Email" name="rEmail">
<small class="form-text">We'll never share your email with anyone else.</small>
</div>

<div class="form-group">
<i class="fa fa-key"></i>
<label form="name" class="font-weight-bold pl-2">Password</label>
<input type="password" class="form-control" placeholder="Password" name="rPassword">
</div>

<button type="submit" class="btn btn-danger mt-5 shadow-sm btn-block font-weight-bold" name="rSignup">Sign UP</button>
<em style="font-size:10px;">Note- By clicking Sign Up, you agree to our Terms, Data Policy & Cookie Policy.</em>

<?php if(isset($regmsg)) {echo $regmsg;} ?>

</form>
</div>
  </div>
</div>


</body>

</html>