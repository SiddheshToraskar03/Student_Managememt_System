<?php
include 'database_connect.php'

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
        <a href="add_teacher.php" class="list-group-item list-group-item-action">
        <i class="fa fa-user"></i>ADD TEACHER</a>
        <a href="view_teacher.php" class="list-group-item list-group-item-action">
        <i class="fa fa-eye"></i>VIEW TEACHER</a>
        <a href="index-php.php" class="list-group-item list-group-item-action"> 
        <i class="fa fa-sign-out"></i>LOGOUT</a>
    </ul>
                        
    </div>
    
<div class="main_body">
    <button class="btn btn-outline-light bg-danger mt-3" id="toggler">
        <i class="fa fa-bars"></i>
        
    </button>
    </div>
  
  <section id="main-form">
    <h3 class="text-center text-success"><?php echo @$_GET['update_success']; echo @$_GET['update_error'];  echo @$_GET['delete_msg'] ?></h3>
    <h2 class="text-center text-danger pt-3 font-weight-bold">STUDENT MENTORS DIARY</h2>
    <div class="container bg-danger" id="formsetting">
        <h3 class="text-center text-white pb-4 pt-2 font-weight-bold">VIEW STUDENT</h3>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <table class="table table-bordered text-white table-responsive">
                    <thead>
                        <tr>
                            <th>SR NO.</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Father_Mother_name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Birthdate</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Photo</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <?php
                    $sql = "select * from add_student ";
                    $run = mysqli_query($conn,$sql);
                    $i=1;
                    while($row = mysqli_fetch_assoc($run))

                    {


                    ?>
                   <tbody>
                       <tr>
                           <td><?php echo $i++ ; ?></td>
                           <td><?php echo $row['fname'] ; ?></td>
                           <td><?php echo $row['lname'] ; ?></td>
                           <td><?php echo $row['father_mother_name'] ; ?></td>
                           <td><?php echo $row['gender'] ; ?></td>
                           <td><?php echo $row['email'] ; ?></td>
                           <td><?php echo $row['birthdate'] ; ?></td>
                           <td><?php echo $row['address'] ; ?></td>
                           <td><?php echo $row['mobile'] ; ?></td>
                           <td>
                               <a href="st_image/<?php echo $row['photo']; ?>">
                                    <img src=" st_image/<?php echo $row['photo']; ?>" width="50" height="50"></a>
                           </td>
                           <td>
                               <a style="color:white; text-decoration:none" href="edit_student_detail.php?edit_student=<?php echo @$row['st_id']; ?>">Edit</a> |

                                 <a style="color:white; text-decoration:none" href="delete_student_detail.php?delete_student=<?php echo @$row['st_id']; ?>">Delete</a>
                           </td>
                       </tr>

                   </tbody>
               <?php
 
                   }

                ?>

                
            </div>
            
        </div>

    </div>  
</section>
</div>
        
</body>
</html>