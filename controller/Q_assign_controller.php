
     <?php
 if(isset($_POST['submit'])) {
    include'C:\xampp\htdocs\faculty_system\model\course_class.php';
    $course = new course();
   $result= $course->insert_Q($_POST['question'],$_POST['course_id']);	
   
		if ($result == true) 
		{
				header("location:../view/professor_home.php");
			}
			
		
		else 
		{
			header("location:../view/error page.html");
		}
    
















 }  

































?>

