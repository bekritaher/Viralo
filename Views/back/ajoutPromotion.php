
<?PHP
include "../../config.php";
include "../../Entities/promotion.php";
include "../../Core/PromotionC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['img']) and isset($_POST['pourc'])) {
	
	
$promotion1=new Promotion($_POST['id'],$_POST['nom'],$_POST['img'],$_POST['pourc']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3x  

$promotion1C=new PromotionC();
$promotion1C->ajouterPromotion($promotion1);
header('Location: afficherPromotion.php');

		

	
}else{
	echo "vérifier les champs";
}
//*/

?>