<?php
class Commande{
private $id ;
private $date ;
private $livraison ;
private $client;
private $produit;
private $status;
private $quantite;
private $prix;
function __construct($da,$cl,$pr,$qu,$st,$px){
$this->date  = $da ;
$this->client= $cl ;
$this->produit = $pr ;
$this->status = $st ;
$this->quantite = $qu ;
$this->prix = $px;
}
function getid(){
	return $this->id ;
}
function getdate(){
	return $this->date ;
}
function getlivraison(){
	return $this->livraison ;
}
function getclient(){
	return $this->client ;
}
function getproduit(){
	return $this->produit ;
}
function getprix(){
	return $this->prix ;
}
function getquantite(){
	return $this->quantite ;
}
function getstatus(){
	return $this->status ;
}
}

?>