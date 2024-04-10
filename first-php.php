
<?php
include 'databaseconnect.php';
$email_err= $pws_err=$success=$error='';
if(isset($_post['submit'])){
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
    
     
     $pass = password_hash($password, PASSWORD_BCRYPT);
     $cpass = password_hash($cpassword, PASSWORD_BCRYPT);


     $query = "select * from register where email = '$email'";
    $run = mysqli_query($conn,$query);
    $row = mysqli_num_row($run);
    if($row>0){    
 
    	$email_err="Email id Already Exists. Please try with another Email";

    }
    else if($password !==$cpassword){
         $pws_err="Your password do not match";
    }
    else{
    	$sql="insert into register (fname,email,password,cpassword) values ('$fname','$email','$pass','$cpass')";
    	#run = mysqli_query($conn,$sql);
    	if($run){
    		$success="Register successfully";
    }
    else{
    	$error="Unable to submit data. Please try again.....";
    }
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>STUDENT MANAGEMENT SYSTEM</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="second.css">
<script>
    function content1(){
        document.getElementById("div1").style.display="block";
        document.getElementById("div2").style.display="none";         
    }
    function content2(){
        document.getElementById("div1").style.display="none";
        document.getElementById("div2").style.display="block";
    }  
</script>
</head>
<body>

<section class="">
    <h2 class="text-center text-danger pt-5 font-weight-bold">Student Management System</h2>
    <div class="container bg-danger" id="formsetting">
        <h3 class="text-white text-center py-3">Admin Login Panel</h3> 
        <!--row star--->
        <div class="row">
            <div class="col-md-7 col-sm-7 col-12">
            <img src="hats/student_PNG62545.png" class="img-fluid">
            </div>
            <div class="col-md-5 col-sm-5 col-12">
                <button class="btn btn-info px-5" onclick="content1()">Register</button>
                <button class="btn btn-info px-5" onclick="content2()">Login</button>
                 <!--div1 star--->
                <div id="div1" style="display: block" class="mt-4">
                <form method="post" action="">
                <div class="form-group">
                    <label class="text-white">Full Name</label>
                    <input type="text" name="fname" placeholder="Enter your name" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label class="text-white">Email</label>
                    <span class="float-right text-white font-weight-bold"><?php echo $email_error; ?></span>
                    <input type="email" name="email" placeholder="Enter your Email" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label class="text-white">Password</label>
                    <input type="password" name="password" placeholder="Enter your Password" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label class="text-white">Confirm Password</label>
                    <span class="float-right text-white font-weight-bold"><?php echo $pws_error; ?></span>
                    <input type="password" name="cpassword" placeholder="Re-Enter your password" class="form-control" required="required">
                </div>
                
                 <input type="submit" name="submit" value="Register" class="btn btn-success px-5">

               <span class="float-right text-white font-weight-bold"><?php echo $success; echo $error; ?></span>
                </form>
            </div>
            <!--div2 end--->
            <!--div2 star--->
            <div id="div2" style="display:none;" class="mt-4">
                <form method="post" action="">
                
                <div class="form-group">
                    <label class="text-white">Username</label>
                    <input type="username" name="username" placeholder="Enter your username" class="form-control">
                </div>
                <div class="form-group">
                    <label class="text-white">Password</label>
                    <input type="password" name="password" placeholder="Enter your Password" class="form-control">
                </div>
                 <input type="submit" name="submit" value="Login" class="btn btn-success px-5">
            </div>
            </div>  
            <!--div2 star--->
        </div>
        <!--row end--->
    </div>
</section>
</body>
</html>