<?php 
/*require_once("connect.php");*/

if(isset($_POST["login"])){
		// professor page.............................................................................................................
	if($_POST["type"]=="pr"){

		include'C:\xampp\htdocs\faculty_system\model\professor_class.php';
	if(!empty($_POST['username']) && !empty($_POST['password'])) {
		//$username=$_POST['username'];
		//$password=$_POST['password'];
		$professor = new professor();
		$true = $professor->login($_POST['username'], $_POST['password']);
		
		if ($true == true) 
		{
				header("location:../view/professor_home.php");
			}
			
		
		else 
		{
			
			$param = "false";
			header("location: ../index.php?id=$param");
		}
	}}	
	
	// student page............................................................................................................. 
	else if($_POST["type"]=="st"){

		include'C:\xampp\htdocs\faculty_system\model\student_class.php';
	if(!empty($_POST['username']) && !empty($_POST['password'])) {
		//$username=$_POST['username'];
		//$password=$_POST['password'];
		$student = new student();
		$true = $student->login($_POST['username'], $_POST['password']);
		
		if ($true == true) 
		{
				header("location:../view/student_home.php");
			}
			
		
		else 
		{
			
			$param = "false";
			header("location: ../index.php?id=$param");
		}
	}}

	// student page.............................................................................................................
	else if($_POST["type"]=="ad")
	{    
		if(!empty($_POST['username']) && !empty($_POST['password']))
		 {
			if($_POST['username']=="admin" && $_POST['password']=="259")
			{
			header("location:../view/admin_home.php");
		     }
			
			else
			{
			
				$param = "false";
				header("location: ../index.php?id=$param");
			}

		}

    }
}
		
?>