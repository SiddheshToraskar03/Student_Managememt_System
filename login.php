
<?php
include 'database_connect.php'; 

	if(isset($_POST['submit1'])){
    
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $sql = "select * from register where email = '$email'";
    $run = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($run);

    $pwd_fetch= $row['password'];
    $pwd_decode = password_verify($pwd,$pwd_fetch );
    if($pwd_decode){
        echo "<script>window.open('main-php.php?success=Logged in successfully', '_self')</script>";
    }
    else{
        echo "<script>window.open('index-php.php?error=Username or password is incorrect', '_self')</script>";
    }
}
?>
<!DOCTYPE 	html>
<html>
<head>
	<title>Student mentors diary</title>
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="second">
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
<section>

		<h2 class="text-center text-dark pt-5 font-weight-bold">STUDENT MENTORS DAIRY</h2>
		<div class="container bg-danger" id="formsetting">
			<h3 class="text-white text-center py-3">ADMIN LOGIN PANEL</h3>


			<div class="row">
    		<div class="col-md-7 col-sm-7 col-12">
    	    <img src="hatt/st_student.PNG2000.png" class="img-fluid">
    		</div>
    		<div class="col-md-5 col-sm-5 col-12">
    			<button class="btn btn-info px-5" onclick="content1()">ADMIN LOGIN</button>
    			<button class="btn btn-info px-5" onclick="content2()">STUDENT LOGIN</button>
    		     <!--div1 star--->
    			<div id="div1" style="display: block" class="mt-3">
    			<form method="post" action="">
    			<div class="form-group">
    				<label class="text-white">Email</label>
    				<input type="email" name="email" placeholder="Enter your Email" class="form-control">
    			</div>
    			<div class="form-group">
    				<label class="text-white">Password</label>
    				<input type="password" name="password" placeholder="Enter your Password" class="form-control">
    			</div>
    		
                
                 <input type="submit" name="submit1" value="login" class="btn btn-success px-5">
                
    			</form>
            </div>
            <!--div1 end--->
            <!--div2 star--->
            <div id="div2" style="display:none;" class="mt-4">
            	<form method="post" action="">
    			
    			<div class="form-group">
    				<label class="text-white">Email</label>
    				<input type="email" name="email" placeholder="Enter your Email" class="form-control">
    			</div>
    			<div class="form-group">
    				<label class="text-white">Password</label>
    				<input type="password" name="password" placeholder="Enter your Password" class="form-control">
    			</div>
    			 <input type="submit" name="submit" value="Login" class="btn btn-success px-5">
                   </form>
            </div>
    		</div>	
    		<!--div2 end--->

    	</div>
		<!-- 	<form action="" method="post">
				<input type="submit" name="admin_login" value="Admin Login">
				<input type="submit" name="student_login" value="Student Login">
			</form> -->
		
			</div>
	</section>

</body>
</html>
<?php
	if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $sql = "select * from register where email = '$email'";
    $run = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($run);

    $pwd_fetch= $row['password'];
    $pwd_decode = password_verify($pwd,$pwd_fetch );
    if($pwd_decode){
        echo "<script>window.open('st_view_profile.php?success=Logged in successfully', '_self')</script>";
    }
    else{
        echo "<script>window.open('index-php.php?error=Username or password is incorrect', '_self')</script>";
    }
}
?>