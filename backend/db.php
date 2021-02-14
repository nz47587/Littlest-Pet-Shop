<?php

require '../dbconnect.php';


if(isset($_POST['insert'])){
	$emri = $_POST['emri'];
	$mbiemri = $_POST['mbiemri'];
	$email = $_POST['email'];
  $qyteti = $_POST['qyteti'];


  $query = $pdo->prepare('SELECT email FROM adopto');
  $query->execute();
  $adopto = $query->fetchAll();

$sql = 'INSERT INTO adopto (emri, mbiemri, email, qyteti) 
	VALUES (?,?,?,?)';
	$query = $pdo->prepare($sql);
	$query->execute([$emri,$mbiemri,$email,$qyteti]);
	header('Location: ../adoptMe.php');
}

?>
