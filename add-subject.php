<?php
session_start();

if(! (isset($_SESSION['login']))){
  header("location:login.php");
}
include 'config/control.php';
  $c=new control();
  $res=$c->view_batchs();

  if (isset($_POST['submit'])) {
    
    $course=$_POST['course'];
    $year=$_POST['year'];
    $sub1=$_POST['subject1'];
    $sub2=$_POST['subject2'];
    $sub3=$_POST['subject3'];
    $sub4=$_POST['subject4'];
    $sub5=$_POST['subject5'];
    $r=$c->add_subjects($course,$year,$sub1,$sub2,$sub3,$sub4,$sub5);
    if($r){
        echo "<script>alert('submitted successfullt!')</script>";
    }

  }

?>

<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Subject | SRM</title>

    <!-- Custom fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles -->
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

          <!-- ======= Breadcrumbs ======= -->
          <section class="breadcrumbs">
          
            <div class="container">      
          
              <h2><b>Add Subject</b></h2>      
            
            </div>
          
          </section>
          <!-- End Breadcrumbs -->

          <section id="history form" class="contact">

            <div class="container">
              <div class="col-lg-6 ">
                <form action="" method="post" enctype="multipart/form-data" class="">
                  <div class="form-row gy-4">

                    <div class="col-md-6 mt-3">
                      <p>Course Name</p>
                      <select class="form-control text-center" name="course" id="">
                        <option value=""> Select</option>
                        <?php foreach($res as $row): ?>
                        <option value="<?php echo $row['course']; ?>"><?php echo $row['course']; ?></option>
                        <?php endforeach; ?>
                      </select>                    
                    </div>
                    
                    <div class="col-md-6 mt-3 ">
                  <p>Year</p>
                  <select class="form-control text-center" name="year" id="">
                    <option value="">Select</option>

                    <?php 
                      
                      for( $i=1; $i<4 ; $i++){ ?>
                        <option value="<?php echo $i; ?> "><?php echo $i; ?> Year</option>

                    <?php  } ?>
                  
                  </select>
                </div>

                    <div class="col-md-12 mt-3 ">
                      <p>Subject-1</p>
                      <input type="text" class="form-control" name="subject1" required>
                    </div>

                    <div class="col-md-12 mt-3 ">
                      <p>Subject-2</p>
                      <input type="text" class="form-control" name="subject2" required>
                    </div>

                    <div class="col-md-12 mt-3 ">
                      <p>Subject-3</p>
                      <input type="text" class="form-control" name="subject3" required>
                    </div>

                    <div class="col-md-12 mt-3 ">
                      <p>Subject-4</p>
                      <input type="text" class="form-control" name="subject4" required>
                    </div>

                    <div class="col-md-12 mt-3 ">
                      <p>Subject-5</p>
                      <input type="text" class="form-control" name="subject5" required>
                    </div>

                    <div class="col-md-8 mt-3 " >             
                      <button type="submit" name="submit" class="col-lg-3 btn btn-primary">Submit</button>
                      </div>  
                    
                    </div>

                  </div>
                </form>
              </div>

            </section>

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
</body>

</html>