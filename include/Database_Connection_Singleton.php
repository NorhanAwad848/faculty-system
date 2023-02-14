<?php 

class Singleton {
	
	private static  $uniqueinstance = null;
	
	//private Singleton();
	private function __construct()
	{}
	
	public static function getinstance()
	{
		if(@self::$uniqueinstance == null)
		{
			require_once 'C:\xampp\htdocs\faculty_system\include\connect.php';
			self::$uniqueinstance =  new mysqli($host, $dbUser, $dbPass, $dbName);
			//$uniqueinstance =  new mysqli('localhost', 'root', '', 'school_database');
		}
		return self::$uniqueinstance;
	}
	
}
















?>