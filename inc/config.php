<?php
	try{
		$con = new PDO("mysql:host=localhost;dbname=test", "root", "vertrigo");
	}catch(PDOException $e){
		echo $e->getCode();
	}
	
	class Conn{
		public $con;
		
		public function __construct(PDO $con){
			$this->con = $con;
		}
	}
	
?>