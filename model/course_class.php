<?php

class course {

    private $question;
	private $answer;
	private $day;
    private $time;
	private $room;
	private $course_id;
	private $subject_code;
	private $db;
 


	
   
	
	function __construct() {
		include_once'C:\xampp\htdocs\faculty_system\include\Database_Class.php';		
		$this->db = new database();
	}

	function cou_ins($day,$time,$room,$subject_code){
			
		$sql="INSERT INTO course (day,time,room,subject_code) VALUES('$day','$time','$room','$subject_code') ";
		 $result=$this->db->insert($sql);
		if($result==true){
		  $this->db->close();	
			 return true;
		}

		
	    }





		function show($student_level)
			{
				
				$sql = "SELECT course_id,subject_code,name,day,time,room FROM course JOIN  subject ON subject_code=code	WHERE level='$student_level'";


				$result=$this->db->conn->query($sql);

				 
		
				
				$this->db->close();
				return $result;

			}



			function insert_Q($question,$course_id)
			{
				$sql="UPDATE course SET question ='$question' WHERE course_id='$course_id'";

				$result=$this->db->update($sql);

					$this->db->close();
					return $result;



				




			}

		 
		
	   }







	?>