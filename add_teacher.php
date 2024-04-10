<?php
include 'database_connect.php';
if(isset($_POST['submit'])){
    $fname = mysqli_real_escape_string($conn,$_POST['fname']);
     $lname = mysqli_real_escape_string($conn,$_POST['lname']);
    $teacher_id = mysqli_real_escape_string($conn,$_POST['teacher_id']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
         $address = mysqli_real_escape_string($conn,$_POST['address']);
          $mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
           
               $image = $_FILES['custom-file-input']['name'];
                $image_type = $_FILES['custom-file-input']['type'];
                 $image_size = $_FILES['custom-file-input']['size'];
                  $image_tmp = $_FILES['custom-file-input']['tmp_name'];

                  if(!$image_type == 'image/jpg' or !$image_type == 'image/png'){
                    $match_error= "Invalid image formate";
                  }
                  else if ($image_size <= 2000){
                    $size_error= "Image size is larger. Image size should be lass than 2mb";
                  }
                  else
                    move_uploaded_file($image_tmp , "t_image/$image");
                $sql = "insert into `add_teacher` (fname,lname,teacher_id,gender,email,address,mobile,photo) values ('$fname','$lname','$teacher_id','$gender','$email','$address','$mobile','$image')";
                $run = mysqli_query($conn,$sql);
                if($run){
                    $success= "Student data submitted successfully";
                }
                else{
                    $error= "Unable to sunbmit data. Please try again";
                }
}

?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reponsive Menu</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="second.css">

<script>
    jQuery(document).ready(function($){
        $('#toggler').click(function(event){
            {
                event.preventDefault();
                $('#wrap').toggleClass('toggled');
            }
        });
    });
</script>
</head>
<body>

<div class="d-flex" id="wrap">
    <div class="sidebar bg-light border-light">
     <div class="sidebar-heading">
        <p class="text-center">STUDENT MANAGE</p>
         
     </div>
        <ul class="list-group list-group-flush">
        <a href="main-php.php" class="list-group-item list-group-item-action">
        <i class="fa fa-vcard-o"></i>DASHBOARD</a>
        <a href="add_student.php" class="list-group-item list-group-item-action">
        <i class="fa fa-user"></i>ADD STUDENT</a>
        <a href="view_student.php" class="list-group-item list-group-item-action">
        <i class="fa fa-eye"></i>VIEW STUDENT</a>
        <a href="add_student.php" class="list-group-item list-group-item-action">
        <i class="fa fa-user"></i>ADD TEACHER</a>
        <a href="view_teacher.php" class="list-group-item list-group-item-action">
        <i class="fa fa-eye"></i>VIEW TEACHER</a>
        <a href="index-php.php" class="list-group-item list-group-item-action"> 
        <i class="fa fa-sign-out"></i>LOGOUT</a>
    </ul>
                        
    </div>
    
<div class="main_body" class=" flex-fill">
    <button class="btn btn-outline-light bg-danger mt-3" id="toggler">
        <i class="fa fa-bars"></i>
        
    </button>
    </div>
  
  <section id="main-form">
    <h2 class="text-center text-danger pt-3 font-weight-bold">STUDENT MENTORS DIARY</h2>
    <div class="container bg-danger" id="formsetting">
        <h3 class="text-center text-white pb-4 pt-2 font-weight-bold">ADD TEACHER</h3>
        <form method="post" action="" enctype="multipart/form-data">
        <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label class="text-white">First name</label>
                <input type="text" name="fname" placeholder="Enter your First name" class="form-control">  
            </div>

            <div class="form-group">
                <label class="text-white">last name</label>
                <input type="text" name="lname" placeholder="Enter your Last name" class="form-control">  
            </div>

            
            <div class="form-group">
                <label class="text-white">FacultyNumber</label>
                <input type="text" name="facultynumber" placeholder="Enter your id" class="form-control">  
            </div>

            <div class="form-group">
                <label class="text-white">Gender</label>
                <input type="radio" name="gender" value="male" class="form-check-input ml-2">
                <label class="form-check-label text-white pl-4">Male</label>
                <input type="radio" name="gender" value="female" class="form-check-input ml-2">
                <label class="form-check-label text-white pl-4">Female</label>
                
            </div> 

              <div class="form-group">
                <label class="text-white">Email</label>
                <input type="text" name="email" placeholder="Enter your Email" class="form-control">  
            </div>


           </div>

           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

          
             <div class="form-group">
                <label class="text-white">Address</label>
                <input type="text" name="address" placeholder="Enter your current Address" class="form-control">  
            </div>

            <div class="form-group">
                <label class="text-white">Mobile Number</label>
                <input type="text" name="mobile" placeholder="Enter your Mobile number" class="form-control">  
            </div>

              <div class="input-group">
                <div class="input-group-prepend"> <span class="input-group-text" id="inputGroupFileAddon01">Upload</span> </div>
                <div class="custom-file">
                <input type="file" name="custom-file-input" id="inputGroupFile01"  name="image">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>   
            </div>
           </div>    
           <input type="submit" name="submit" value="Add Detail" class="btn btn-success px-5 mt-2">
           
        </div>
         </form>
      </div>
</section>
</div>
        
</body>
</html>

