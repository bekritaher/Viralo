
<?PHP
include "../../config.php";
include "../../Entities/client.php";
include "../../Core/ClientC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['adresse'])) 
{
	
	
$client1=new Client($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['adresse']);


$client1C=new ClientC();
$client1C->AjouterClient($client1);
header('Location: AfficherClient.php');

		

	
}else{
	echo "vérifier les champs";
}
//*/

?>