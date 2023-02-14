<?php

if(isset($_POST["upload"])){


	if(isset($_FILES))
    {
		
		@$file = $_FILES["file"];
        $allowedExts = array("txt", "pdf");
        $maxSize = 1024000;
        $destination = "../uploads/";

		include '../model/UploadClass.php';
        $upload = new upload($file, $allowedExts, $maxSize, $destination);
		$f= $upload->update_file('file');
		echo $f;

	}
	 else
	{		
		echo"error update img";
	}

	include'C:\xampp\htdocs\faculty_system\model\student_course_class.php';
	$s_c=new student_course();
            $result=$s_c->upload_ans($f,$_POST["course_id"],$_POST["id"]);

			if($result==true)
			{
				header('location:../view/student_home.php');


			}
			else
			{
				
				header("location:../view/error page.html");

			}



    
   
   
}
	
	
?>