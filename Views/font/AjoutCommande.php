<?php
include "../../Entities/Commande.php";
include "../../Core/CommandeC.php";
include "../../Core/ProduitC.php";
if (isset($_GET['id'])){
date_default_timezone_set('UTC');
date("d/m/yy");
$ProduitC = new ProduitC();
$Produit= $ProduitC->GetProduit($_GET['id']);
foreach ($Produit as $row) { // it will only be once
$Commande = new Commande(date("yy/m/d"),1,$_GET['id'],1,'NonEnvoyer',$row['Prix']);
$CommandeC = new CommandeC();
$CommandeC->AjoutCommande($Commande);
$tid=$CommandeC->Getlastid();
  $tabc=json_decode($_COOKIE['Commandes'],true);
  foreach ($tid as $nid) {
$tabc[]=$nid['LS'];
  }
setcookie('Commandes', json_encode($tabc)); 

header('Location: Panier.php');
}
}

?>