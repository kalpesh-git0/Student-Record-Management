<?php
session_start();

if(! (isset($_SESSION['login']))){
  header("location:login.php");
}
include 'config/control.php';
  $c=new control();
  $res=$c->view_batchs();
  if (isset($_POST['submit'])) {
    
    $name=$_POST['student_name'];
    $fname=$_POST['father_name'];
    $mname=$_POST['mother_name'];
    $gender=$_POST['gender'];
    $enroll=$_POST['enroll'];
    $email=$_POST['email'];
    $course=$_POST['course'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $year=$_POST['year'];
    $sec_board=$_POST['secondary_board'];
    $sec_roll=$_POST['secondary_roll'];
    $sec_obt=$_POST['secondary_marksobt'];
    $sec_max=$_POST['secondary_maxmarks'];
    $sec_percent=$_POST['secondary_percentage'];
    $sec_yop=$_POST['sec_yop'];
    $sr_board=$_POST['senior_board'];
    $sr_roll=$_POST['senior_roll'];
    $sr_obt=$_POST['senior_marksobt'];
    $sr_max=$_POST['senior_maxmarks'];
    $sr_percent=$_POST['senior_percentage'];
    $sr_yop=$_POST['sr_yop'];
    $graduation=$_POST['graduation'];
    $university=$_POST['university'];
    $grad_roll=$_POST['college_roll'];
    $grad_obt=$_POST['college_marksobt'];
    $grad_max=$_POST['college_maxmarks'];
    $grad_percent=$_POST['college_percent'];
    $grad_yop=$_POST['college_yop'];

    $r=$c->add_student($name,$fname,$mname,$gender,$enroll,$email,$course,$address,$mobile,$year,$sec_board,$sec_roll,$sec_obt,$sec_max,$sec_percent,$sec_yop,$sr_board,$sr_roll,$sr_obt,$sr_max,$sr_percent,$sr_yop,$graduation,$university,$grad_roll,$grad_obt,$grad_max,$grad_percent,$grad_yop);
    if($r){
        echo "<script>alert('submitted successfullt!')</script>";
    }

  }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Student | SRM</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/SRMfavicon.png" type="image/x-icon">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'topbar.php'; ?>
                <!-- End of Topbar -->

                <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Student | SRM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- icons -->
  <link href="../assets/img/logo pandemic.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!--  Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  
</head>

<body>

 <!-- ======= Header ======= -->
  <!-- <?php include 'header.php'?> -->
  <!-- End Header -->
  
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
      <div class="container">

        
      <h2 class=" mb-4"><b>Add Student</b></h2>
        
      </div>
    </section><!-- End Breadcrumbs -->

<section id="history form" class="contact">

  <div class="container-fluid">

  <form action="" method="post" enctype="multipart/form-data" class="">          

<div class="row">
<div class="card profile-box shadow col-lg-12 mb-4">
       <div class="card-header text-center font-weight-bold ">Session</div>
            <div class="card-body py-3">
            
              <div class="row gy-4">

               <div class="col-md-6 mt-3 ">
                  <p>Course Name</p>
                  <select require class="form-control" name="course" id="">
                    <option value="">Select</option>
                    <?php foreach($res as $row): ?>
                    <option value="<?php echo $row['course']; ?>"><?php echo $row['course']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="col-md-6 mt-3 ">
                  <p>Year</p>
                  <select require class="form-control text-center" name="year" id="">
                    <option value="">Select</option>

                    <?php 
                      
                      for( $i=1; $i<4 ; $i++){ ?>
                        <option value="<?php echo $i; ?> "><?php echo $i; ?> Year</option>

                    <?php  } ?>
                  
                  </select>
                </div>

                
            </div>
        </div>

</div>

   <!-- Basic Card Example -->
   <div class="card profile-box shadow mb-4">
       <div class="card-header text-center font-weight-bold ">Profile</div>
            <div class="card-body py-3">
            
              <div class="row gy-4">

                <div class="col-md-6">
                  <p>Student Name</p>
                  <input type="text" name="student_name" class="form-control"  required>
                </div>

                <div class="col-md-6">
                  <p>Enrollment Number</p>
                  <input type="text" maxlength="12" class="form-control" name="enroll"  required>
                </div>

                <div class="col-md-6 mt-3">
                  <p>Father's Name</p>
                  <input type="text" class="form-control" name="father_name"  required>
                </div>
                
                <div class="col-md-6 mt-3">
                  <p>Mother's Name</p>
                  <input type="text"  class="form-control" name="mother_name"  required>
                </div>
                
                <div class="text-align-center col-md-6 mt-3">
                  <p>Gender</p>
                  <div class="form-check form-check-inline">
                   <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" checked>
                  <label class="form-check-label" for="exampleRadios1">
                     Male
                  </label>
                  </div>
                  <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Female">
                  <label class="form-check-label" for="exampleRadios2">
                  Female
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="exampleRadios3" value="Others" >
                  <label class="form-check-label" for="exampleRadios3">
                    Others
                  </label>
                </div>
                </div>
                
                

               
                <div class="col-md-6 mt-3 ">
                  <p>Address</p>
                    <textarea name="address" class="form-control" id="text" cols="58" rows="3"></textarea>
                </div>
                <div class="col-md-6 mt-3 ">
                  <p>Mobile Number</p>
                  <input type="text" maxlength="10" class="form-control" name="mobile"  required>
                </div>
                <div class="col-md-6 mt-3">
                  <p>Email ID</p>
                  <input type="email" class="form-control" name="email" required>
                </div>

                
                </div>

              </div>
              </div>
              <div class="card profile-box shadow col-lg-12 mb-4">
       <div class="card-header text-center font-weight-bold ">Academic Information</div>
            <div class="card-body py-3">
            
              <div class="row gy-4">

              <table class="table">
              <thead>
                <tr>
                  <th scope="col">Standard</th>
                  <th scope="col">Board/University</th>
                  <th scope="col">Roll No.</th>
                  <th scope="col">Marks Obtained</th>
                  <th scope="col">Maximum Marks</th>
                  <th scope="col">Percentage</th>
                  <th scope="col">Year Of Passing</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  
                  <td>Secondary</td>
                  <td>
                    <select class="form-control" name="secondary_board" require id="">
                      <option value="RBSE">RBSE</option>
                      <option value="CBSE">CBSE</option>
                      <option value="ICSE">ICSE</option>
                      <option value="Other">Other</option>
                    </select>
                  </td>
                  <td>
                    <input type="text" name="secondary_roll" class="form-control" require>
                  </td>
                  <td>
                    <input type="text" name="secondary_marksobt"id="sec_obt" class="form-control" require>
                  </td>
                  <td>
                    <input type="text" id="sec_max" name="secondary_maxmarks" class="form-control" require>
                  </td>
                  <td>
                    <input type="text" name="secondary_percentage" id="percent" onfocus="calc()" class="form-control" require>
                  </td>
                  <td>
                  <select class="form-control text-center" name="sec_yop" require id="">
                    <option value="">Select</option>

                    <?php 
                      
                      for( $i=2022; $i>1960 ; $i--){ ?>
                        <option value=<?php echo $i; ?> ><?php echo $i; ?></option>

                    <?php  } ?>
                  
                  </select>
                  </td>
                  
                </tr>
                <tr>
                  
                  <td>Senior Secondary</td>
                  <td>
                    <select class="form-control" name="senior_board" require id="">
                      <option value="RBSE">RBSE</option>
                      <option value="CBSE">CBSE</option>
                      <option value="ICSE">ICSE</option>
                      <option value="Other">Other</option>
                    </select>
                  </td>
                  <td>
                    <input type="text" name="senior_roll" class="form-control" require>
                  </td>
                  <td>
                    <input type="text" name="senior_marksobt" class="form-control" require>
                  </td>
                  <td>
                    <input type="text" name="senior_maxmarks" class="form-control" require>
                  </td>
                  <td>
                    <input type="text" name="senior_percentage" class="form-control" require>
                  </td>
                  <td>
                  <select class="form-control text-center" name="sr_yop" id="" require>
                    <option value="">Select</option>

                    <?php 
                      
                      for( $i=2022; $i>1960 ; $i--){ ?>
                        <option value=<?php echo $i; ?> ><?php echo $i; ?></option>

                    <?php  } ?>
                  
                  </select>
                  </td>
                  
                 </tr>
                <tr>
                  
                  <td>
                    <input type="text" class="form-control" name="graduation" id="" require>
                  </td>
                  <td>
                    <input type="text" class="form-control" name="university" id=""require>
                  </td>
                  <td>
                    <input type="text" name="college_roll" class="form-control" require>
                  </td>
                  <td>
                    <input type="text" name="college_marksobt" class="form-control" require>
                  </td>
                  <td>
                    <input type="text" name="college_maxmarks" class="form-control" require>
                  </td>
                  <td>
                    <input type="text" onmouseover=calc() name="college_percent" class="form-control" require>
                  </td>                 
                  <td>
                  <select class="form-control text-center" name="college_yop" id="" require>
                    <option value="">Select</option>

                    <?php 
                      
                      for( $i=2022; $i>1960 ; $i--){ ?>
                        <option value=<?php echo $i; ?>><?php echo $i; ?></option>

                    <?php  } ?>
                  
                  </select>
                  </td>
                  
                </tr>
              </tbody>
              </table>

              <div class="col-md-8 mt-3 " >             
                  <button type="submit" name="submit" class="col-lg-3 btn btn-primary">Submit</button>
                  </div>
            </div>
        </div>

            </form>
            

            
        </div>

</div>


</section>
  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <?php include 'footer.php';?> 
  <!-- End Footer -->

<!-- Logout model -->
<?php include 'logout-model.php';?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>


   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );  
  }
  </script>

  <script>
    function calc(){
      const sec_obt = document.getElementById['sec_obt'];
    const sec_max = document.getElementById['sec_max'];
    let per = (sec_obt/sec_max)*100;
    document.getElementById['percent'].value= per;
    }
  </script>
</body>

</html>