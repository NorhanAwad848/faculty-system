<?php

class student {

    private $name;
    private $age;
	private $username;
	private $email;
	private $password;
	private $level;
	private $GPA;
    private $id;
	private $phone_number;
	private $db;
 

	
  
	
	function __construct() {
		include_once'C:\xampp\htdocs\faculty_system\include\Database_Class.php';		
		$this->db = new database();
	}
	
	
	function login($username , $password) {
        $this->username = $username;
		$this->password = $password;
		$sql = "SELECT * FROM student WHERE username='$this->username'";
		$row = $this->db->select($sql);
		if ($row['password'] === $this->password) {
			session_start();
			$_SESSION['name'] = $row['name'];
            $_SESSION['age']=$row['age'];
			$_SESSION['username']=$row['username'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['level'] = $row['level'];
			$_SESSION['GPA'] = $row['GPA'];
            $_SESSION['id'] = $row['id'];
			$_SESSION['phone_number'] = $row['phone_number'];
			$_SESSION['registered'] = $row['registered'];
			
				
			$this->db->close();	
			return true;
		}
		
		$this->db->close();	
		return false;
	
}


        function logout() {
       
			session_start();
			unset($_SESSION['name']);
			unset($_SESSION['age']);
			unset($_SESSION['username']);
			unset($_SESSION['email']);
			unset($_SESSION['password']);
			unset($_SESSION['level']);
			unset($_SESSION['GPA']);
			unset($_SESSION['id']);
			unset($_SESSION['phone_number']);
		
			session_destroy();
			header("location:../index.php");
			$this->db->close();	
		}


		function register($name,$age,$email,$username,$password,$phone_number,$level){
			
         $sql="INSERT INTO student (name,age,email,username,password,phone_number,level) VALUES('$name','$age','$email','$username','$password','$phone_number','$level') ";
          $result=$this->db->insert($sql);
		 if($result==true){
		   $this->db->close();	
			  return true;
		 }

		 


		  
		 
		}

		function shownumber()
			{
				$sql="SELECT id  FROM student";
				$result=$this->db->check($sql);
				
				
				
				$this->db->close();
				return $result;

				


			}




			function search()
			{
				
				$sql = "SELECT * FROM student ";
				$result=$this->db->conn->query($sql);

				$this->db->close();
				return $result;

			}
   









	}





?>
