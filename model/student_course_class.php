<?php 

class student_course {

    private $st_id;
	private $course_id;
	private $grade;
	private $db;
 


	
   
	
	function __construct()
	 {
		include_once'C:\xampp\htdocs\faculty_system\include\Database_Class.php';		
		$this->db = new database();
	}


	   function register_c($st_id,$course_id)

		{
			$sql1=" SELECT * FROM student_course  where st_id='$st_id'";

			$check=$this->db->check($sql1);

			if($check>4)

			{return false;}
			
			else{

			$sql2="SELECT * FROM  course where course_id='$course_id'";
			
			$result=$this->db->select($sql2);
			// $row=$result->fetch_assoc();                                  
			
			$time=$result['time'];
			$day=$result['day'];
		
			
			$sql3=" SELECT * FROM student_course join course on student_course.course_id=course.course_id where st_id='$st_id' and time='$time' and day='$day'";
			
			$r= $this->db->check($sql3);
			
			if($r==0)
             {
				$sql="INSERT INTO student_course (st_id,course_id) VALUES('$st_id','$course_id') ";
					$result=$this->db->insert($sql);
					if($result==true)
					{
					$this->db->close();	
						return true;
					}
				}
			else {return false;}
			}	


		}


		function show_table($st_d)
		{
			
			$sql = "SELECT student_course.course_id,subject.name,time,day FROM student_course JOIN course ON student_course.course_id=course.course_id join subject ON subject_code=code 	WHERE st_id='$st_d'";


			$result=$this->db->conn->query($sql);

			 
	
			
			$this->db->close();
			return $result;

		}


		
		function show_transcript($st_d)
		{
			
			$sql = "SELECT subject.name,grade FROM student_course JOIN course ON student_course.course_id=course.course_id join subject ON subject_code=code 	WHERE st_id='$st_d'";


			$result=$this->db->conn->query($sql);

			 
	
			
			$this->db->close();
			return $result;

		}

		function show_course_students($course_id)
		{

			$sql = "SELECT name,id,email ,answer FROM student_course JOIN student ON st_id=id 	WHERE course_id='$course_id'";
			

			$result=$this->db->conn->query($sql);

			 
	
			
			$this->db->close();
			return $result;

		}
		function grade($grade,$st_id,$course_id)
		{
			$sql="UPDATE student_course SET grade='$grade' WHERE st_id='$st_id' and course_id='$course_id'";
			
			$result=$this->db->update($sql);

			$this->db->close();
			return $result;





		}

		function upload_ans($answer,$course_id,$st_id)
		{
			$sql="UPDATE student_course SET answer='$answer' WHERE st_id='$st_id' and course_id='$course_id'";
			$result=$this->db->update($sql);

			$this->db->close();
			return $result;


		}

		function show_questions($st_d)
		{
			
			$sql = "SELECT subject.name,question FROM student_course JOIN course ON student_course.course_id=course.course_id join subject ON subject_code=code 	WHERE st_id='$st_d'";


			$result=$this->db->conn->query($sql);

			 
	
			
			$this->db->close();
			return $result;

		}
		function remove_c($st_id)
		{
			$sql="DELETE FROM student_course WHERE st_id='$st_id'";

			$result=$this->db->delete($sql);
			$this->db->close();





		}

		function check_c($st_id)
		{
			$sql="UPDATE  student SET registered='true' WHERE id='$st_id'";

			$result=$this->db->update($sql);


			$this->db->close();



		}














	}







	?>