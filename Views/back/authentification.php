<?php 
include "../../Core/CompteC.php";
session_start();
$mdp=$_POST['password'];
$name=$_POST['username'];
$comptec = new CompteC();
$comptes = $comptec->AfficherCompte();
foreach ($comptes as $row) {
if(($mdp==$row['mdp']) && ($name ==$row['username'])){
	$_SESSION['username']=$name ;
	$_SESSION['mdp']=$mdp;
	$_SESSION['img']=$row['img'];
	header('Location: index.php');
	  exit();        
}
} 
	header('Location: login.php');


?>