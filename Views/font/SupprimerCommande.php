<?php
include "../Entities/Commande.php";
include "../Core/CommandeC.php";

if (isset($_GET['id'])){
$CommandeC = new CommandeC();
$CommandeC->SuppCommande($_GET['id']);
header('Location: Panier.php');
}
?>