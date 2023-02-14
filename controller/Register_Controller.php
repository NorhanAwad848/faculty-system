<?php



  include'C:\xampp\htdocs\faculty_system\model\student_class.php';
     $student=new student();
     $true=$student->register($_POST["name"],$_POST["age"],$_POST["email"],$_POST["username"],$_POST["password"],$_POST["phone_number"],$_POST["level"]);
    if($true==true){header("location:../index.php");}
   



?>