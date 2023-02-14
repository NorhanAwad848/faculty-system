<?php


//....................................................insertion codes..........................................................

if(isset($_POST["submit"]))

//................................................subject insertion code.......................................................
{
    if($_POST["type"]=='subject')
    {
        include'C:\xampp\htdocs\faculty_system\model\subject_class.php';

        $subject=new subject();
        
        $true=$subject->sub_ins($_POST["name"],$_POST["description"],$_POST["semester"],$_POST["level"],$_POST["code"]);
        
        if($true==true)
        {
            header("location:../view/admin_home.php");


        }
        else
		{
			
            header("location:../view/error page.html");
		}


    }



    //.............................................course insertion code........................................................
    if($_POST['type']=='course')
    {
        include'C:\xampp\htdocs\faculty_system\model\course_class.php';

        $course=new course();

        $true=$course->cou_ins($_POST['day'],$_POST['time'],$_POST['room'],$_POST['subject_code']);

        if($true==true)
        {
            header('location:../view/admin_home.php');


        }
        else 
		{
			
            header("location:../view/error page.html");
		}


        
    }


    //..............................................professor insertion code....................................................................................
    if($_POST['type']=='professor')
    {
        include'C:\xampp\htdocs\faculty_system\model\professor_class.php';

        $professor=new professor();


        $true=$professor->pro_ins($_POST['name'],$_POST['DOB'],$_POST['gender'],$_POST['degree'],$_POST['username'],$_POST['password'],$_POST['department'],$_POST['national_id']);

        if($true==true)
        {
            header('location:../view/admin_home.php');


        }
        else 
		{
            header("location:../view/error page.html");
		}



        
    }
}



//......................................................professor update code.......................................................

if(isset($_POST["update"]))
{
    include'C:\xampp\htdocs\faculty_system\model\professor_class.php';

         $professor = new professor();
		$true = $professor->change($_POST['column'], $_POST['modification'],$_POST['national_id']);


        if($true==true)
        {
            header('location:../view/admin_home.php');



        }
        else 
		{
			
            header("location:../view/error page.html");
		}










}


//....................................................professor delete code..........................................................

if(isset($_POST["delete"]))
{
    include'C:\xampp\htdocs\faculty_system\model\professor_class.php';

         $professor = new professor();
		$true = $professor->remove($_POST['national_id']);


        if($true==true)
        {
            header('location:../view/admin_home.php');


        }
        else 
		{
			
            header("location:../view/error page.html");
		}


}



//.....................................................course assignment code.....................................................

if(isset($_POST["assign"]))
{
    include'C:\xampp\htdocs\faculty_system\model\professor_course_class.php';

    $p_c=new professor_course();
    $true=$p_c->assign($_POST["pr_id"],$_POST["course_id"]);


    if($true==true)
        {
            header('location:../view/admin_home.php');


        }
        else 
		{
			
            header("location:../view/error page.html");
		}


    }

        
       






    




    



?>