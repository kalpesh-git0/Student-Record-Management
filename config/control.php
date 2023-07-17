<?php
          include('model.php');

class control{
     function login($username,$password){
          $m=new model();
          $r=$m->login1($username,$password);
          return $r;
     }

     function view_profile($id){
          $m=new model();
          $r=$m->view_profile1($id);
          return $r;
     }

     function add_student($name,$fname,$mname,$gender,$enroll,$email,$course,$address,$mobile,$year,$sec_board,$sec_roll,$sec_obt,$sec_max,$sec_percent,$sec_yop,$sr_board,$sr_roll,$sr_obt,$sr_max,$sr_percent,$sr_yop,$graduation,$univerity,$grad_roll,$grad_obt,$grad_max,$grad_percent,$grad_yop){
          $m=new model();
          $r=$m->add_student1($name,$fname,$mname,$gender,$enroll,$email,$course,$address,$mobile,$year,$sec_board,$sec_roll,$sec_obt,$sec_max,$sec_percent,$sec_yop,$sr_board,$sr_roll,$sr_obt,$sr_max,$sr_percent,$sr_yop,$graduation,$univerity,$grad_roll,$grad_obt,$grad_max,$grad_percent,$grad_yop);
          return $r;
     }
     
     function view_students(){
          $m=new model();
          $r=$m->view_students1();
          return $r;
     }
     
     function view_studentsByCourse($id){
          $m=new model();
          $r=$m->view_studentsByCourse1($id);
          return $r;
     }

     function delete_student($id){
          $m=new model();
          $r=$m->delete_student1($id);
          return $r;
     }
     
     function create_batch($course){
          $m=new model();
          $r=$m->create_batch1($course);
          return $r;
     }

     function view_batchs(){
          $m=new model();
          $r=$m->view_batchs1();
          return $r;
     }

     function delete_batch(){
          $m=new model();
          $r=$m->create_batch1();
          return $r;
     }

     function add_subjects($course,$year,$sub1,$sub2,$sub3,$sub4,$sub5){
          $m=new model();
          $r=$m->add_subjects1($course,$year,$sub1,$sub2,$sub3,$sub4,$sub5);
          return $r;
     }

     function view_subjects(){
          $m=new model();
          $r=$m->view_subjects1();
          return $r;
     }

     function delete_subject(){
          $m=new model();
          $r=$m->create_subject1();
          return $r;
     }
}
?>