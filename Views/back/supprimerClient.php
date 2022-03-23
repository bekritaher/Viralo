<?PHP
include "../../Core/ClientC.php";
include "../../config.php";
$clientC=new ClientC();
if (isset($_POST["id"])){
	$clientC->supprimerClient($_POST["id"]);
	header('Location: AfficherClient.php');
}

?>