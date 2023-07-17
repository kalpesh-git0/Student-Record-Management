<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
  
  header ( 'location:login.php' );
}

$id=$_SESSION['id'];

include 'config/control.php';
$c=new control();


      $res=$c->view_subjects();
      $cnt=mysqli_num_rows($res);
      if(!$cnt){
        echo "<script>alert('No Record Found!!!');</script>";
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

    <title>Manage Subjects | SRM</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    
    <!-- data table css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    

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

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
      <div class="container">

        
      <h2 class=" mb-4"><b>Manage Subjects</b></h2>
        
      </div>
    </section><!-- End Breadcrumbs -->

<section id="history form" class="contact">

<div class="container">
<div class="col-lg-12 ">         
<table id="example" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th class="th-sm">Sr. No.
                            </th>
                            <th class="th-sm">Course
                            </th>
                            <th class="th-sm">Year
                            </th>
                            <th class="th-sm">Subjects
                            </th>
                            <th class="th-sm">Creation Date
                            </th>
                            <th class="th-sm">Action
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $sr=0; foreach($res as $row): $sr++;?>
                          <tr>
                            <td><?php echo $sr; ?></td>
                            <td><?php echo $row['course_name']; ?></td>
                            <td><?php echo $row['year']; ?></td>
                            <td><?php echo $row['subject1'],  ", ",$row['subject2'] ,", ",$row['subject3'] , ", ",$row['subject4'], ", ",$row['subject5']; ?></td>
                            <td><?php echo $row['creation_date']; ?></td>
                            <td>x,x</td>

                          </tr>
                          <?php endforeach;?>
                    
  </tbody>
</table>

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
    <!-- data table js -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>

</body>

</html>