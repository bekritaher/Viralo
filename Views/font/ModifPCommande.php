<?php 
include "../../Core/CommandeC.php";
$prix= $_POST['Prix'];
$quantite = $_POST['Quantite'];
$id = $_POST['id'];
$CommandeC = new CommandeC();
$CommandeC->ModifCommandeCol($id,'Quantite',$quantite);
$CommandeC->ModifCommandeCol($id,'Prix',$prix);
$tab = $CommandeC->AffichCommande();
$PT =  0;
foreach ($tab as $row) {
$PT +=$row['Prix'];
}
echo $PT.'D';
?>