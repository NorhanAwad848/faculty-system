<?php

class professor_course {

    private $pr_id;
	private $course_id;
	private $db;
 


	
   
	
	function __construct() {
		include_once'C:\xampp\htdocs\faculty_system\include\Database_Class.php';		
		$this->db = new database();
	}





	
	function assign($pr_id,$course_id){
			
		$sql="INSERT INTO professor_course (pr_id,course_id) VALUES('$pr_id','$course_id') ";
		 $result=$this->db->insert($sql);
		 
		if($result==true){
		  $this->db->close();	
			 return true;
		}
		}



		function show_courses($pr_id)
		{
			
			$sql = "SELECT * FROM professor_course JOIN course ON professor_course.course_id=course.course_id join subject on subject_code=code	WHERE pr_id='$pr_id'";
			

			$result=$this->db->conn->query($sql);

			 
	
			
			$this->db->close();
			return $result;

		}


		

	}
	?>