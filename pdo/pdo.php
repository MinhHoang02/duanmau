<?php
	try {
		$conn = new PDO("mysql:host=localhost;dbname=shopstar;charset=utf8","root",'');	
	} catch (PDOException $e) {
		echo "Lỗi!";
	}  
?>