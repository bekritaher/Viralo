<?php 
include "../../config.php";
Class CommandeC {
function AjoutCommande($commande){
$sql = "insert into commande (date,client,produit,quantite,status,prix) values (:date,:client,:produit,:quantite,:status,:prix)" ;
$db = config::getConnexion() ;
try {
	$req = $db->prepare($sql);
        $client=$commande->getclient();
        $date=$commande->getdate();
        $status=$commande->getstatus();
        $quantite=$commande->getquantite();
        $produit=$commande->getproduit();
        $prix=$commande->getprix();
        //lier variable => paramètre
        $req->bindValue(':status',$status);
		$req->bindValue(':date',$date);
		$req->bindValue(':client',$client);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':produit',$produit);
		$req->bindValue(':prix',$prix);
$req->execute();
}
catch ( Exception $e){
	echo 'Erreur: '.$e->getMessage();
}
}
function AffichCommande(){
	$sql  = "select * from commande";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql); 
return $liste ;
	}
	catch(Exception $e){
 echo 'Erreur: '.$e->getMessage();
	}
}

function SuppCommande($id){
	$sql = "Delete from Commande where id=:id";
$db = config::getConnexion();
try{
	$req=$db->prepare($sql);
$req->bindValue(":id",$id);
$req->execute();
}
catch(Exception $e){
	echo 'Erreur : '.$e->getMessage();
}
}

function ModifCommandeCol($id,$col,$nv){
$sql = "Update commande set $col=:nv where id =:id";
$db = config::getConnexion();
try {
	$req = $db->prepare($sql);
        //lier variable => paramètre
        $req->bindValue(':id',$id);
		$req->bindValue(':nv',$nv);
	$req->execute();
}
catch(Exception $e){
	echo 'Erreur :'.$e->getMessage();
}
}


function ModifCommande($commande,$idd){
$sql = "Update commande set id=:id ,date=:date ,panier=:panier,client=:client,produit=:produit where id =:idd";
$db = config::getConnexion();
try {
	$req = $db->prepare($sql);
   $id=$employe->getid();
        $date=$employe->getdate();
        $panier=$employe->getpanier();
        $client=$employe->getclient();
        $produit=$employe->getproduit();
        //lier variable => paramètre
        $req->bindValue(':id',$id);
                $req->bindValue(':idd',$idd);
		$req->bindValue(':date',$date);
		$req->bindValue(':panier',$panier);
		$req->bindValue(':client',$client);
		$req->bindValue(':produit',$produit);
	$req->execute();
}
catch(Exception $e){
	echo 'Erreur :'.$e->getMessage();
}
}
	
	function GetCommande($id){
		try{
		$sql="SELECT * from commande where id=$id";
$db = config::getConnexion();

$liste=$db->query($sql);
return 	$liste ;
}
	catch(Exception $e){
 echo 'Erreur: '.$e->getMessage();
	}
}

function Getlastid(){
	try{
	$sql = "SELECT LAST_INSERT_ID() AS LS";
$db = config::getConnexion();

$liste=$db->query($sql);
return 	$liste ;
}
	catch(Exception $e){
 echo 'Erreur: '.$e->getMessage();
	}
}
}



 ?>

