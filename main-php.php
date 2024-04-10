
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
        <a href="#" class="list-group-item list-group-item-action"> 
        <i class="fa fa-sign-out"></i>LOGOUT</a>
    </ul>
                        
    </div>
    
<div class="main_body">
    <button class="btn btn-outline-light bg-danger mt-3" id="toggler">
        <i class="fa fa-bars"></i>
        
    </button>
    </div>
  
  <section id="main-form" class=" flex-fill">
    <h2 class="text-center text-danger pt-3 font-weight-bold">STUDENT MENTORS DIARY</h2>
    <div class="container bg-danger" id="formsetting">
        <h3 class="text-center text-white pb-4 pt-2 font-weight-bold">ADMIN VIEW</h3>
        <div class="row">
            <div class="col-mid-4 col-md-4 col-12 m-auto icon">
                <a href="add_student.php" class="text-white text-center">
                    <i class="fa fa-user"></i>
                    <h3>ADD STUDENT DETAILS</h3>
                </a>               
            </div>

             <div class="col-mid-4 col-md-4 col-12 m-auto icon">
                <a href="view_student.php" class="text-white text-center">
                    <i class="fa fa-eye"></i>
                    <h3>VIEW STUDENT DETAILS</h3>
                </a>   
            </div>

             <div class="col-mid-4 col-md-4 col-12 m-auto icon">
                <a href="edit_student" class="text-white text-center">
                    <i class="fa fa-pencil"></i>
                    <h3>EDIT STUDENT DETAILS</h3>
                </a>               
            </div>
            
        </div>
        <hr>
                <div class="row">
            <div class="col-mid-4 col-md-4 col-12 m-auto icon">
                <a href="add_teacher.php" class="text-white text-center">
                    <i class="fa fa-user"></i>
                    <h3>ADD TEACHER DETAILS</h3>
                </a>               
            </div>

             <div class="col-mid-4 col-md-4 col-12 m-auto icon">
                <a href="view_teacher.php" class="text-white text-center">
                    <i class="fa fa-eye"></i>
                    <h3>VIEW TEACHER DETAILS</h3>
                </a>   
            </div>

             <div class="col-mid-4 col-md-4 col-12 m-auto icon">
                <a href="edit_teacher.php" class="text-white text-center">
                    <i class="fa fa-pencil"></i>
                    <h3>EDIT TEACHER DETAILS</h3>
                </a>               
            </div>
            
        </div>

    </div>  
</section>
</div>
        
</body>
</html>