<?php

if(isset($_POST["assign"]))
    {
        include'C:\xampp\htdocs\faculty_system\model\student_course_class.php';

        $count=0;
        $i=0;
        
        $num=((count($_POST))/2)-1;
        for($i=0;$i<$num;$i++)
        {    if(!empty($_POST[$i]))  {
             $s_c=new student_course();
            $result= $s_c->grade($_POST[$i],$_POST[ $i.'S'],$_POST['course_id']);
          

            if ($result == true) 
            {
            $count=$count+1;
            }
        }

    

            

        }
         if ($count == $num) 
         {
            header("location:../view/professor_home.php");
            }
            
        
         else 
         {
            header("location:../view/error page.html");
         }







    }







?>