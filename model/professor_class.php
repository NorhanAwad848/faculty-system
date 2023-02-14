<?php
class professor {

    private $name;
	private $DOB;
	private $gender;
    private $degree;
    private $username;
	private $password;
    private $department;
    private $national_id;
	private $db;
	
	function __construct() {
		include_once'C:\xampp\htdocs\faculty_system\include\Database_Class.php';		
		$this->db = new database();
	}
	
	
	function login($username , $password) {
        $this->username = $username;
		$this->password = $password;
		$sql = "SELECT * FROM professor WHERE username='$this->username'";
		$row = $this->db->select($sql);
		if ($row['password'] === $this->password) {
			session_start();
			$_SESSION['name'] = $row['name'];
			$_SESSION['DOB']=$row['DOB'];
			$_SESSION['gender'] = $row['gender'];
            $_SESSION['degree'] = $row['degree'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['department'] = $row['department'];
            $_SESSION['national_id'] = $row['national_id'];
				
			$this->db->close();	
			return true;
		}
		
		$this->db->close();	
		return false;
		
	}

		function logout() {
       
			session_start();
			unset($_SESSION['name']);
			unset($_SESSION['dob']);
			unset($_SESSION['gender']);
			unset($_SESSION['degree']);
			unset($_SESSION['username']);
			unset($_SESSION['password']);
			unset($_SESSION['department']);
			unset($_SESSION['national_id']);
			
			
		
			
			session_destroy();
			header("location:../index.php");
			$this->db->close();	
		}



		function pro_ins($name,$DOB,$gender,$degree,$username,$password,$department,$national_id){
			
			$sql="INSERT INTO professor (name,DOB,gender,degree,username,password,department,national_id) VALUES('$name','$DOB','$gender','$degree','$username','$password','$department','$national_id') ";
			 $result=$this->db->insert($sql);
			if($result==true){
			  $this->db->close();	
				 return true;
			}
		    }

			function shownumber()
			{
				$sql="SELECT national_id  FROM professor";
				$result=$this->db->check($sql);
				
				
				
				$this->db->close();
				return $result;


			}




			function search($department)
			{
				
				$sql = "SELECT * FROM professor WHERE department='$department'";
				$result=$this->db->conn->query($sql);

				 
		
				
				$this->db->close();
				return $result;

			}


			function change($column,$modification,$national_id)
			{
				$sql="UPDATE professor SET $column='$modification' WHERE national_id='$national_id'";

				$result=$this->db->update($sql);

				$this->db->close();
				return $result;






			}
   

			function remove($national_id)
			{
				$sql="DELETE FROM professor  WHERE national_id='$national_id'";

				$result=$this->db->delete($sql);

                $this->db->close();
				return $result;






			}
   
			
   
   
			 
			
		   
   

        











}



?>