<?php

class subject {

    private $name;
	private $description;
	private $semester;
	private $level;
	private $code;
	private $db;
 


	
   
	
	function __construct() {
		include_once'C:\xampp\htdocs\faculty_system\include\Database_Class.php';		
		$this->db = new database();
	}

	function sub_ins($name,$description,$semester,$level,$code){
			
		$sql="INSERT INTO subject (name,description,semester,level,code) VALUES('$name','$description','$semester','$level','$code') ";
		 $result=$this->db->insert($sql);
		if($result==true){
		  $this->db->close();	
			 return true;
		}
	}

		


		 
		
	   }







	?>