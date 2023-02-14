<?php
session_start();


if(isset($_POST["assign"]))
    {
        $i=0;
        include'C:\xampp\htdocs\faculty_system\model\student_course_class.php';
       
        
       

        foreach($_POST as $x => $x_value)
        { if($x_value!='assign'){  
             if($i<5)  
             { 
                $s_c=new student_course();
                $true=$s_c->register_c($_SESSION['id'],$x_value);
            
            if($true==true)
            {
                $i=$i+1;
            }


            else 
            {
                $s_c=new student_course();
                $true=$s_c->remove_c($_SESSION['id']);
                header("location:../view/error page for course register.html");
            
            }
        }
    }

    }
    

        if($i==5)
        { 
            $s_c=new student_course();
            $true=$s_c->check_c($_SESSION['id']);
           header('location:../view/student_home.php');

        }
           else
           {
            $s_c=new student_course();
            $true=$s_c->remove_c($_SESSION['id']);
            header("location:../view/error page for course register.html");

           }
           
       



        
}





?>
