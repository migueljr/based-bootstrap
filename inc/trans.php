<?php
	require_once("config.php");
	
	class Trans extends Conn{
		
		public function add(){
			$query = "Insert into produtos (nome) values ('Suplect')";
			$stmt = $this->con->prepare($query);
			$stmt->execute();
			echo $stmt->rowCount();
			
		}
		
		public function update(){
			$query = "update produtos set nome = 'seil' where id=53 ";
			$stmt = $this->con->prepare($query);
			$stmt->execute();
			echo $stmt->rowCount();
			
		}
		
		public function ver(){
			$query = "select * from produtos where id = 53";
			$stmt = $this->con->prepare($query);
			$stmt->execute();
			echo $stmt->rowCount();
			
		}
	}
	
	$trans = new Trans($con);
	$trans->ver();
?>