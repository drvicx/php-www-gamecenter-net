<?php

try {
	$pdo = new PDO('mysql:dbname=gamecenter;charset=UTF8; host=localhost', 'root', '1234@root');
	
} catch (PDOException $e) {
	die($e->getMessage());
}