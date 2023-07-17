<?php
class model{
     public $con="";
          function __construct()
          {
               $this->con=mysqli_connect("localhost","root","","srm");

          }
          
          function login1($username,$password){
       
               //to prevent from mysqli injection 
               $username = stripcslashes($username); 
               $password = stripcslashes($password); 
               $username = mysqli_real_escape_string($this->con, $username); 
               $password = mysqli_real_escape_string($this->con, $password); 
            
               $sql = "SELECT * FROM `admin-data` WHERE username = '$username' and password = '$password' "; 
               $result = mysqli_query($this->con, $sql); 
               $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
               $count = mysqli_num_rows($result); 
               
                 if($count == 1){ 
                     $_SESSION['login']=$row['username']; 
                     $_SESSION['name']=$row['name'];
                     $_SESSION['id']=$row['id'];
                
                   header("location:index.php"); 
                 } else{ 
 
                     echo "<script>alert('Login failed. Invalid username or password.');</script>"; 
                  
                  }    
                    
          }
          
          function view_profile1($id){
               $r=mysqli_query($this->con,"SELECT * FROM `admin-data` WHERE id = '$id'");
               return $r;
          }

          function add_student1($name,$fname,$mname,$gender,$enroll,$email,$course,$address,$mobile,$year,$sec_board,$sec_roll,$sec_obt,$sec_max,$sec_percent,$sec_yop,$sr_board,$sr_roll,$sr_obt,$sr_max,$sr_percent,$sr_yop,$graduation,$university,$grad_roll,$grad_obt,$grad_max,$grad_percent,$grad_yop){
                $r=mysqli_query($this->con,"INSERT INTO `student_data`( `name`, `gender`, `father_name`, `mother_name`, `email`, `mobile`, `address`, `enrollment_no`, `course`, `year`, `sec_board`, `sec_roll`, `sec_obt`, `sec_max`, `sec_percent`, `sec_yop`, `sr_board`, `sr_roll`, `sr_obt`, `sr_max`, `sr_percent`, `sr_yop`,`graduation`, `university`, `grad_roll`, `grad_obt`, `grad_max`, `grad_percent`, `grad_yop`) VALUES ('$name','$gender','$fname','$mname','$email','$mobile','$address','$enroll','$course','$year','$sec_board','$sec_roll','$sec_obt','$sec_max','$sec_percent','$sec_yop','$sr_board','$sr_roll','$sr_obt','$sr_max','$sr_percent','$sr_yop','$graduation','$university','$grad_roll','$grad_obt','$grad_max','$grad_percent','$grad_yop')");
                return $r;
          }

          function view_students1(){
               $r=mysqli_query($this->con,"SELECT * FROM `student_data` WHERE 1");
               return $r;
          }

          function view_studentsByCourse1($id){
               $r=mysqli_query($this->con,"SELECT * FROM `student_data` WHERE `course` = '$id'");
               return $r;
          }

          function delete_student1($id){
          $r=mysqli_query($this->con,"DELETE FROM `student_data` WHERE `id` = '$id'");
          return $r;
          }
          
          function create_batch1($course){
               $r=mysqli_query($this->con,"INSERT INTO `course_data` ( `course`) VALUES ('$course')");
               return $r;
          }
          
          function view_batchs1(){
               $r=mysqli_query($this->con,"SELECT * FROM `course_data` WHERE 1");
               return $r;
          }

          function delete_batch1(){
               $r=mysqli_query($this->con,"");
               return $r;
          }

          function add_subjects1($course,$year,$sub1,$sub2,$sub3,$sub4,$sub5){
               $r=mysqli_query($this->con,"INSERT INTO `subjects`( `course_name`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `year`) VALUES ('$course','$sub1','$sub2','$sub3','$sub4','$sub5','$year')");
               return $r;
          }
          
          function view_subjects1(){
               $r=mysqli_query($this->con,"SELECT * FROM `subjects` WHERE 1");
               return $r;
          }

          function delete_subbjects1(){
               $r=mysqli_query($this->con,"");
               return $r;
          }
}
?>