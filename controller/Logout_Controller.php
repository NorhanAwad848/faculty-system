<?php 

if(isset($_POST["Logout"])){

	if($_POST["Logout"]=="pr")
	{

		include'C:\xampp\htdocs\faculty_system\model\professor_class.php';
		$professor = new professor();
		$professor->logout();	
	}

	else if ($_POST["Logout"]=="st")
	{

		include'C:\xampp\htdocs\faculty_system\model\student_class.php';
		$student = new student();
		$student->logout();
	}

	else if ($_POST["Logout"]=="ad")
	{

		header("location:../index.php");

	}

	

	

	

		}
		
?>